@extends('partials.master')
@section('content')

    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            <!--HERO-->
            <section class="hero-image">
                <img src="{{ asset('assets/pict/toko2.png') }}" alt="hero rumah makan">
                <div class="hero-content">
                    <div class="my-auto d-flex justify-content-center">
                        <h1>Pusat Oleh-Oleh</h1>
                    </div>
                </div>
            </section>

            <!--MENU BAR-->
            @include('partials.menubar')
            {{-- end MENUBAR --}}

            <!--SEARCH-->
            <div class="bg-section" mt-3>
                <div class="tab-content pt-4 pb-5">
                    <div class="container search-all">
                        <form action="/shops" method="get">
                            <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                                <div class="searchinput" style="width: 100%">
                                    <button>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <input name="search" class="form-control me-2" type="search"
                                        placeholder="Cari Pusat Oleh-oleh" aria-label="Search">
                                </div>
                                <div class="buttonsearch">
                                    <button class="small-button" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- end search --}}

                    <!-- CARD OLEH OLEH-->
                    <div class="container mt-3">
                        @if ($shops->count() > 0)
                            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4">
                                @foreach ($shops as $shop)
                                    <div class="col">
                                        <div class="card-2">
                                            <div class="content-img">
                                                <img src="{{ Storage::url($shop->image) }}" class="card-img-top"
                                                    alt="gambar">
                                            </div>
                                            <div class="card-body">
                                                <h5>{{ $shop->name }}</h5>
                                            </div>
                                            <div class="card-btn d-flex justify-content-center">
                                                <button onclick="window.location='/shops/{{ $shop->slug }}'"
                                                    class="detail-button">Lihat Detail</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="pt-5">
                                <p>Belum ada data yang tersedia.</p>
                            </div>
                        @endif
                    </div>
                    <div class="pagination d-flex justify-content-center pt-4">
                        {{ $shops->links('partials.custom_pagination') }}
                    </div>
                </div>
            </div>{{-- end BG --}}
            </section>


            <!-- FOOTER-->
        </div>
        @include('partials.footer')
    </div>
@endsection
