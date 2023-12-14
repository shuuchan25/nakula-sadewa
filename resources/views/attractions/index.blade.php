@extends('partials.master')
{{-- @dd($attractionsByCategory) --}}
{{-- @dd($categories) --}}
@section('content')

    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            <section class="atraksi">
                <!--HERO-->
                <section class="hero-image">
                    <img src="{{ asset('assets/pict/atraksi.webp') }}" alt="hero destinasi">
                    <div class="hero-content">
                        <div class="my-auto d-flex justify-content-center">
                            <h1>Atraksi</h1>
                        </div>
                    </div>
                </section>

                {{-- MENUBAR --}}
                @include('partials.menubar')
                {{-- end MENUBAR --}}

                {{-- MENU KATEGORI --}}
                <div class="wisata mt-5">
                    <div class="tabs rounded">
                        <ul class="nav nav-tabs border-0 justify-content-center">
                            @php
                                $categoryReq = request('category_id');
                                $subCategoryReq = request('sub_category_id');
                                $searchAll = !$categoryReq && !$subCategoryReq;
                            @endphp
                            <li class="nav-item" role="presentation">
                                <a class="nav-link category-tab {{ $searchAll ? 'active' : '' }} link" id="all-tab" aria-selected="true" href="/attractions?search={{ request('search') }}">
                                    <h4>Semua</h4>
                                </a>
                            </li>
                            @php
                                $activeCategory = request('category_id');
                            @endphp
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link category-tab {{ $activeCategory == $category->id ? 'active' : '' }} link"
                                        href="/attractions?category_id={{ $category->id }}&sub_category_id=">
                                        <h4>{{ $category->name }}</h4>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Tab panes  -->
                        <div class="bg-section pt-4 pb-5">
                            <div class="tab-pane active" id="alam">
                                {{-- pills kategori --}}
                                <div class="pills-kategori p-0">
                                    <ul class="nav nav-pills mb-4" id="myTab" role="tablist">
                                        @php
                                            $activeSubCategory = request('sub_category_id');
                                        @endphp
                                        @foreach ($subCategories as $index => $subCategory)
                                            <li class="nav-item">
                                                <a class="nav-link sub-category-tab {{ $activeSubCategory == $subCategory->id ? 'active' : '' }}"
                                                    id="home-tab"
                                                    href="/attractions?category_id={{ request('category_id') }}&sub_category_id={{ $subCategory->id }}&search={{ request('search') }}"
                                                    role="tab"
                                                    aria-selected="{{ $activeSubCategory ? 'true' : '' }}">
                                                    {{ $subCategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    {{-- tab content pills --}}
                                    <div class="tab-content" id="myTabContent">
                                        <form action="/attractions" method="GET" id="search-form" class="w-100">
                                            <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                                            <input type="hidden" name="sub_category_id"
                                                value="{{ request('sub_category_id') }}">
                                            <div class="container search-all">
                                                <div class="tab-pane fade show active" role="tabpanel">
                                                    <!-- Isi Tab KTEGORI 1 di sini -->
                                                    {{-- search --}}
                                                    <div class="searchbar d-flex w-100 justify-content-center">
                                                        <div class="searchinput" style="width: 100%">
                                                            <button>
                                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="11" cy="11" r="8"
                                                                        stroke="#63666A" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M16.5 16.958L21.5 21.958" stroke="#63666A"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </button>
                                                            <input name="search" class="form-control me-2" type="search"
                                                                placeholder="Cari Atraksi" aria-label="Search"
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

                                        {{-- CARD --}}
                                        @if ($attractions->count() > 0)
                                            <div class="container">
                                                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4">
                                                    @foreach ($attractions as $attraction)
                                                        <div class="col">
                                                            <div class="card-2">
                                                                <div class="content-img">
                                                                    <img src="{{ asset('storage/' . $attraction->image) }}"
                                                                        class="card-img-top" alt="gambar">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h5>{{ $attraction->name }}</h5>
                                                                </div>
                                                                <div class="card-btn d-flex justify-content-center">
                                                                    <button
                                                                        onclick="window.location='/attractions/{{ $attraction->slug }}'"
                                                                        class="detail-button">Lihat Detail</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <p class="d-flex justify-content-center align-item-center mt-5">Belum ada yang
                                                tersedia.</p>
                                        @endif {{-- end CARD --}}

                                    </div> {{-- end tab content pills --}}
                                </div> {{-- end piils kategori --}}
                            </div> {{-- end tab pane --}}
                            <div class="pagination d-flex justify-content-center pt-5">
                                {{ $attractions->appends(['category_id' => $category_id, 'sub_category_id' => $sub_category_id, 'search' => $search])->links('partials.custom_pagination') }}
                            </div>
                        </div>{{-- end BG Section --}}
                    </div>{{-- end TABS ROUNDED --}}
                </div>{{-- end CLASS WISATA --}}
            </section>

        </div>
        @include('partials.footer')
    </div>

    <script></script>
@endsection
