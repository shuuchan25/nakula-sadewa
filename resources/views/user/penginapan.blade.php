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
            <h1>Penginapan</h1>
            <h2>Temukan penginapan bla bla bla</h2>
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

{{-- SEARCH --}}
<section class="search" style="margin: 0 80px 0 80px;">
    <div class="mx-auto col-12 justify-content-center align-item-center">
            {{-- <span class="input-group-text"> --}}
            <div class="row">
                <div class="col-lg cari">
                    <h4 class="text my-auto">Cari Penginapan</h4>
                </div>
                    <div class="col-lg cari">
                    <div class="input-container">
                        <input type="text" class="form-control" placeholder="Cari Penginapan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <img src="../assets/icons/Search-bl.svg" id="input_img">
                    </div>
                    </div>
                    <div class="col-lg cari">
                        <button class="btn nada btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Penginapan</button>
                            <ul class="dropdown-menu" style="width: 212px; text-align:center;">
                            <li><a class="dropdown-item" href="#">Hotel</a></li>
                            <li><a class="dropdown-item" href="#">Villa</a></li>
                            <li><a class="dropdown-item" href="#">Guesthouse</a></li>
                            <li><a class="dropdown-item" href="#">Homestay</a></li>
                            <li><a class="dropdown-item" href="#">Apartement</a></li>
                            </ul>
                        <button class="btn nada btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Lama Menginap</button>
                            <ul class="dropdown-menu" style="width: 170px; text-align:center;">
                            <li><a class="dropdown-item" href="#">1 Malam</a></li>
                            <li><a class="dropdown-item" href="#">2 Malam</a></li>
                            <li><a class="dropdown-item" href="#">3 Malam</a></li>
                            <li><a class="dropdown-item" href="#">4 Malam</a></li>
                            </ul>
                    </div>
            </div>
            {{-- </span> --}}
    </div>
</section>

{{-- CARDLIST PENGINAPAN --}}
<section class="cardpenginapan">
<div class="card-container"></div>
<div class="card-border"></div>
  <button class="button-lihat-detail" type="button"></button>
    <button class="lihat-detail" type="button">Lihat Detail</button>
<div class="hotel-mawar-asri">Hotel Mawar Asri</div>
<div class="rp-50-000-malam">Rp 500.000/malam</div>
<div class="desa-joho-trenggalek">Desa Joho, Trenggalek</div>
<div class="mulai-dari">mulai dari</div>
<img class="gambar-hotel" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fthemargohotel.com%2F&psig=AOvVaw2ciYS9Of5kJm-NWpWyp1XF&ust=1693986254797000&source=images&cd=vfe&opi=89978449&ved=0CA4QjRxqFwoTCJDY_OL8koEDFQAAAAAdAAAAABAD" />
<svg
  class="vector"
  width="15"
  height="13"
  viewBox="0 0 15 13"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    d="M7.79053 0C3.96402 0 0.850586 1.99215 0.850586 4.4399C0.850586 5.60559 1.64478 7.15578 3.21103 9.04753C4.4689 10.5664 5.92412 11.9398 6.68101 12.6232C6.8089 12.74 6.97613 12.835 7.16912 12.9004C7.36212 12.9659 7.57545 13 7.79183 13C8.00821 13 8.22154 12.9659 8.41454 12.9004C8.60753 12.835 8.77476 12.74 8.90265 12.6232C9.65824 11.9398 11.1148 10.5664 12.3726 9.04753C13.9363 7.15636 14.7305 5.60617 14.7305 4.4399C14.7305 1.99215 11.617 0 7.79053 0ZM7.79053 6.50024C7.24149 6.50024 6.70479 6.39132 6.24828 6.18725C5.79177 5.98317 5.43597 5.69312 5.22586 5.35375C5.01575 5.01439 4.96078 4.64097 5.06789 4.28071C5.175 3.92044 5.43939 3.58952 5.82762 3.32978C6.21584 3.07005 6.71048 2.89316 7.24896 2.8215C7.78745 2.74984 8.3456 2.78662 8.85285 2.92719C9.36009 3.06776 9.79364 3.3058 10.0987 3.61122C10.4037 3.91664 10.5665 4.27571 10.5665 4.64303C10.5657 5.13543 10.273 5.60751 9.75255 5.95568C9.23213 6.30386 8.52652 6.4997 7.79053 6.50024Z"
    fill="#112211"
  />
</svg>

<div class="hotel-kecil">
  <div class="hotel">Hotel</div>
</div>
</div>
</div>  
</section>





{{--
@include('user.partials.footer')

@endsection --}}
