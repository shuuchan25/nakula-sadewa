@extends('partials.master')
@section('content')


    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')

        {{-- Swiper --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

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
                                <img src="{{ asset('assets/pict/hero-homepage.png') }}" class="d-block w-100"
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
            </section>
            {{-- END HERO SECTION --}}


            {{-- KATALOG MENU --}}
            <section class="katalog" id="katalog">
                <div class="container">
                    <div class="row menu w-100 mx-auto">
                        <div data-aos="fade-up" data-aos-duration="1000" class="col menu-1">
                            <div class="menu-button w-100 ">
                                <button class="katalog-button" onclick="location.href='/attractions'">
                                    <a href="/attractions">
                                        {{-- <svg fill="#fcb600" width="55" height="55" viewBox="0 0 24 24"
                                            data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier"></g>
                                            <g id="SVGRepo_tracerCarrier"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title></title>
                                                <polygon points="10.96 17.68 7 9.76 1.38 21 22.55 21 16 6.58 10.96 17.68">
                                                </polygon>
                                                <circle cx="11" cy="6" r="3"></circle>
                                            </g>
                                        </svg> --}}
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
                                        {{-- <svg fill="#8f010a" width="55" height="55" viewBox="0 -4.91 122.88 122.88"
                                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            style="enable-background:new 0 0 122.88 113.05" xml:space="preserve">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill-rule: evenodd;
                                                        clip-rule: evenodd;
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0"
                                                        d="M0,100.07h14.72V1.57c0-0.86,0.71-1.57,1.57-1.57h49.86c0.86,0,1.57,0.71,1.57,1.57V38.5h44.12 c0.86,0,1.57,0.71,1.57,1.57v59.99h9.47v12.99H0V100.07L0,100.07z M27.32,14.82h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36 c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V15.39C26.75,15.08,27.01,14.82,27.32,14.82L27.32,14.82z M44.6,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V76.87 C44.03,76.55,44.29,76.3,44.6,76.3L44.6,76.3z M27.32,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C26.75,76.55,27.01,76.3,27.32,76.3L27.32,76.3z M44.6,55.8h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V56.38 C44.03,56.06,44.29,55.8,44.6,55.8L44.6,55.8z M27.32,55.8h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V56.38C26.75,56.06,27.01,55.8,27.32,55.8L27.32,55.8z M44.6,35.31h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V35.88 C44.03,35.57,44.29,35.31,44.6,35.31L44.6,35.31z M27.32,35.31h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V35.88C26.75,35.57,27.01,35.31,27.32,35.31L27.32,35.31z M44.6,14.82h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V15.39 C44.03,15.08,44.29,14.82,44.6,14.82L44.6,14.82z M23.17,7.32h35.92c0.62,0,1.13,0.61,1.13,1.35v85.87c0,0.74-0.51,1.35-1.13,1.35 H23.17c-0.62,0-1.13-0.61-1.13-1.35V8.67C22.04,7.93,22.55,7.32,23.17,7.32L23.17,7.32z M72.61,53.43h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54 C72.04,53.69,72.3,53.43,72.61,53.43L72.61,53.43z M89.89,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C89.32,76.55,89.58,76.3,89.89,76.3L89.89,76.3z M72.61,76.3h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87 C72.04,76.55,72.3,76.3,72.61,76.3L72.61,76.3z M89.89,53.43h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54C89.32,53.69,89.58,53.43,89.89,53.43L89.89,53.43z M68.86,45.82h35.92 c0.62,0,1.13,0.61,1.13,1.35v47.37c0,0.74-0.51,1.35-1.13,1.35H68.86c-0.62,0-1.13-0.61-1.13-1.35V47.17 C67.73,46.43,68.24,45.82,68.86,45.82L68.86,45.82z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg> --}}
                                        <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><path d="M 5.2892 21.9935 L 10.9031 21.9935 L 10.9031 18.8154 C 10.9031 16.7507 12.0630 15.6372 14.1508 15.6372 L 22.3861 15.6372 C 24.4739 15.6372 25.6338 16.7507 25.6338 18.8154 L 25.6338 21.9935 L 30.6446 21.9935 L 30.6446 18.8154 C 30.6446 16.7507 31.8045 15.6372 34.0084 15.6372 L 41.7333 15.6372 C 43.9373 15.6372 45.0970 16.7507 45.0970 18.8154 L 45.0970 21.9935 L 50.7108 21.9935 L 50.7108 15.6604 C 50.7108 11.5544 48.5305 9.4665 44.5402 9.4665 L 11.4598 9.4665 C 7.4930 9.4665 5.2892 11.5544 5.2892 15.6604 Z M 0 44.8668 C 0 46.0035 .7423 46.7226 1.9022 46.7226 L 3.2013 46.7226 C 4.3380 46.7226 5.0803 46.0035 5.0803 44.8668 L 5.0803 41.5726 C 5.3355 41.6422 6.0779 41.6886 6.6114 41.6886 L 49.4118 41.6886 C 49.9454 41.6886 50.6647 41.6422 50.9198 41.5726 L 50.9198 44.8668 C 50.9198 46.0035 51.6619 46.7226 52.7988 46.7226 L 54.1210 46.7226 C 55.2579 46.7226 56 46.0035 56 44.8668 L 56 31.6670 C 56 27.4682 53.6573 25.1716 49.4118 25.1716 L 6.5883 25.1716 C 2.3430 25.1716 0 27.4682 0 31.6670 Z"/></svg>
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
                                        {{-- <svg fill="#fcb600" height="55" width="55" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 32.762 32.762" xml:space="preserve">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g id="b193_chinese_bowl">
                                                        <path
                                                            d="M6.305,15.604l-4.617,1.764c0.045,0.344,0.108,0.486,0.183,0.816l5.184-2.348C6.916,15.797,6.436,15.643,6.305,15.604z">
                                                        </path>
                                                        <path
                                                            d="M32.325,12.534c0-1.193-1.273-2.271-3.417-3.107l-0.527,0.199c2.228,0.791,3.594,1.811,3.594,2.908 c0,2.445-6.812,4.516-14.873,4.516c-2.418,0-4.721-0.189-6.762-0.512l-8.237,2.715c1.739,5.602,7.802,9.744,14.999,9.744 c8.547,0,15.501-5.846,15.501-13.035c0-0.844-0.097-2.373-0.286-3.271C32.32,12.635,32.325,12.584,32.325,12.534z">
                                                        </path>
                                                        <path
                                                            d="M3.941,14.707c-0.928-0.584-1.716-1.498-1.716-2.174c0-2.449,6.812-4.52,14.876-4.52c0.312,0,0.622,0.006,0.929,0.01 l0.749-0.334c-0.551-0.02-1.11-0.027-1.678-0.027c-8.54,0-15.229,2.139-15.229,4.871c0,0.068,0.005,0.105,0.016,0.125 c-0.153,0.708-0.246,2.274-0.277,3.139L3.941,14.707z">
                                                        </path>
                                                        <polygon points="29.514,3.766 0,16.951 30.188,5.393 "></polygon>
                                                        <polygon points="32.762,6.885 32.087,5.258 2.572,18.448 ">
                                                        </polygon>
                                                    </g>
                                                    <g id="Capa_1_266_"> </g>
                                                </g>
                                            </g>
                                        </svg> --}}
                                        <svg fill="#fcb600" height="55px" width="55px" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M256.001,54.522c-26.043,0-47.691,19.333-51.578,44.304c15.723-3.156,31.979-4.663,48.619-4.663h5.917
           c16.639,0,32.896,1.452,48.62,4.608C303.692,73.801,282.043,54.522,256.001,54.522z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M258.959,119.931h-5.917c-121.767,0-221.215,98.636-221.215,220.404v41.132h0.001h448.346v-41.132
           C480.174,218.566,380.727,119.931,258.959,119.931z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M505.558,423.587c-1.951-1.75-4.252-3.365-6.795-4.21c-1.916,0.636-3.959,0.74-6.089,0.74H19.325
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
                                        {{-- <svg fill="#8f010a" height="55" width="55" version="1.1" id="Layer_1"
                                            xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="-330 131 299 299" xml:space="preserve" stroke="#000000"
                                            stroke-width="0.0029900000000000005">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title>Page 1</title>
                                                <desc>Created with Sketch.</desc>
                                                <g>
                                                    <path
                                                        d="M-60.4,366.1h-120.7h-120.7c-2.9,0-5.2,0.2-5.2,10.5c0,10.3,2.4,10.3,5.2,10.3h15.8v18.3c0,2.9,2.4,5.2,5.2,5.2h31.3 c2.9,0,5.2-2.3,5.2-5.2v-18.3h63.1h63.2v18.3c0,2.9,2.3,5.2,5.2,5.2h31.3c2.9,0,5.3-2.3,5.3-5.2v-18.3h15.7c2.9,0,5.2,0.2,5.2-10.3 C-55.1,366.1-57.5,366.1-60.4,366.1z">
                                                    </path>
                                                    <path
                                                        d="M-301.9,357.2h241.2c2.9,0,5.3-2.4,5.3-5.2v-21c0-0.1,0-0.1,0-0.1c-0.2-44.5-2.4-61.7-31.7-68.3 c-3.2-77.6-20.5-77.6-94.1-77.6c-73.5,0-90.5,0-93.6,77.5c-30,6.5-32.1,23.7-32.2,68.4c0,0,0,0.1,0,0.1v21 C-307.2,354.9-304.8,357.2-301.9,357.2z M-181.4,300.2c45.6,0,55.4,0.1,54.8,10H-236C-236.4,300.2-226.9,300.2-181.4,300.2z M-233.9,320.9c-0.2-0.7-0.3-1.4-0.5-2h106c-0.2,0.6-0.3,1.2-0.5,1.8c-0.5,1.9-1,3.7-1.4,5.3h-102.3 C-233,324.4-233.4,322.7-233.9,320.9z M-144.6,341.5h-36.7h-36.7c-7.4,0-9.6,0-12-6.9h97.3C-135.2,341.2-137.3,341.5-144.6,341.5z M-97,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7,15.7-15.7,15.7c-8.7,0-15.7-7-15.7-15.7C-112.8,317.2-105.7,310.2-97,310.2z M-244.4,213.4c6.8-7.5,30.4-7.5,63-7.5c32.8,0,56.5,0,63.4,7.6c6,6.5,8.5,24.6,9.6,46.2c-17.7-1.3-41.3-1.3-72.7-1.3 c-31.4,0-55,0-72.7,1.3C-252.8,238.1-250.3,219.9-244.4,213.4z M-264.9,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7.1,15.7-15.7,15.7 c-8.7,0-15.7-7-15.7-15.7C-280.6,317.2-273.6,310.2-264.9,310.2z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg> --}}
                                        <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M14 5h2v14H4V5h2V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1zm3 0h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V5zM3 5v14H2a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h1zm5-1v1h4V4H8z"/></svg>
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
                                        {{-- <svg width="55px" height="55px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#fcb600"
                                            stroke-width="0.00024000000000000003">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5285 6C16.5098 5.9193 16.4904 5.83842 16.4701 5.75746C16.2061 4.70138 15.7904 3.55383 15.1125 2.65C14.4135 1.71802 13.3929 1 12 1C10.6071 1 9.58648 1.71802 8.88749 2.65C8.20962 3.55383 7.79387 4.70138 7.52985 5.75747C7.50961 5.83842 7.49016 5.9193 7.47145 6H5.8711C4.29171 6 2.98281 7.22455 2.87775 8.80044L2.14441 19.8004C2.02898 21.532 3.40238 23 5.13777 23H18.8622C20.5976 23 21.971 21.532 21.8556 19.8004L21.1222 8.80044C21.0172 7.22455 19.7083 6 18.1289 6H16.5285ZM8 11C8.57298 11 8.99806 10.5684 9.00001 9.99817C9.00016 9.97438 9.00044 9.9506 9.00084 9.92682C9.00172 9.87413 9.00351 9.79455 9.00718 9.69194C9.01451 9.48652 9.0293 9.18999 9.05905 8.83304C9.08015 8.57976 9.10858 8.29862 9.14674 8H14.8533C14.8914 8.29862 14.9198 8.57976 14.941 8.83305C14.9707 9.18999 14.9855 9.48652 14.9928 9.69194C14.9965 9.79455 14.9983 9.87413 14.9992 9.92682C14.9996 9.95134 14.9999 9.97587 15 10.0004C15 10.0004 15 11 16 11C17 11 17 9.99866 17 9.99866C16.9999 9.9636 16.9995 9.92854 16.9989 9.89349C16.9978 9.829 16.9957 9.7367 16.9915 9.62056C16.9833 9.38848 16.9668 9.06001 16.934 8.66695C16.917 8.46202 16.8953 8.23812 16.8679 8H18.1289C18.6554 8 19.0917 8.40818 19.1267 8.93348L19.86 19.9335C19.8985 20.5107 19.4407 21 18.8622 21H5.13777C4.55931 21 4.10151 20.5107 4.13998 19.9335L4.87332 8.93348C4.90834 8.40818 5.34464 8 5.8711 8H7.13208C7.10465 8.23812 7.08303 8.46202 7.06595 8.66696C7.0332 9.06001 7.01674 9.38848 7.00845 9.62056C7.0043 9.7367 7.00219 9.829 7.00112 9.89349C7.00054 9.92785 7.00011 9.96221 7 9.99658C6.99924 10.5672 7.42833 11 8 11ZM9.53352 6H14.4665C14.2353 5.15322 13.921 4.39466 13.5125 3.85C13.0865 3.28198 12.6071 3 12 3C11.3929 3 10.9135 3.28198 10.4875 3.85C10.079 4.39466 9.76472 5.15322 9.53352 6Z"
                                                    fill="#fcb600"></path>
                                            </g>
                                        </svg> --}}
                                        <svg fill="#fcb600" height="55" width="55" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 32 32" xml:space="preserve">
<g>
	<path d="M3,13v1c0,2.8,2.2,5,5,5c1.6,0,3.1-0.8,4-2c0.9,1.2,2.4,2,4,2s3.1-0.8,4-2c0.9,1.2,2.4,2,4,2c2.8,0,5-2.2,5-5v-1H3z"/>
	<path d="M25.9,4.6C25.8,4.2,25.4,4,25,4H7C6.6,4,6.2,4.2,6.1,4.6L3.3,11h25.3L25.9,4.6z"/>
	<path d="M4,19.7V28c0,0.6,0.4,1,1,1h7v-9.3C10.8,20.6,9.5,21,8,21C6.5,21,5.1,20.5,4,19.7z M9.3,22.3c0.1-0.1,0.2-0.2,0.3-0.2
		c0.4-0.2,0.8-0.1,1.1,0.2c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.3,0.1,0.4s0,0.3-0.1,0.4s-0.1,0.2-0.2,0.3c-0.1,0.1-0.2,0.2-0.3,0.2
		S10.1,24,10,24c-0.3,0-0.5-0.1-0.7-0.3c-0.1-0.1-0.2-0.2-0.2-0.3C9,23.3,9,23.1,9,23C9,22.7,9.1,22.5,9.3,22.3z"/>
	<path d="M20,19.7c-1.2,0.8-2.5,1.3-4,1.3c-0.7,0-1.4-0.1-2-0.3V29h13c0.6,0,1-0.4,1-1v-8.3c-1.1,0.8-2.5,1.3-4,1.3
		C22.5,21,21.2,20.6,20,19.7z"/>
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
                                        {{-- <svg width="61" height="61" viewBox="0 0 61 61" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_238_3279)">
                                                <path
                                                    d="M13.2774 19.5912C6.3696 19.5912 0.708008 25.2354 0.708008 32.1246C0.708008 34.7941 1.56033 37.2751 3.00341 39.3143L11.7439 54.4238C12.9679 56.0231 13.7819 55.7197 14.8 54.34L24.4401 37.934C24.6347 37.5809 24.7873 37.2062 24.9208 36.8232C25.5325 35.3322 25.847 33.7362 25.8467 32.1246C25.8467 25.2354 20.1869 19.5912 13.2774 19.5912ZM13.2774 25.4641C16.9979 25.4641 19.9571 28.4155 19.9571 32.1252C19.9571 35.835 16.9979 38.7852 13.2774 38.7852C9.55742 38.7852 6.59764 35.8344 6.59764 32.1252C6.59764 28.4155 9.55742 25.4641 13.2774 25.4641Z"
                                                    fill="#8F010A" />
                                                <path
                                                    d="M53.2298 0.437927C49.2004 0.437927 45.8977 3.7305 45.8977 7.74969C45.8977 9.3065 46.3945 10.7538 47.2366 11.9431L52.3356 20.7572C53.0497 21.6897 53.5243 21.5125 54.1181 20.7081L59.7413 11.1374C59.8551 10.9321 59.9442 10.7137 60.0215 10.4898C60.3784 9.62038 60.562 8.68956 60.5619 7.74969C60.5619 3.7299 57.2604 0.437927 53.2298 0.437927ZM53.2298 3.86397C55.4001 3.86397 57.1263 5.58537 57.1263 7.74969C57.1263 9.91342 55.4001 11.6342 53.2298 11.6342C51.0601 11.6342 49.3333 9.91342 49.3333 7.74969C49.3333 5.58537 51.0601 3.86397 53.2298 3.86397Z"
                                                    fill="#8F010A" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M53.5047 22.8305C52.1598 22.8604 50.8112 22.9173 49.4603 23.0173L49.6686 26.3284C50.9663 26.2344 52.2661 26.1739 53.5669 26.147L53.5047 22.8305ZM46.3372 23.3213C44.2602 23.5793 42.1653 23.9468 40.0944 24.5375L40.8743 27.7463C42.7561 27.21 44.7061 26.8635 46.6867 26.6175L46.3372 23.3213ZM36.9933 25.6484C36.3728 25.9223 35.7721 26.2389 35.1953 26.5959L35.1929 26.5989L35.1893 26.6001C34.3664 27.1184 33.4991 27.7762 32.791 28.7321C32.278 29.4246 31.8585 30.3003 31.7603 31.3358L34.8099 31.6739C34.8326 31.4309 34.9571 31.1101 35.181 30.8084H35.1822V30.8073C35.5431 30.3188 36.0842 29.8753 36.7276 29.4695L36.73 29.4683C37.1886 29.1853 37.6662 28.9341 38.1593 28.7165L36.9933 25.6484ZM35.4234 33.1511L33.4464 35.686C33.9151 36.1145 34.4065 36.4437 34.8811 36.719L34.8871 36.722L34.8931 36.7256C36.4684 37.6216 38.0929 38.1274 39.5988 38.6074L40.4643 35.4244C38.9589 34.9444 37.5398 34.4811 36.3236 33.7904C35.9752 33.5881 35.67 33.3768 35.4234 33.1511ZM43.4049 36.3198L42.5598 39.5082L42.9596 39.6327L43.4504 39.7895C45.0748 40.3181 46.631 40.8825 48.022 41.6636L49.4334 38.7188C47.7515 37.7737 46.0056 37.156 44.3231 36.6089L44.3183 36.6077L43.8143 36.4467L43.4049 36.3198ZM52.3034 40.9286L50.1349 43.2748C50.6472 43.8297 51.0309 44.4971 51.2177 45.1866L51.2188 45.1902L51.22 45.1956C51.4427 46.0006 51.4433 46.9475 51.2691 47.904L54.2762 48.5456C54.5216 47.1953 54.5611 45.7127 54.1577 44.2493C53.8063 42.9552 53.136 41.8312 52.3034 40.9286ZM50.2193 49.9031C49.8879 50.2531 49.5217 50.5683 49.1263 50.844H49.1252C48.0478 51.6017 46.798 52.1727 45.4705 52.6635L46.4605 55.8023C47.9125 55.2654 49.4035 54.607 50.7969 53.6266L50.8005 53.6236L50.8023 53.6224C51.3745 53.2217 51.9038 52.763 52.3818 52.2535L50.2193 49.9031ZM42.6537 53.5476C40.7306 54.0647 38.765 54.4586 36.7755 54.7925L37.2447 58.072C39.2923 57.7278 41.3483 57.3166 43.3917 56.7671L42.6537 53.5476ZM33.7822 55.245C31.7795 55.5186 29.766 55.7418 27.7465 55.9322L28.0111 59.2373C30.0617 59.0446 32.1158 58.8177 34.167 58.537L33.7822 55.245ZM24.7113 56.1925C22.6876 56.3529 20.6592 56.4834 18.6289 56.5936L18.7822 59.9071C20.8322 59.7963 22.884 59.6641 24.9352 59.5013L24.7113 56.1925ZM15.5782 56.7432C14.3613 56.8001 13.1415 56.8467 11.9187 56.8898L12.0193 60.2063C13.2497 60.164 14.4799 60.115 15.7099 60.0591L15.5782 56.7432Z"
                                                    fill="#8F010A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_238_3279">
                                                    <rect width="59.854" height="59.854" fill="white"
                                                        transform="translate(0.708008 0.437927)" />
                                                </clipPath>
                                            </defs>
                                        </svg> --}}
                                        <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 width="55px" height="55px" viewBox="0 0 32 32" xml:space="preserve">
<style type="text/css">
	.puchipuchi_een{fill:#8F010A;}
</style>
<path class="puchipuchi_een" d="M9.285,2.029l-6.57,3.942C1.772,6.537,1,7.9,1,9v20c0,1.1,0.772,1.537,1.715,0.971l6.57-3.942
	C10.228,25.463,11,24.1,11,23V3C11,1.9,10.228,1.463,9.285,2.029z M4,23c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1
	S4.552,23,4,23z M6,20c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S6.552,20,6,20z M9,17c-0.552,0-1-0.448-1-1s0.448-1,1-1
	s1,0.448,1,1S9.552,17,9,17z M18.4,5.8l-4.8-3.6C12.72,1.54,12,1.9,12,3v9c0.552,0,1,0.448,1,1s-0.448,1-1,1v9
	c0,1.1,0.72,2.54,1.6,3.2l4.8,3.6c0.88,0.66,1.6,0.3,1.6-0.8V14c-0.552,0-1-0.448-1-1s0.448-1,1-1V9C20,7.9,19.28,6.46,18.4,5.8z
	 M16,13c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S16.552,13,16,13z M29.285,2.029l-6.57,3.942C21.772,6.537,21,7.9,21,9v20
	c0,1.1,0.772,1.537,1.715,0.971l6.57-3.942C30.228,25.463,31,24.1,31,23V3C31,1.9,30.228,1.463,29.285,2.029z M23,15
	c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S23.552,15,23,15z M29.707,19.293c0.391,0.391,0.391,1.023,0,1.414
	C29.512,20.902,29.256,21,29,21s-0.512-0.098-0.707-0.293L27,19.414l-1.293,1.293C25.512,20.902,25.256,21,25,21
	s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414L25.586,18l-1.293-1.293c-0.391-0.391-0.391-1.023,0-1.414
	s1.023-0.391,1.414,0L27,16.586l1.293-1.293c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L28.414,18L29.707,19.293z"/>
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
                            <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata" />
                            <div class="content">
                                <div class="my-auto teks-kalkulator d-flex justify-content-center">
                                    <h1 class="heading">NAKULA SADEWA</h1>
                                </div>
                                <div class="overlay">
                                    <button class="button-kalkulator-home"
                                        onclick="location.href='/kalkulator'">KALKULATOR WISATA</button>
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
                        <div class="content-about">
                            <div data-aos="fade-right" data-aos-duration="1000" class="col-lg-4 about-img my-auto">
                                @if ($webprofile->image)
                                    <img src="{{ asset('storage/' . $webprofile->image) }}" alt="logo bem"
                                        class="img-fluid my-auto mx-auto">
                                @else
                                    <img src="../assets/pict/hero-homepage.png" alt="logo bem"
                                        class="img-fluid my-auto mx-auto">
                                @endif
                            </div>
                            <div data-aos="fade-left" data-aos-duration="1000" class="body-teks mx-3 px-2">
                                <div class="about-teks px-3 pt-2" style="text-align: justify">
                                    <h3>Tentang</h3>
                                    {!! \Illuminate\Support\Str::words($webprofile->shortdesc, 100) !!}
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
                    <div class="row mb-3 mt-2 video-title">
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
                        <h3 style="margin-bottom: 0; padding-top: 3px">Kalender Event</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/events'"><a
                                href="/events">Lihat Semua</a></button>
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
            <section class="berita mb-5 pt-5 pb-3">
                <div class="container berita">
                    <div class="berita-title d-flex" style="justify-content: space-between">
                        <h3 style="margin-bottom: 0; padding-top: 3px">Berita Terkini</h3>
                        <button type="detail" class="see-all-button" onclick="location.href='/articles'"><a
                                href="/articles">Lihat Semua</a></button>
                    </div>
                    @if ($articles->count() > 0)
                        <div class="container swiper mb-5 pt-3">
                            <div data-aos="fade-right" data-aos-duration="1000" class="slide-container-berita">
                                <div class="berita-wrapper swiper-wrapper m-2" style="margin-right: 0">
                                    @foreach ($articles as $article)
                                        <div class="card swiper-slide berita-card"
                                            onclick="location.href='/articles/{{ $article->slug }}'"
                                            style="margin-left: -4px">
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
            spaceBetween: 17,
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
