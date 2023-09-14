@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://kit.fontawesome.com/53b8e5967a.js" crossorigin="anonymous"></script>

{{-- Get partials --}}
@include('partials.header')
<section class="peta-wisata pt-5">
    <div class="container">
        <div class="banner-peta col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Desa Wisata"/>
            <a href="../#">
                <button class="btn button-back">
                    <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </a>
            <h1 class="heading">Peta Wisata</h1>
        </div>
        {{-- <div class="hero-peta">
            <img src="../assets/pict/hero-deswisata.png" alt="">
                <a href="../#" class="btn">
                    <button class="btn"><img src="../assets/icons/back-arrow.svg" alt="">
                </a>
            </button>
        </div>
        <div class="hero-title">
            <h3>Peta Wisata</h3>
        </div> --}}
    </div>
</section>

@include('partials.footer')


@endsection
