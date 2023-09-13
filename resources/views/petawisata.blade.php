@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://kit.fontawesome.com/53b8e5967a.js" crossorigin="anonymous"></script>

{{-- Get partials --}}
@include('user.partials.header')
<section class="peta-wisata pt-5">
    <div class="container">
        <div class="hero-peta">
            <img src="../assets/pict/hero-deswisata.png" alt="">
            {{-- <button class="btn"><img src="../assets/icons/back-arrow.svg" alt=""> --}}
                <a href="../#" class="btn">
                    <button class="btn"><img src="../assets/icons/back-arrow.svg" alt="">
                </a>
            </button>
        </div>
        <div class="hero-title">
            <h3>Peta Wisata</h3>
        </div>
        
    </div>


    {{-- <div class="container w-100 mb-5">
        <div class="row">
            <div class="banner-peta">

                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-travel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                </div>

            </div>
        </div>
    </div> --}}
</section>

{{-- @include('user.partials.footer') --}}


@endsection
