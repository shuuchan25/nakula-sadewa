@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <section class="detailmenumakan">
            {{-- BREADCRUMB --}}
            <div class="container">
                <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Kuliner</a></li>
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Rumah Makan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail</li>
                    </ul>

                    <!-- HERO-->
                    <div class="resto-img col-md-12 relative mb-3">
                        <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan" />
                        <div class="content">
                            <div class="button-back">
                                <button onclick="window.location='detailrumahmakan'" class="btn-back">
                                    <svg width="20" height="25" viewBox="0 0 36 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763"
                                            stroke="black" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class=>
                                <h1 class="heading">Rumah Makan Sari Rasa</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEARCH MENU MAKAN -->
            <div class="container">
                <div class="row mt-4">
                    <div class="col-sm mt-2 search-wisata">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Cari Menu Makanan">
                            <button class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"
                                    fill="none">
                                    <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3 search d-flex justify-content-center mt-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Kategori Menu Makan</option>
                            <option value="1">Makanan</option>
                            <option value="2">Minuman</option>
                            <option value="3">Snack</option>
                        </select>
                    </div>
                </div>
            </div>

<!-- CARDLIST MENU MAKAN -->
<div class="restaurant container mt-3">
            <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                <div class="col">
                    <div class="card-3">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Nama Menu</h5>
                            <p>Deskripsi Menu</p>
                            <p>Harga Menu</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-3">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Nama Menu</h5>
                            <p>Deskripsi Menu</p>
                            <p>Harga Menu</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-3">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Nama Menu</h5>
                            <p>Deskripsi Menu</p>
                            <p>Harga Menu</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-3">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Nama Menu</h5>
                            <p>Deskripsi Menu</p>
                            <p>Harga Menu</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-3">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Nama Menu</h5>
                            <p>Deskripsi Menu</p>
                            <p>Harga Menu</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                        </div>
                    </div>
                </div>

            </div>
            </div>
                <div class="btn-lihat mt-3 pb-3 d-flex justify-content-center">
                    <button onclick="window.location='detailmenu'" class="lihat-button">Lihat Semua</button>
                </div>
        </div>



        <div style="clear: both;"></div>


<!-- FOOTER -->

        @include('partials.footer')
    </div>
@endsection

@section('script-body')
    <script>
        // Ambil semua elemen kartu produk
        const cardkuliner = document.querySelectorAll(".card-2");

        // Loop melalui setiap kartu produk dan tambahkan fungsionalitas
        cardkuliner.forEach((document) => {
            const plus = document.querySelector(".plus");
            const minus = document.querySelector(".minus");
            const num = document.querySelector(".num");

            let a = 1; // Jumlah awal produk

            plus.addEventListener("click", () => {
                a++;
                num.textContent = a;
            });

            minus.addEventListener("click", () => {
                if (a > 1) {
                    a--;
                    num.textContent = a;
                }
            });
        });
    </script>
@endsection
