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
            <h1 class="display-4 text-white">Destinasi Wisata</h1>
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

<div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
</div>

{{-- @endsection
@include('user.partials.footer') --}}

