@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- BREADCRUMB --}}
<div class="container">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="../destinasiwisata">Kuliner</a></li>
        <li class="breadcrumb-item"><a href="../destinasiwisata">Rumah Makan</a></li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        </ul>

<!-- HERO-->
        <div class="resto-img col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <div class="content">
                <div class="button-back">
                    <button onclick="window.location='destinasiwisata'" class="btn-back">
                        <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class=>
                    <h1 class="heading ">Rumah Makan Sari Rasa</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SEARCH MENU MAKAN -->
    <!-- <div class="menu-resto mt-3">
        <h3 class="title-heading">Temukan Makanan Favoritmu di Sini!</h3>
            <section class="search">
                <div class="row search">
                    <div class="col teks-search w-100">
                        <h4>Temukan Makanan Favoritmu di Sini!</h4>
                    </div>
                    <div class="col category-search w-100 mb-3">
                        <select class="form-select">
                            <option selected>Makanan</option>
                            <option value="1">Minuman</option>
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
    </div> -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-sm mt-2 search-wisata">
                <div class="input-group">
                    <input type="text" class="form-control border-end-0" placeholder="Cari Destinasi Alam">
                    <button class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                        <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-sm-3 search d-flex justify-content-center mt-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Kategori Rumah Makan</option>
                        <option value="1">Restoran & Cafe</option>
                        <option value="2">Makanan Tradisional</option>
                    </select>
            </div>

        </div>
    </div>

<!-- CARDLIST MENU MAKAN -->

    <!-- <div class="container">
            <section class="card-katalog">
                    <div class="row mt-3">
                        <div class="col cardlist">
                            <div class="gambar-card00">
                                <img src="../assets/pict/destinasi.jpg" class="card-img-top" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col cardlist">
                            <div class="gambar-card">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col cardlist">
                            <div class="gambar-card">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col cardlist">
                            <div class="gambar-card ">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </section> -->

            <div class="container mt-3">
            <div class="container-card">
                <div class="card-wrapper d-flex mx-auto justify-content-center" style="flex-wrap: wrap">
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>



<!-- FOOTER -->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection