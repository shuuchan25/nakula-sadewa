@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="rmwrapper">

    <section class="pusat-oleh">
            <!--HERO-->
        <section class="hero-image">
            <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero rumah makan">
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
        <div class="listevent" mt-3>
            <div class="tab-content pt-4 pb-5">
                <div class="container">
                    <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                        <div class="searchinput" style="width: 70%">
                            <input name="search" class="form-control me-2" type="search" placeholder="Cari event" aria-label="Search">
                        </div>
                        <div class="sortinput justify-content-center">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Sort by month</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="buttonsearch">
                            <button class="small-button" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
            {{-- end search --}}

            <!-- CARD OLEH OLEH-->
                <div class="container mt-3">
                    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4">
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Tempat Jual Oleh-Oleh Terkenal di Trenggalek Raya</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailpusatoleh'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Tempat Jual</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailpusatoleh'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Tempat Jual</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailpusatoleh'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Tempat Jual</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailpusatoleh'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-2">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <h5>Nama Tempat Jual</h5>
                                </div>
                                <div class="card-btn d-flex justify-content-center">
                                    <button onclick="window.location='detailpusatoleh'" class="detail-button">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>{{--end BG --}}
    </section>


<!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
