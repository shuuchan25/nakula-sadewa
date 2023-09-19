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
        <div class="kuliner mt-3">
        <section class="search">
                    <div class="container">
                        <div class="row width-100%">
                            <div class="col-4 d-flex justify-content-end">
                                <h4 class="text my-auto">Temukan Makanan Favoritmu Disini!</h4>
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Destinasi Wisata</button>
                                    <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                                    <li><a class="dropdown-item" href="#">Makanan</a></li>
                                    <li><a class="dropdown-item" href="#">Minuman</a></li>
                                    <li><a class="dropdown-item" href="#">Snack</a></li>
                                    <li><a class="dropdown-item" href="#">Paket</a></li>
                                    </ul>
                            </div>
                            <div class="col-4 d-flex justify-content-flex-start">
                                    <input type="text" placeholder="Cari Makanan" class="form-control" aria-label="Text input" aria-describedby="basic-addon2">
                                    {{-- <span class="input-group-text" id="basic-addon2"><i class="bi bi-search text-dark"></i></span> --}}

                            {{-- <form class="cari">
                                <input type="text" class="form" placeholder="Cari Makanan">
                                <button type="submit" class="tombol"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form> --}}
                            </div>
                        </div>
                    </div>
                </section>

        <!-- CARD RESTAURANT-->
        <div class="container" margin=0px 80px 0px 80px">
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
