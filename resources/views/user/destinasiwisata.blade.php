@extends('user.partials.master')

@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

<!--HERO-->
<section id="hero-section">
    <div class="container">
        {{-- <img src="../assets/pict/hero-wisata.jpg" alt=""> --}}
        <div class="row ">
            <h1>Destinasi Wisata</h1>
        </div>
    </div>
</section>

{{-- menubar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg menubar">
            <div class="row my-auto">
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-mountain.svg" alt="user">
                    <h4>Destinasi Wisata</h4>
                </div>
                <div class="col-lg ms-auto menu">
                    <img src="../assets/icons/icon-hotel.svg" alt="user">
                    <h4>Penginapan</h4>
                </div>
                <div class="col-lg ms-auto menu">
                    <img src="../assets/icons/icon-kuliner.svg" alt="user">
                    <h4>Kuliner</h4>
                </div>
                <div class="col-lg ms-auto menu">
                    <img src="../assets/icons/icon-travel.svg" alt="user">
                    <h4>Biro Perjalanan</h4>
                </div>
                <div class="col-lg ms-auto menu">
                    <img src="../assets/icons/icon-route.svg" alt="user">
                    <h4>Peta Wisata</h4>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MENU KATEGORI --}}
<div class="wisata">
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
    </ul>
</div>

{{-- SEARCH --}}
<section class="search" style="margin: 0 80px 0 80px;">
    <div class="mx-auto col-12 justyfy-content-center align-item-center">
            {{-- <span class="input-group-text"> --}}
            <div class="row">
                <div class="col-lg cari">
                    <h4 class="text my-auto">Cari Destinasi Wisata</h4>
                </div>
                    <div class="col-lg cari">
                        <button class="btn nada btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Destinasi Wisata</button>
                            <ul class="dropdown-menu" style="width: 300px; text-align:center;">
                            <li><a class="dropdown-item" href="#">Wisata Belanja</a></li>
                            <li><a class="dropdown-item" href="#">Wisata Sejarah</a></li>
                            </ul>
                    </div>
                    <div class="col-lg cari">
                        <div class="input-container">
                            <input type="text" class="form-control" placeholder="Cari Destinasi Wisata" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <img src="../assets/icons/Search-bl.svg" id="input_img">
                        </div>
                    </div>
            </div>
            {{-- </span> --}}
    </div>
</section>

{{-- cardlist --}}
<section class="cardwisata">
    <div class="container cardlist d-flex mt-4 p-4">
        <div class="card mb-3">
            <div class="row card2 g-0">
                <div class="col-md-5 my-auto">
                    <img src= "../assets/pict/hero-wisata.jpg" alt="poto wisata">
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Destinasi Wisata 1</h5>
                        <p class="card-text">Desa pandean merupakan daerah pegunungan yang berhawa sejuk, di lintasi sungai dengan kontur bebatuan yang eksotik.</p>
                        <button type="button" class="btn btn-primary">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row card2 g-0">
                <div class="col-md-5 my-auto">
                    <img src= "../assets/pict/hero-deswisata.png" alt="poto wisata">
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Destinasi Wisata 2</h5>
                        <p class="card-text">Desa pandean merupakan daerah pegunungan yang berhawa sejuk, di lintasi sungai dengan kontur bebatuan yang eksotik.</p>
                        <button type="button" class="btn btn-primary">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
@include('user.partials.footer')

@endsection --}}
