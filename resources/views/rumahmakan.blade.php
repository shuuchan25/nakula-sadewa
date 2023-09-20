@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

        <!--HERO-->
        <div class="p-5 text-center background-image z-index-1">
            <div class="d-flex hero justify-content-center align-items-center">
            <h1 class="mb-3">Kuliner</h1>
            </div>
        </div>

        <!--MENU BAR-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 menubar">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9 menu d-flex justify-content-center">
                            <img src="../assets/icons/icon-mountain.svg" alt="user">
                            <h4>Destinasi Wisata</h4>
                        </div>
                        <div class="col-9 menu d-flex justify-content-center">
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
        <section class="search">
            <div class="row search">
                <div class="col teks-search w-100">
                    <h4>Temukan Makanan Favoritmu di Sini!</h4>
                </div>
                <div class="col category-search w-100 mb-3">
                    <select class="form-select">
                        <option selected>Resto & Cafe</option>
                        <option value="1">Makanan Tradisional</option>
                    </select>
                </div>
                <div class="col input-search w-100">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Makanan Favoritmu!" style="width: 400px; text-align: left">
                    <button style="border: none; background-color: none">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="8" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.5 16.958L21.5 21.958" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- CARD RESTAURANT-->
        <div class="container">
        <section class="cardkuliner mt-3">
                    <div class="row w-100% py-2">
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi qui doloribus nostrum saepe eos ipsum doloremque reprehenderit, obcaecati quis eum, eius aliquid nisi iure molestiae dolores odit fuga omnis inventore!</p>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio voluptas quos illum maxime explicabo cum voluptatum quibusdam recusandae impedit praesentium expedita nam odit animi mollitia est aperiam, perspiciatis id.</p>
                                <p class="card-price"> <h5>Rp. 16.000</h> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
            <div style="clear: both;"></div>

        <!-- FOOTER-->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
