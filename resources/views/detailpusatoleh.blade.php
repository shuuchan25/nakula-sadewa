@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="rmwrapper">

    <section class="detail-pusatoleh">
        <div class="container">
            {{-- BREADCRUMB --}}
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Kuliner</a></li>
                    <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Rumah Makan</a></li>
                    <li class="breadcrumb-item" aria-current="page">Detail</li>
                </ul>
                <!-- HERO-->
                <div class="resto-img col-md-12 relative mb-3">
                    <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
                    <div class="content">
                        <div class="button-back">
                            <button onclick="window.location='rumahmakan'" class="btn-back">
                                <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class=>
                            <h1 class="heading">Nama Produk</h1>
                        </div>
                    </div>
                </div>
            </div> {{--  end hero --}}
        </div> {{--  end container --}}

        <!-- DESCRIPTION RESTAURANT-->
        <section class="bg mt-5 mb-5 pt-3 pb-3">
            <div class="container resto">
                <div class="row">
                    <div class="col ms-auto">
                        <h5 class="card-title">Lokasi</h5>
                        <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
                        <h5 class="card-title">Waktu Operasional</h5>
                        <p class="card-text">01.00-23.59</p>
                        <h5 class="card-title">Kontak</h5>
                        <p class="card-text">0812345678910</p>
                    </div>
                    <div class="col">
                        <h5 class="card-title">Deskripsi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CARD OLEH OLEH-->
        <div class="container mt-3 mb-5">
            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4">
                <div class="col">
                    <div class="card-card">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Produk Oleh-Oleh Terkenal di Trenggalek Ternama</h5>
                            <p>Rp 10.000</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='detailjajan'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-card">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Produk</h5>
                            <p>Rp 10.000</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='detailjajan'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-card">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Produk</h5>
                            <p>Rp 10.000</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='detailjajan'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-card">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Produk</h5>
                            <p>Rp 10.000</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='detailjajan'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-card">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Produk</h5>
                            <p>Rp 10.000</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='detailjajan'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-lihat mt-4 d-flex justify-content-center">
                <button onclick="window.location='detailjajan'" class="lihat-button">Lihat Semua</button>
            </div>
        </div>
        </div>
    </div>{{--end TABS ROUNDED --}}

    </section>

<!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
