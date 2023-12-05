@extends('partials.master')
@section('content')


    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')

        <!-- Slick JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
            integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
            integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <div class="bd-content homepage">
            {{-- HERO SECTION --}}
            <section class="hero-wrapper position-relative">
                <div id="slider-autoplay" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="z-index: 99">
                        @for ($i = 0; $i < count($galleries); $i++)
                            <button type="button" data-bs-target="#carouselIndicator"
                                data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"
                                aria-current="{{ $i === 0 ? 'true' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
                        @endfor
                        {{-- <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                    </div>
                    <div class="carousel-inner hero">
                        @if ($galleries->count() > 0)
                            @foreach ($galleries as $key => $gallery)
                                <div class="carousel-item {{ $key === 0 ? 'active' : 'hero' }}">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" class="d-block w-100"
                                        alt="hero-{{ $key + 1 }}">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/pict/hero-home.jpg') }}" class="d-block w-100"
                                    alt="hero-1">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="carousel-caption">
                    <div class="my-auto align-items-center justify-content-center">
                        @php
                            $words = explode(' ', $webprofile->slogan);
                        @endphp

                        @if (count($words) > 0)
                            <h5>{{ $words[0] }}</h5> <!-- Display the first word -->
                        @endif

                        @if (count($words) > 1)
                            @php
                                $remainingWords = array_slice($words, 1);
                                $remainingSlogan = implode(' ', $remainingWords);
                            @endphp
                            <h5>{{ $remainingSlogan }}</h5> <!-- Display the remaining words -->
                        @endif
                        <br>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div id="katalog"></div>
            </section>
            {{-- END HERO SECTION --}}


            {{-- KATALOG MENU --}}
            <section class="katalog">
                <div class="container">
                    <div class="row menu w-100 mx-auto">
                        <div data-aos="fade-up" data-aos-duration="1000" class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/attractions'">
                                    <a href="/attractions">
                                        <svg width="55px" height="55px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2093 12.8396C19.2093 13.618 18.5846 14.2489 17.814 14.2489C17.0433 14.2489 16.4186 13.618 16.4186 12.8396C16.4186 12.0613 17.0433 11.4304 17.814 11.4304C18.5846 11.4304 19.2093 12.0613 19.2093 12.8396Z"
                                                fill="#fcb600" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.4475 3.07312C17.3881 2.74149 16.4186 3.58696 16.4186 4.62005V8.24569C15.1217 8.49768 13.614 8.64346 12 8.64346C10.386 8.64346 8.87826 8.49768 7.5814 8.24569V4.62005C7.5814 3.58696 6.61193 2.74149 5.55252 3.07312C4.57111 3.38033 3.7219 3.77027 3.10283 4.24246C2.49454 4.70643 2 5.33865 2 6.13148V18.0787C2 18.294 2.03738 18.4996 2.10405 18.6934C2.16388 18.8674 2.24729 19.0319 2.34845 19.1856C2.67187 19.677 3.18915 20.0798 3.7886 20.409C4.3967 20.7431 5.13903 21.0285 5.97267 21.2614C7.64058 21.7273 9.73668 22 12 22C13.9009 22 15.6816 21.8076 17.1889 21.4712C18.6818 21.138 19.9619 20.6512 20.8188 20.0262C21.0272 19.8742 21.2239 19.7036 21.3949 19.5146C21.7545 19.1171 22 18.638 22 18.0787V6.13148C22 5.33865 21.5055 4.70643 20.8972 4.24246C20.2781 3.77027 19.4289 3.38033 18.4475 3.07312ZM20.6047 8.22659C20.5778 8.24416 20.5507 8.26148 20.5235 8.27855C19.7014 8.7951 18.5721 9.20856 17.27 9.50563C15.7455 9.85343 13.9349 10.0527 12 10.0527C10.0651 10.0527 8.25452 9.85343 6.73 9.50563C5.4279 9.20856 4.29864 8.7951 3.47645 8.27855C3.44929 8.26148 3.42224 8.24416 3.39535 8.22659V17.3892L6.22606 14.7138L7.50233 13.6349C8.42995 12.8507 9.81971 12.8937 10.6944 13.7388L13.7838 16.7236C14.0393 16.9704 14.4553 17.0087 14.759 16.8025L14.9737 16.6567C16.0566 15.9214 17.5173 16.0043 18.5058 16.8637L20.4069 18.5168C20.5626 18.3291 20.6047 18.1795 20.6047 18.0787V8.22659Z"
                                                fill="#fcb600" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Atraksi</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-offset="100"
                            class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/hotels'">
                                    <a href="hotels">
                                        <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 56 56"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M 5.2892 21.9935 L 10.9031 21.9935 L 10.9031 18.8154 C 10.9031 16.7507 12.0630 15.6372 14.1508 15.6372 L 22.3861 15.6372 C 24.4739 15.6372 25.6338 16.7507 25.6338 18.8154 L 25.6338 21.9935 L 30.6446 21.9935 L 30.6446 18.8154 C 30.6446 16.7507 31.8045 15.6372 34.0084 15.6372 L 41.7333 15.6372 C 43.9373 15.6372 45.0970 16.7507 45.0970 18.8154 L 45.0970 21.9935 L 50.7108 21.9935 L 50.7108 15.6604 C 50.7108 11.5544 48.5305 9.4665 44.5402 9.4665 L 11.4598 9.4665 C 7.4930 9.4665 5.2892 11.5544 5.2892 15.6604 Z M 0 44.8668 C 0 46.0035 .7423 46.7226 1.9022 46.7226 L 3.2013 46.7226 C 4.3380 46.7226 5.0803 46.0035 5.0803 44.8668 L 5.0803 41.5726 C 5.3355 41.6422 6.0779 41.6886 6.6114 41.6886 L 49.4118 41.6886 C 49.9454 41.6886 50.6647 41.6422 50.9198 41.5726 L 50.9198 44.8668 C 50.9198 46.0035 51.6619 46.7226 52.7988 46.7226 L 54.1210 46.7226 C 55.2579 46.7226 56 46.0035 56 44.8668 L 56 31.6670 C 56 27.4682 53.6573 25.1716 49.4118 25.1716 L 6.5883 25.1716 C 2.3430 25.1716 0 27.4682 0 31.6670 Z" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Akomodasi</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="100"
                            class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/culinaries'">
                                    <a href="/culinaries">
                                        <svg fill="#fcb600" height="55px" width="55px" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M256.001,54.522c-26.043,0-47.691,19.333-51.578,44.304c15.723-3.156,31.979-4.663,48.619-4.663h5.917
                                                                                                                            c16.639,0,32.896,1.452,48.62,4.608C303.692,73.801,282.043,54.522,256.001,54.522z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M258.959,119.931h-5.917c-121.767,0-221.215,98.636-221.215,220.404v41.132h0.001h448.346v-41.132
                                                                                                                            C480.174,218.566,380.727,119.931,258.959,119.931z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M505.558,423.587c-1.951-1.75-4.252-3.365-6.795-4.21c-1.916,0.636-3.959,0.74-6.089,0.74H19.325
                                                                                                                            c-2.13,0-4.173-0.103-6.089-0.74c-2.543,0.845-4.844,2.333-6.795,4.083C2.497,426.998,0,432.277,0,437.994
                                                                                                                            c0,10.673,8.653,19.484,19.325,19.484h473.349c10.673,0,19.325-8.748,19.325-19.421C512,432.342,509.503,427.125,505.558,423.587z
                                                                                                                            " />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Kuliner</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-offset="100"
                            class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/travels'">
                                    <a href="/travels">
                                        <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5h2v14H4V5h2V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1zm3 0h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V5zM3 5v14H2a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h1zm5-1v1h4V4H8z" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Paket Wisata</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-offset="100"
                            class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/shops'">
                                    <a href="/shops">
                                        <svg fill="#fcb600" height="55" width="55" version="1.1" id="Icons"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32 32" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M3,13v1c0,2.8,2.2,5,5,5c1.6,0,3.1-0.8,4-2c0.9,1.2,2.4,2,4,2s3.1-0.8,4-2c0.9,1.2,2.4,2,4,2c2.8,0,5-2.2,5-5v-1H3z" />
                                                <path
                                                    d="M25.9,4.6C25.8,4.2,25.4,4,25,4H7C6.6,4,6.2,4.2,6.1,4.6L3.3,11h25.3L25.9,4.6z" />
                                                <path
                                                    d="M4,19.7V28c0,0.6,0.4,1,1,1h7v-9.3C10.8,20.6,9.5,21,8,21C6.5,21,5.1,20.5,4,19.7z M9.3,22.3c0.1-0.1,0.2-0.2,0.3-0.2
                                                                                                                            c0.4-0.2,0.8-0.1,1.1,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.3,0.1,0.4s0,0.3-0.1,0.4s-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2
                                                                                                                            S10.1,24,10,24c-0.3,0-0.5-0.1-0.7-0.3c-0.1-0.1-0.2-0.2-0.2-0.3C9,23.3,9,23.1,9,23C9,22.7,9.1,22.5,9.3,22.3z" />
                                                <path
                                                    d="M20,19.7c-1.2,0.8-2.5,1.3-4,1.3c-0.7,0-1.4-0.1-2-0.3V29h13c0.6,0,1-0.4,1-1v-8.3c-1.1,0.8-2.5,1.3-4,1.3
                                                                                                                            C22.5,21,21.2,20.6,20,19.7z" />
                                            </g>
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Oleh-oleh</p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" data-aos-offset="100"
                            class="col menu-2">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/maps'">
                                    <a href="/maps">
                                        <svg version="1.1" id="Uploaded to svgrepo.com"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="55px" height="55px" viewBox="0 0 32 32" xml:space="preserve">
                                            <style type="text/css">
                                                .puchipuchi_een {
                                                    fill: #8F010A;
                                                }
                                            </style>
                                            <path class="puchipuchi_een"
                                                d="M9.285,2.029l-6.57,3.942C1.772,6.537,1,7.9,1,9v20c0,1.1,0.772,1.537,1.715,0.971l6.57-3.942
                                                                                                                    C10.228,25.463,11,24.1,11,23V3C11,1.9,10.228,1.463,9.285,2.029z M4,23c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1
                                                                                                                    S4.552,23,4,23z M6,20c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S6.552,20,6,20z M9,17c-0.552,0-1-0.448-1-1s0.448-1,1-1
                                                                                                                    s1,0.448,1,1S9.552,17,9,17z M18.4,5.8l-4.8-3.6C12.72,1.54,12,1.9,12,3v9c0.552,0,1,0.448,1,1s-0.448,1-1,1v9
                                                                                                                    c0,1.1,0.72,2.54,1.6,3.2l4.8,3.6c0.88,0.66,1.6,0.3,1.6-0.8V14c-0.552,0-1-0.448-1-1s0.448-1,1-1V9C20,7.9,19.28,6.46,18.4,5.8z
                                                                                                                    M16,13c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S16.552,13,16,13z M29.285,2.029l-6.57,3.942C21.772,6.537,21,7.9,21,9v20
                                                                                                                    c0,1.1,0.772,1.537,1.715,0.971l6.57-3.942C30.228,25.463,31,24.1,31,23V3C31,1.9,30.228,1.463,29.285,2.029z M23,15
                                                                                                                    c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S23.552,15,23,15z M29.707,19.293c0.391,0.391,0.391,1.023,0,1.414
                                                                                                                    C29.512,20.902,29.256,21,29,21s-0.512-0.098-0.707-0.293L27,19.414l-1.293,1.293C25.512,20.902,25.256,21,25,21
                                                                                                                    s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L25.586,18l-1.293-1.293c-0.391-0.391-0.391-1.023,0-1.414
                                                                                                                    s1.023-0.391,1.414,0L27,16.586l1.293-1.293c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L28.414,18L29.707,19.293z" />
                                        </svg>
                                    </a>
                                </button>
                            </div>
                            <p style="text-align: center">Panduan</p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END KATALOG MENU --}}

            {{-- KALKULATOR --}}
            <section data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000" class="kalkulator-home">
                <div class="container">
                    <div class="detail">
                        <div class="banner col-md-12">
                            <img src="../assets/pict/kalkulator.jpg" alt="Desa Wisata" />
                            <div class="content kalkulator-home">
                                <div class="teks-kalkulator">
                                    <h1>NAKULA SADEWA</h1>
                                    <div class="overlay">
                                        <button class="button-kalkulator-home"
                                            onclick="location.href='/kalkulator'">KALKULATOR WISATA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END KALKULATOR --}}

            {{-- ABOUT --}}
            @php
                use Illuminate\Support\Str;
            @endphp
            <section class="about  mt-5 mb-5 pb-5" id="about">
                <div class="container">
                    <div class="col-12">
                        <div class="content-about gap-lg-4 gap-0">
                            <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-4 about-img my-auto">
                                @if ($webprofile->image)
                                    <img src="{{ asset('storage/' . $webprofile->image) }}" alt="about image"
                                        class="img-fluid my-auto mx-auto">
                                @else
                                    <img src="../assets/pict/tentang.jpg" alt="about image"
                                        class="img-fluid my-auto mx-auto">
                                @endif
                            </div>
                            <div data-aos="fade-left" data-aos-duration="1000" class="body-teks px-2">
                                <div class="about-teks px-3 pt-2" style="text-align: justify">
                                    <h3>Tentang</h3>
                                    {!! \Illuminate\Support\Str::words($webprofile->shortdesc, 90) !!}
                                </div>
                                <div class="lihat-semua w-100"
                                    style="position: relative; bottom: 0; margin: 15px 0; text-align: right">
                                    <a href="/about">Lihat Semua <i class="fa-solid fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT --}}

            {{-- VIDEO PROFILE --}}
            <section class="video-wrapper mt-5 mb-5 pt-5 pb-5">
                <div class="container video-profile">
                    <div class="row mb-3 video-title">
                        <h3>Video Profile</h3>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" class="video col-lg ratio ratio-16x9">
                        <iframe id="videoFrame" src="{{ $webprofile->video }}?autoplay=1&controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            {{-- END VIDEO PROFILE --}}

            {{-- KALENDER EVENT --}}
            <section class="kalendar mb-5">
                <div class="container kalendar">
                    <div class="kalender-title d-flex" style="justify-content: space-between">
                        <h3 style="margin-bottom: 0">Kalender Event</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/events'"><a
                                href="/events">Lihat Semua</a>
                        </button>

                        <div class="see-all"
                            style="position: relative; bottom: 0; text-align: right">
                            <a style="font-size: 10px" href="/about">Lihat Semua <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    @if ($events->count() > 0)
                        <div class="container swiper pt-5">
                            <div data-aos="fade-right" data-aos-duration="1000" class="slide-container-kalender">
                                <div class="card-wrapper swiper-wrapper">
                                    @foreach ($events as $event)
                                        <div class="card swiper-slide my-2">
                                            <div class="image-box">
                                                <img src="{{ asset('storage/' . $event->image) }}">
                                            </div>
                                            <div class="card-kalender">
                                                <div class="card-kalender-title">
                                                    <h5>{{ $event->title }}</h5>
                                                </div>
                                                <div class="card-kalender-content">
                                                    <div class="lokasi-event" style="margin: 0 0 8px -2px">
                                                        <svg width="15" height="15" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M3.25 10.4167C3.25 5.62281 7.17493 1.75 12 1.75C16.8251 1.75 20.75 5.62281 20.75 10.4167C20.75 13.3982 19.0113 16.3409 17.1686 18.4829C16.236 19.5669 15.2463 20.482 14.3733 21.1328C13.9374 21.4577 13.5186 21.7258 13.1405 21.9162C12.786 22.0947 12.3812 22.25 12 22.25C11.6188 22.25 11.214 22.0947 10.8595 21.9162C10.4814 21.7258 10.0626 21.4577 9.62674 21.1328C8.75371 20.482 7.76395 19.5669 6.83144 18.4829C4.98872 16.3409 3.25 13.3982 3.25 10.4167ZM12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13Z"
                                                                fill="#32393a" />
                                                        </svg>
                                                        <p class="lokasi"
                                                            style="font-size: 16px; margin-bottom: 0; padding-top: 2px">
                                                            {{ $event->place }}</p>
                                                    </div>
                                                    <p class="date" style="font-size: 12px; margin-bottom: 5px">
                                                        {{ $event->date }}</p>
                                                </div>
                                            </div>
                                            <div class="card-button-kalender w-100 d-flex justify-content-center">
                                                <button type="detail" class="detail-button"
                                                    onclick="location.href='/events/{{ $event->slug }}'"><a
                                                    href="/events/{{ $event->slug }}">Lihat Detail</a></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div>
                        </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5">Belum ada event.</p>
                    @endif
                </div>
            </section>
            {{-- END KALENDER EVENT --}}

            {{-- BERITA TERKINI --}}
            <section class="berita mb-4 pt-5 pb-5">
                <div class="container berita">
                    <div class="berita-title d-flex" style="justify-content: space-between">
                        <h3 style="margin-bottom: 0">Berita Terkini</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/articles'"><a
                                href="/articles">Lihat Semua</a>
                        </button>
                        <div class="see-all"
                            style="position: relative; bottom: 0; text-align: right">
                            <a style="font-size: 10px" href="/about">Lihat Semua <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                    @if ($articles->count() > 0)
                        <div class="container swiper pt-3">
                            <div data-aos="fade-right" data-aos-duration="1000" class="slide-container-berita mx-0">
                                <div class="berita-wrapper swiper-wrapper m-2" style="margin-right: 0">
                                    @foreach ($articles as $article)
                                        <div class="card swiper-slide berita-card"
                                            onclick="location.href='/articles/{{ $article->slug }}'"
                                            style="margin-left: -3px; padding: 0">
                                            <div class="card text-bg-dark">
                                                <img src="{{ asset('storage/' . $article->image) }}"
                                                    class="card-img w-100">
                                                <div class="card-img-overlay berita-content">
                                                    <a href="/articles/{{ $article->slug }}">
                                                        <h5 class="card-title" style="margin-top: 130px">
                                                            {{ $article->title }}</h5>
                                                    </a>
                                                    <p class="card-text" style="color: white">
                                                        <small
                                                            style="font-size: 12px">{{ $article->published_at }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5 text-white">Belum ada berita ataupun
                            artikel.</p>
                    @endif
                </div>
            </section>
            {{-- END BERITA TERKINI --}}

            {{-- KATA MEREKA --}}
            <section class="kata mt-5 mb-5 pt-3 pb-3">
                <div class="container kata">
                    <div class="row kata-title">
                        <h3>Kata Mereka</h3>
                    </div>
                    @if ($stories->count() > 0)
                        <div class="container swiper">
                            <div class="slide-container-katamereka">
                                <div class="card-wrapper swiper-wrapper">
                                    @foreach ($stories as $story)
                                        <div class="card swiper-slide mb-2 mt-2">
                                            <div class="card wrapper">
                                                <div class="row card-kata d-flex">
                                                    <div class="col-4 d-flex align-items-center mt-2 mb-2">
                                                        <img style="margin-left: 9px"
                                                            src="{{ asset('storage/' . $story->image) }}">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="teks">
                                                            <div class="teks-body">
                                                                <p class="card-text"><small
                                                                        class="text-body-secondary">{{ \Carbon\Carbon::parse($story->updated_at)->format('M, d Y') }}</small>
                                                                </p>
                                                                <h5 class="card-title">{{ $story->title }}</h5>
                                                                <div class="preview-cerita">
                                                                    <p class="card-text">
                                                                        {{ Str::limit(strip_tags($story->content, 100)) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <button type="detail" class="selengkapnya-button"
                                                                onclick="location.href='/stories/{{ $story->slug }}'"><a
                                                                    href="/stories/{{ $story->slug }}">Selengkapnya</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="d-flex justify-content-center align-item-center mt-5">Belum ada cerita wisatawan.</p>
                    @endif
                </div>
            </section>
            {{-- END KATA MEREKA --}}

            {{-- KOMENTAR --}}
            <section class="komentar mb-5 pb-3">
                @if ($reviews->count() > 0)
                    <div class="container swiper">
                        <div class="slide-container-komentar">
                            <div class="card-wrapper swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="card swiper-slide">
                                        <div class="card" style="border: none">
                                            <div class="card-komentar">
                                                <h5 class="card-title">{{ $review->name }}</h5>
                                                <p class="card-text">{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next swiper-navBtn"></div>
                            <div class="swiper-button-prev swiper-navBtn"></div>
                        </div>
                    </div>
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada ulasan.</p>
                @endif
            </section>

        </div>
        @include('partials.footer')
    </div>
@endsection

{{-- Javascript --}}
@section('script-body')
    <script>
        var swiper = new Swiper(".slide-container-kalender", {
            slidesPerView: 4,
            spaceBetween: 7,
            sliderPerGroup: 4,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 4,
                },
            },
        });

        var swiper = new Swiper(".slide-container-berita", {
            slidesPerView: 3,
            spaceBetween: 15,
            sliderPerGroup: 3,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            autoplay: true,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".slide-container-komentar", {
            slidesPerView: 3,
            spaceBetween: 20,
            sliderPerGroup: 3,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1000: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".slide-container-katamereka", {
            slidesPerView: 1,
            spaceBetween: 20,
            sliderPerGroup: 1,
            loop: true,
            centerSlide: "true",
            fade: "true",
            grabCursor: "true",
            autoplay: true,
            autoplaySpeed: 2000,

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1000: {
                    slidesPerView: 1,
                },
            },
        });


        $('.wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,

            autoplay: true,
            arrows: false,
            autoplaySpeed: 2000,

        });

        let timeout;
        const videoIframe = document.querySelector('#videoFrame');

        function handleUserActivity() {
            clearTimeout(timeout);

            // Memainkan video jika tidak sedang diputar
            if (videoIframe && videoIframe.contentWindow) {
                videoIframe.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
            }

            timeout = setTimeout(() => {
                // Menghentikan video setelah periode inaktivitas
                if (videoIframe && videoIframe.contentWindow) {
                    videoIframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                }
            }, 1000); // Atur periode inaktivitas di sini (dalam milidetik)
        }

        document.addEventListener('mousemove', handleUserActivity);
        document.addEventListener('click', handleUserActivity);
    </script>
@endsection
