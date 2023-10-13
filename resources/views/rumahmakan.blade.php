@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
    <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero rumah makan">
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
        <div class="kuliner">
            <div class="tab-content pt-4 pb-5">
                <div class="container">
                <h4 class="title-heading">Temukan Makanan Favoritmu Disini!</h4>
                    <div class="row mt-3">
                        <div class="col-sm mt-2 search-wisata">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Cari Rumah Makan">
                                <button class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                    <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-3 search d-flex justify-content-center mt-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Kategori Rumah Makan</option>
                                    <option value="1">Restoran & Cafe</option>
                                    <option value="2">Makanan Tradisional</option>
                                </select>
                        </div>

                    </div>
                </div>

        {{-- end search --}}

                <!-- CARD RESTAURANT-->
                <div class="container mt-3">
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Rumah Makan</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailrumahmakan'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Rumah Makan</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailrumahmakan'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Rumah Makan</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailrumahmakan'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Rumah Makan</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailrumahmakan'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Rumah Makan</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailrumahmakan'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
