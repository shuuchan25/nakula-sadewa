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
            <div class="container menubar-tab mb-5">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-3">
                        <ul class="nav  justify-content-center gap-5">
                            <li class="nav-item">
                                <a class="nav-link" href="atraksi">
                                    <svg fill="#AC0B05" width="30" height="30" viewBox="0 0 24 24"
                                        data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier"></g>
                                        <g id="SVGRepo_tracerCarrier"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title></title>
                                            <polygon points="10.96 17.68 7 9.76 1.38 21 22.55 21 16 6.58 10.96 17.68">
                                            </polygon>
                                            <circle cx="11" cy="6" r="3"></circle>
                                        </g>
                                    </svg>
                                    Atraksi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-auto" href="penginapan">
                                    <svg fill="#FCB600" width="30" height="30" viewBox="0 -4.91 122.88 122.88"
                                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="enable-background:new 0 0 122.88 113.05" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
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
                                    </svg>
                                    Akomodasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="rumahmakan">
                                    <svg fill="#AC0B05" height="30" width="31" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 32.762 32.762" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
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
                                                    <polygon points="32.762,6.885 32.087,5.258 2.572,18.448 "></polygon>
                                                </g>
                                                <g id="Capa_1_266_"> </g>
                                            </g>
                                        </g>
                                    </svg>
                                    Kuliner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="paketwisata">
                                    <svg fill="#FCB600" height="30" width="30" version="1.1" id="Layer_1"
                                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="-330 131 299 299" xml:space="preserve" stroke="#000000"
                                        stroke-width="0.0029900000000000005">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
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
                                    </svg>
                                    Paket Wisata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="petawisata">
                                    <svg fill="#AC0B05" height="30" width="30" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M397.496,0C334.264,0,283,51.528,282.992,115.096c0,46.328,27.296,86.16,66.552,104.408 c8.392,28.984,22.56,61.296,32.008,81.496v103.104h-220.88c0.608-1.976,1.232-3.952,1.792-5.904 C201.712,379.944,229,340.12,229,293.792c0-63.568-51.264-115.096-114.504-115.096C51.264,178.696,0,230.224,0,293.792 c0,46.328,27.296,86.16,66.552,104.408c12.408,42.904,37.528,93.208,41.192,100.504L114.496,512l6.72-13.288 c2.624-5.152,16.064-32.064,28.088-62.6H413.56V300.768c9.464-20.208,23.552-52.384,31.904-81.264 C484.712,201.248,512,161.424,512,115.096C512,51.528,460.736,0,397.496,0z M114.504,332.032 c-21.016,0-38.048-17.12-38.048-38.248s17.032-38.248,38.048-38.248c21.016,0,38.048,17.12,38.048,38.248 S135.52,332.032,114.504,332.032z M397.504,153.344c-21.016,0-38.048-17.128-38.048-38.248c0-21.128,17.032-38.248,38.048-38.248 s38.048,17.128,38.048,38.248S418.512,153.344,397.504,153.344z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    Peta Wisata</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>{{-- end MENUBAR --}}
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
