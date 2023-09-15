@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

<!--HERO-->
<section class="hero">
    <div class="hero-biro">
        <img src="../assets/pict/hero-wisata.jpg" alt="">
        <h1 class="mb-3">Biro Perjalanan</h1>
    </div>

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

</section>





@include('partials.footer')

@endsection
