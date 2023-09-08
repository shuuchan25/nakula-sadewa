@extends('user.partials.master')

@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

<!--HERO-->
<div class="p-5 text-center bg-image">
    <div class="d-flex hero justify-content-center align-items-center">
        <h1 class="mb-3">Destinasi Wisata</h1>
    </div>
  </div>
</div>

{{-- menubar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md menubar">
            <div class="row my-auto d-flex justify-content-center">
                <div class="col-2 menu d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-mountain.svg" alt="user">
                    <a class="nav-link" href="#">
                        <h4 class="text my-auto">Destinasi Wisata</h4></a>
                </div>
                <div class="col-2 menu d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-hotel.svg" alt="user">
                    <a class="nav-link" href="#">
                        <h4 class="text my-auto">Penginapan</h4></a>
                </div>
                <div class="col-2 menu d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-kuliner.svg" alt="user">
                    <a class="nav-link" href="#">
                    <h4 class="text my-auto">Kuliner</h4></a>
                </div>
                <div class="col-2 menu d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-travel.svg" alt="user">
                    <a class="nav-link" href="#">
                    <h4 class="text my-auto">Biro Perjalanan</h4></a>
                </div>
                <div class="col-2 menu d-flex justify-content-center align-items-center">
                    <img src="../assets/icons/icon-route.svg" alt="user">
                    <a class="nav-link" href="#">
                    <h4 class="text my-auto">Peta Wisata</h4></a>
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
            <a class="nav-link" data-bs-toggle="tab" href="#tujuan"><h4>Tujuan Wisata</h4></a>
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
                            <h4 class="text my-auto">Cari Desa Wisata</h4>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Desa Wisata</button>
                                <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                                  <li><a class="dropdown-item" href="#">Desa Wisata Maju</a></li>
                                  <li><a class="dropdown-item" href="#">Desa Wisata Berkembang</a></li>
                                </ul>
                        </div>
                        <div class="col-4 d-flex justify-content-flex-start">
                                <input type="text" placeholder="Cari Tujuan Wisata" class="form-control" aria-label="Text input with dropdown button">
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
                                <h5 class="card-title">Desa  Wisata</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
{{-- TUJUAN WISATA --}}
                <div class="tab-pane container fade" id="tujuan">
                    {{-- SEARCH --}}
                <section class="search">
                    <div class="container">
                       <div class="row width-100%">
                            <div class="col-4 d-flex justify-content-end">
                                <h4 class="text my-auto">Cari Tujuan Wisata</h4>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Tujuan Wisata</button>
                                    <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                                      <li><a class="dropdown-item" href="#">Wisata Belanja</a></li>
                                      <li><a class="dropdown-item" href="#">Wisata Sejarah</a></li>
                                    </ul>
                            </div>
                            <div class="col-4 d-flex justify-content-flex-start">
                                    <input type="text" placeholder="Cari Tujuan Wisata" class="form-control" aria-label="Text input with dropdown button">
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
                                    <h5 class="card-title">Tujuan Wisata</h5>
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
                                    <h5 class="card-title">Tujuan Wisata</h5>
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
                                    <h5 class="card-title">Tujuan Wisata</h5>
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
                                    <h5 class="card-title">Tujuan Wisata</h5>
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
