@extends('user.partials.master')

@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

<head>
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
  </head>

<!--HERO-->
<div class="p-5 text-center bg-image z-index-1">
    <div class="d-flex hero justify-content-center align-items-center">
        <h1 class="mb-3">Destinasi Wisata</h1>
    </div>
</div>

{{-- menubar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md menubar">
            <div class="menu d-flex justify-content-center align-items-center mx-auto gap-5">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-mountain.svg" alt="icon">
                    <a class="nav-link" href="#">
                    <h4 class="my-auto">Destinasi Wisata</h4></a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-hotel.svg" alt="icon">
                    <a class="nav-link" href="#">
                    <h4 class="my-auto">Penginapan</h4></a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-kuliner.svg" alt="icon">
                    <a class="nav-link" href="#">
                    <h4 class="my-auto">Kuliner</h4></a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-travel.svg" alt="icon">
                    <a class="nav-link" href="#">
                    <h4 class="my-auto">Biro Perjalanan</h4></a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-route.svg" alt="icon">
                    <a class="nav-link" href="#">
                    <h4 class="my-auto">Peta Wisata</h4></a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MENU KATEGORI --}}
<div class="wisata mt-3">
    <div class="tabs rounded p-2">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#destinasi"><h4>Destinasi Wisata</h4></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tujuan"><h4>Desa Wisata</h4></a>
            </li>
        </ul>
{{-- DESTINASI WISATA --}}
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="destinasi">

                {{-- SEARCH --}}
                <section class="search">
                    <div class="container">
                        <div class="row width-100%">
                            <div class="col-4 d-flex justify-content-end">
                                <h4 class="text my-auto">Cari Destinasi Wisata</h4>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Destinasi Wisata</button>
                                    <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                                    <li><a class="dropdown-item" href="#">Destinasi Wisata Belanja</a></li>
                                    <li><a class="dropdown-item" href="#">Destinasi Wisata Sejarah</a></li>
                                    </ul>
                            </div>
                            <div class="col-4 d-flex justify-content-flex-start">
                                    <input type="text" placeholder="Cari Destinasi Wisata" class="form-control" aria-label="Text input" aria-describedby="basic-addon2">
                                    {{-- <span class="input-group-text" id="basic-addon2"><i class="bi bi-search text-dark"></i></span> --}}

                            {{-- <form class="cari">
                                <input type="text" class="form" placeholder="Cari Destinasi Wisata">
                                <button type="submit" class="tombol"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form> --}}
                            </div>



                        </div>
                    </div>
                </section>


                                {{-- <div class="input-group">
                                    <input type="text" id="email" class="form-control" required>
                                    <label for="desa" class="input-group_label">Cari Tujuan Wisata</label>
                                </div> --}}
                {{-- cardlist --}}
                <section class="cardwisata">
                <div class="container">
                    <div class="row card-wrape w-100 py-2">
                        <div class="card cardlist mb-3" style="width: 535px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                    <h5 class="card-title">Destinasi Wisata</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="btn button btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 535px; height: 245px; border-radius:8;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Destinasi Wisata</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row card-wrape w-100 py-2">
                        <div class="card cardlist mb-3" style="width: 535px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Destinasi Wisata</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="width: 535px; height: 245px; border-radius:8;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Destinasi Wisata</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>

{{-- DESA WISATA --}}
                <div class="tab-pane container fade" id="tujuan">
                    {{-- SEARCH --}}
                <section class="search">
                    <div class="container">
                       <div class="row width-100%">
                            <div class="col-4 d-flex justify-content-end">
                                <h4 class="text my-auto">Cari Desa Wisata</h4>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Desa Wisata</button>
                                    <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                                      <li><a class="dropdown-item" href="#">Desa Wisata Maju</a></li>
                                      <li><a class="dropdown-item" href="#">Desa Wisata Merintis</a></li>
                                      <li><a class="dropdown-item" href="#">Desa Wisata Berkembang</a></li>
                                      <li><a class="dropdown-item" href="#">Desa Wisata Mandiri</a></li>
                                    </ul>
                            </div>
                            <div class="col-4 d-flex justify-content-flex-start">
                                    <input type="text" placeholder="Cari Desa Wisata" class="form-control" aria-label="Text input with dropdown button">
                            </div>
                       </div>
                    </section>

                    {{-- cardlist --}}
                    <section class="cardwisata">
                        <div class="row w-100% py-2">
                            <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Desa Wisata</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 555px; height: 245px; border-radius:8;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Desa Wisata</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row w-100% py-2">
                            <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Desa Wisata</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 555px; height: 245px; border-radius:8;">
                                <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                                </div>
                                <div class="col-md-8 d-flex align-items-center">
                                    <div class="card-body">
                                    <h5 class="card-title">Desa Wisata</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                </div>
    </div>





</div>
{{--
@include('user.partials.footer')

@endsection --}}
