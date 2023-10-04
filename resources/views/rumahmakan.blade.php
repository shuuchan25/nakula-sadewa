@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

        <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
        <div class="hero-content">
            <div class="my-auto">
                <h1 class="mb-3">Kuliner</h1>
            </div>
        </div>
    </section>

        <!--MENU BAR-->
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

        <!--SEARCH-->
                <!-- <section class="search">
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
                </section> -->
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

        <!-- CARD RESTAURANT-->

        <!-- <div class="container" margin=0px 80px 0px 80px">
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
            <div style="clear: both;"></div> -->

        <div class="container">
        <section class="card-katalog">
            <div class="row">
                <div class="col cardlist">
                    <div class="gambar-card w-100">
                        <img src="../assets/pict/destinasi.jpg" class="card-img-top" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="col cardlist">
                    <div class="gambar-card ">
                        <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Nama Rumah Makan</h5>
                        <p class="card-text">Desa Pandean - RM Sari Rasa</p>
                        <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                    </div>
                </div>
                <!-- <div class="card" style="width: 18rem;">
  <img src="../assets/pict/destinasi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="button btn-primary">Go somewhere</a>
  </div>
</div> -->
            </div>
        </section>
        </div>
        <div style="clear: both;"></div>

        <!-- FOOTER-->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
