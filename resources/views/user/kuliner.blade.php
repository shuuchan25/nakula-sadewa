@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')
        
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
            <div class="container">   
                <p><h3>Temukan Makanan Favoritmu Disini!</h3></p> 
            </div>
        <section class="search" style="margin: 0px 80px 0px 80px;">
            <div class="mx-auto col-12 justyfy-content-center align-item-center">
                    {{-- <span class="input-group-text"> --}}
                    <div class="row">
                        <!-- <div class="col-lg cari">
                            <h4 class="text my-auto">Cari Destinasi Wisata</h4>
                        </div> -->
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
                                    <img src="../assets/icons/Search-bl.svg" id="input_img">
                                </div>
                            </div>
                    </div>
                    {{-- </span> --}}
            </div>
        </section>

        <!-- CARD RESTAURANT-->
        <section class="cardkuliner" style="margin: 0px 80px 0px 80px;">
            <div class="container cardlist d-flex mt-4 p-4">
                <div class="card mb-3">
                    <div class="row card2 g-0">
                        <div class="col-md-5 my-auto">
                            <img src= "../assets/pict/hero-wisata.jpg" alt="poto wisata">
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="card-body">
                                <h5 class="card-title">Resto</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laborum recusandae ad, dicta ratione deserunt in tempora aspernatur omnis quia necessitatibus iusto est earum alias. Tenetur eligendi sit minima dolorem!</p>
                                <!-- <button type="button" class="btn btn-primary">Lihat Detail</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row card2 g-0">
                        <div class="col-md-5 my-auto">
                            <img src= "../assets/pict/hero-deswisata.png" alt="poto wisata">
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="card-body">
                                <h5 class="card-title">Resto</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, rem eveniet? Aut soluta doloremque quas. Illum cumque repellendus vitae accusantium possimus nobis doloremque earum tempora rem numquam ut, velit expedita.</p>
                                <!-- <button type="button" class="btn btn-primary">Lihat Detail</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
                <div style="clear: both;"></div>  

        <!-- FOOTER-->

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
  
