@extends('user.partials.master')
@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')
<head>
    <!--icons -->
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>

<!--HERO-->
<section class="detail-desa">
    <div class="container">
        <div class="row">
            <div class="banner">
                <img src="../assets/pict/hero-deswisata.png" alt="Desa Wisata"/>
                <h1 class="heading">Desa Wisata Pandean</h1>
            </div>
        </div>
    </div>
</section>

{{-- carousel galeri --}}
<section class="galeri">
    {{-- <div class="container position-relative overflow-hidden">
        <div class="row">
            <div class="col-12 d-flex justify-content-start">
                <div class="card-fitur me-4">
                    <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
                </div>
                <div class="card-fitur me-4">
                    <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
                </div>
                <div class="card-fitur me-4">
                    <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
                </div>
                <div class="card-fitur me-4">
                    <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
                </div>
            </div>
        </div>

    </div> --}}

    <div class="wrapper">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <div class="carousel">
            <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
            <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
            <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
            <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
            <img src="../assets/pict/hero-deswisata.png" alt="Galeri">
        </div>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </div>

</section>
