@extends('user.partials.master')

@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

<!--HERO-->
<section id="hero-section">
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <h1 class="text-white">Destinasi Wisata</h1>
            </div>
        </div>
    </div>
</section>

{{-- menubar --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 menubar">
            <div class="row">
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-deswisata.png" alt="user">
                    <h4>Destinasi Wisata</h4>
                </div>
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-hotel.png" alt="user">
                    <h4>Penginapan</h4>
                </div>
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-kuliner.png" alt="user">
                    <h4>Kuliner</h4>
                </div>
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-travel.png" alt="user">
                    <h4>Biro Perjalanan</h4>
                </div>
                <div class="col-lg menu">
                    <img src="../assets/icons/icon-petawisata.png" alt="user">
                    <h4>Peta Wisata</h4>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SEARCH --}}
{{-- <section id="search">
    <div class="form-outline searchbar" style="margin: 0px 80px 0px 80px;">
        <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
    </div>
</section> --}}
<div class="col-10 mx-uto">
    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Destinasi Wisata</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Wisata Belanja</a></li>
          <li><a class="dropdown-item" href="#">Wisata Sejarah</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>
</div>
{{-- @endsection
@include('user.partials.footer') --}}

