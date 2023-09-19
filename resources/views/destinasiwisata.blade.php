@extends('partials.master')

@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')


<!--HERO-->
<div class="bg-image p-5 text-center bg-image rounded-3" style="background-image: url(../assets/pict/destinasi.jpg);">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="mb-3">Destinasi Wisata</h1>
        </div>
</div>


<div class="container">
{{-- MENUBAR --}}
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


