@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

<!-- HERO -->
    <div class="container">
        <div class="resto-image col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <h1 class="title-image">Rumah Makan Sari Rasa</h1>
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
            <h3 class="title-heading mt-5">Temukan Makanan Favoritmu di Sini!</h3>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row-search">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <select name="" id="" class="form-control">
                                    <option value="">- Kategori Rumah Makan -</option>
                                    <option value="">Restoran & Cafe</option>
                                    <option value="">Makanan Tradisional</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-end-0" placeholder="Cari Rumah Makan">
                                        <div class="input-group-text bg-transparent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    
<!-- CARDLIST MENU MAKAN -->

    <div class="container">
            <section class="card-katalog">
                    <div class="row mt-3">
                        <div class="col cardlist">
                            <div class="gambar-card">
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

                    <div class="row mt-3">
                        <div class="col cardlist">
                            <div class="gambar-card w-100">
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
            </section>
        <div style="clear: both;"></div>



<!-- FOOTER -->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection