@extends('partials.master')
@section('content')

    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            <!--HERO-->
            <section class="hero-image">
                <img src="{{ asset('assets/pict/resto.png') }}" alt="hero rumah makan">
                <div class="hero-content">
                    <div class="my-auto d-flex justify-content-center">
                        <h1>Kuliner</h1>
                    </div>
                </div>
            </section>

            <!--MENU BAR-->
            @include('partials.menubar')
            {{-- end MENUBAR --}}

            <!--SEARCH-->
            <div class="bg-section mt-4 pb-5">
                {{-- pills kategori --}}
                <div class="pills-kategori p-0 pt-4">
                    @php
                        $activeCategory = request('category_id', $categories->first()->id);
                    @endphp
                    <ul class="nav nav-pills mb-4" id="myTab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $activeCategory == $category->id ? 'active' : '' }}" id="home-tab"
                                    role="tab" aria-selected="{{ $activeCategory ? 'true' : '' }}"
                                    href="/culinaries?category_id={{ $category->id }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    {{-- tab content pills --}}
                    <div class="tab-content" id="myTabContent">
                        <form action="/culinaries" method="GET" id="search-form" class="w-100">
                            <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                            <div class="container search-all">
                                <div class="tab-pane fade show active" role="tabpanel">
                                    <!-- Isi Tab KTEGORI 1 di sini -->
                                    {{-- search --}}
                                    <div class="searchbar d-flex w-100 justify-content-center">
                                        <div class="searchinput" style="width: 100%">
                                            <button>
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11" cy="11" r="8" stroke="#63666A"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <input name="search" class="form-control me-2" type="search"
                                                placeholder="Cari Rumah Makan" aria-label="Search"
                                                value="{{ request('search') }}">
                                        </div>
                                        <div class="buttonsearch">
                                            <button class="small-button" type="submit">Cari</button>
                                        </div>
                                    </div>
                                    {{-- end search --}}
                                </div>
                            </div> {{-- end container search --}}
                        </form>

                        <!-- CARD RESTAURANT-->
                        <div class="restaurant container">
                            @if ($culinaries->count() > 0)
                                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4 ">
                                    @foreach ($culinaries as $culinary)
                                        <div class="col">
                                            <div class="card-2">
                                                {{-- <div class="shadow-sm cardlist bg-white"> --}}
                                                <div class="content-img">
                                                    <img src="{{ Storage::url($culinary->image) }}" class="card-img-top"
                                                        alt="gambar">
                                                </div>
                                                <div class="card-body pt-2">
                                                    <h5>{{ $culinary->name }}</h5>
                                                </div>
                                                <div class="card-btn d-flex justify-content-center">
                                                    <button onclick="window.location='/culinaries/{{ $culinary->slug }}'"
                                                        class="detail-button"> Lihat Detail</button>
                                                </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="pagination d-flex justify-content-center pt-5">
                                    {{ $culinaries->appends(['category_id' => $category_id, 'search' => $search])->links('partials.custom_pagination') }}
                                </div>
                            @else
                                <div class="pt-5">
                                    <p>Belum ada data yang tersedia.</p>
                                </div>
                            @endif {{-- end CARD --}}
                        </div> {{-- end container restaurant --}}

                    </div> {{-- end tab content pills --}}
                </div> {{-- end piils kategori --}}
            </div> {{-- end BG SECTION --}}


            <!-- FOOTER-->
        </div>
        @include('partials.footer')
    </div>
@endsection
