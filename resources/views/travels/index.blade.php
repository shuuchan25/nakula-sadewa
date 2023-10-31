@extends('partials.master')
@section('content')

    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            <!--HERO-->
            <section class="hero-image">
                <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
                <div class="hero-content">
                    <div class="my-auto d-flex justify-content-center">
                        <h1 class="mb-3">Paket Wisata</h1>
                    </div>
                </div>
            </section>
            {{-- MENUBAR --}}
            @include('partials.menubar')
            {{-- end MENUBAR --}}

            <section class="bg-section pb-5">
                {{-- SEARCH BAR --}}
                <div class="container search-all pt-5">
                    <form action="/travels" method="get">
                        @csrf
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
                                    placeholder="Cari Paket Wisata" aria-label="Search">
                            </div>
                            <div class="buttonsearch">
                                <button class="small-button" type="submit">Cari</button>
                            </div>
                    </form>
                </div>

                {{-- CARDLIST --}}
                <!-- Start of Card Deck Layout -->
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 g-3 mt-3">
                    @if ($travelMenus->count() > 0)
                        @foreach ($travelMenus as $travelMenu)
                            <div class="col">
                                <div class="card-2">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($travelMenu->image) }}" class="card-img-top"
                                            alt="gambar">
                                    </div>
                                    <div class="card-body">
                                        <h5>{{ $travelMenu->name }}</h5>
                                    </div>
                                    <div class="card-btn d-flex justify-content-center">
                                        <button onclick="location.href='/travels/{{ $travelMenu->slug }}'"
                                            class="detail-button">Lihat
                                            Detail</button>
                                    </div>
                        @endforeach
                    @else
                        <div class="">
                            <p>Data tidak ditemukan.</p>
                        </div>
                </div>
                @endif
        </div> {{-- end cardlist --}}
        <div class="pagination d-flex justify-content-center pt-4">
            {{ $travelMenus->links('partials.custom_pagination') }}
        </div>
    </div>
    </section>
    </div>

    @include('partials.footer')
    </div>
@endsection
