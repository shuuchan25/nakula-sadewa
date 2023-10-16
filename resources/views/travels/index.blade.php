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
        <div class="container menubar-tab mb-5">
            {{-- MENUBAR --}}
            @include('partials.menubar')
            {{-- end MENUBAR --}}
        </div>

        <section class="card-paket pb-5" style="position: relative; height: 40vh; width: 100vw;">
            {{-- SEARCH BAR --}}
            <div class="container paket pt-5">
                <form action="/travels/index" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="search" class="form-control border-end-0"
                            placeholder="Cari Biro Perjalanan">
                        <button type="submit" class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"
                                fill="none">
                                <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>

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
                                        <button onclick="location.href='/travels/{{ $travelMenu->slug }}/detail'"
                                            class="detail-button">Lihat
                                            Detail</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="pt-5">
                            <p>Nothing travelMenu found.</p>
                        </div>
                    @endif
                </div> {{-- end cardlist --}}
            </div>
        </section>
    </div>

    @include('partials.footer')
</div>
@endsection
