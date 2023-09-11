@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')

        <!--HERO-->
        <section id="hero-section">
            <div class="container">
            <div class="row ">
            <h1 class="display-4 text-white">Kuliner</h1>
            </div>
            </div>
        </section>

        <!--MENU BAR-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 menubar">
                    <div class="row">
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-mountain.svg" alt="user">
                            <h4>Destinasi Wisata</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-hotel.svg" alt="user">
                            <h4>Penginapan</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-kuliner.svg" alt="user">
                            <h4>Kuliner</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-travel.svg" alt="user">
                            <h4>Biro Perjalanan</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-route.svg" alt="user">
                            <h4>Peta Wisata</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SEARCH-->
        <section class="search" style="margin: 0px 80px 0px 80px;">
            <div class="mx-auto col-12 justyfy-content-center align-item-center">
                    {{-- <span class="input-group-text"> --}}
                    <div class="row">
                        <div class="col-lg cari">
                            <h4 class="text my-auto">Temukan Makanan Favoritmu Disini!</h4>
                        </div>
                            <div class="col-lg cari">
                                <button class="btn nada btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Makanan</button>
                                    <ul class="dropdown-menu" style="width: 300px; text-align:center;">
                                    <li><a class="dropdown-item" href="#">Makanan</a></li>
                                    <li><a class="dropdown-item" href="#">Minuman</a></li>
                                    <li><a class="dropdown-item" href="#">Snack</a></li>
                                    <li><a class="dropdown-item" href="#">Paket</a></li>
                                    </ul>
                            </div>
                            <div class="col-lg cari">
                                <div class="input-container">
                                    <input type="text" class="form-control" placeholder="Cari Makanan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <!-- <img src="../assets/icons/Search-bl.svg" id="input_img"> -->
                                </div>
                            </div>
                    </div>
                    {{-- </span> --}}
            </div>
        </section>

        <!-- CARD RESTAURANT-->
        <section class="cardkuliner">
                    <div class="row w-100% py-2">
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar wisata">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, rem temporibus repudiandae velit soluta esse libero recusandae natus amet vitae nobis quasi, optio iste cum doloribus ipsa debitis est nesciunt!</p>
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
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae accusamus ea quo, dolore error sint assumenda atque quaerat eos! Corrupti excepturi eligendi dolorem ipsam exercitationem saepe modi fugit corporis deserunt.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div style="clear: both;"></div>

        <!-- FOOTER-->

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection