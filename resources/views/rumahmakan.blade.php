@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="rmwrapper">
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
            <div class="kuliner" mt-3>
            <div class="tab-content pt-4 pb-5">
                <div class="container">
                    <h4 class="title-heading">Temukan Rumah Makan Favoritmu di Sini!</h4>
                    <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                        <div class="searchinput" style="width: 70%">
                            <input name="search" class="form-control me-2" type="search" placeholder="Cari Rumah Makan" aria-label="Search">
                        </div>
                        <div class="sortinput justify-content-center">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Kategori Rumah Makan</option>
                                <option value="1">Restoran & Cafe</option>
                                <option value="2">Makanan Tradisional</option>
                            </select>
                        </div>
                        <div class="buttonsearch">
                            <button class="small-button" type="submit">Cari</button>
                        </div>
                    </div>
                </div>

        {{-- end search --}}

                <!-- CARD RESTAURANT-->
                <div class="container mt-3">
                    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4">
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
        {{-- </div> --}}


        <!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
