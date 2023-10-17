@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
{{-- BREADCRUMB --}}
    <div class="container">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Kuliner</a></li>
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Rumah Makan</a></li>
            <li class="breadcrumb-item" aria-current="page">Detail</li>
            </ul>

<!-- HERO-->
            <div class="rumahmakan row">
                <div class="resto-img col-md-12">
                    <img src="{{ Storage::url($culinary->image) }}" alt="Rumah Makan"/>
                    <div class="konten-kuliner">
                        <div class="button-back">
                            <button onclick="window.location='/culinaries'" class="btn-back">
                            <svg width="25" height="25" class="d-flex justify-content-center align-items-center" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </button>
                        </div>
                        <div class="my-auto d-flex justify-content-center">
                            <h1 class="heading">{{ $culinary->name }}</h1>
                        </div>
                    </div>
                </div>
<!-- GALERI -->      
                <div class="carousel-galeri mt-2">
                    <div class="col-md-12 galeri">
                        <div class="swiper swipper-slider">
                            <div class="swiper-wrapper">
                                @foreach ($culinary->images as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $image->other_image) }}" alt="galeri" class="w-100">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev tombol"></div>
                        <div class="swiper-button-next tombol"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- DESCRIPTION RESTAURANT-->
    <section class="deskripsi mt-5 mb-5 pt-3 pb-3">
        <div class="container resto">
            <div class="row">
                <div class="col ms-auto">
                    <h5 class="card-title">Lokasi</h5>
                    <p class="card-text">{{ $culinary->address }}</p>
                    <h5 class="card-title">Waktu Operasional</h5>
                    <p class="card-text">{{ $culinary->operational_hour }}</p>
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">{{ $culinary->contact }}</p>
                </div>
                <div class="col">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">{!! $culinary->description !!}</p>
                </div>
            </div>
        </div>
    </section>

<!-- CARD LIST RESTAURANT-->
        <div class="restaurant container mt-3">
            @if($culinaryMenus->count() > 0)
                <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                    @foreach($culinaryMenus as $menu)
                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ Storage::url($menu->image) }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>{{ $menu->name }}</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>{!! $menu->description !!}</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Rp{{ number_format($menu->price, 0, ',', '.') }}</p>
                                    </div>
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
                    @endforeach

                    {{-- <div class="col">
                        <div class="card-3">
                            <div class="content-img">
                                <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                            </div>
                            <div class="card-body">
                                <div class="judul-kuliner">
                                    <h5>Nama Menu</h5>
                                </div>
                                <div class="deskripsi-kuliner">
                                    <p>Deskripsi Menu</p>
                                </div>
                                <div class="harga-kuliner">
                                    <p>Harga Menu</p>
                                </div>
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
                            <div class="card-body">
                                <div class="judul-kuliner">
                                    <h5>Nama Menu</h5>
                                </div>
                                <div class="deskripsi-kuliner">
                                    <p>Deskripsi Menu</p>
                                </div>
                                <div class="harga-kuliner">
                                    <p>Harga Menu</p>
                                </div>
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
                            <div class="card-body">
                                <div class="judul-kuliner">
                                    <h5>Nama Menu</h5>
                                </div>
                                <div class="deskripsi-kuliner">
                                    <p>Deskripsi Menu</p>
                                </div>
                                <div class="harga-kuliner">
                                    <p>Harga Menu</p>
                                </div>
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
                            <div class="card-body">
                                <div class="judul-kuliner">
                                    <h5>Nama Menu</h5>
                                </div>
                                <div class="deskripsi-kuliner">
                                    <p>Deskripsi Menu</p>
                                </div>
                                <div class="harga-kuliner">
                                    <p>Harga Menu</p>
                                </div>
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
                    </div> --}}
                    
                </div>
                
                <div class="btn-lihat mt-3 pb-3 d-flex justify-content-center">
                    <button onclick="window.location='/culinaries/{{ $culinary->slug }}/menus'" class="lihat-button">Lihat Semua</button>
                </div>
            @else
                <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data Menu yang tersedia.</p>
            @endif

            </div>
                
        </div>

<!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection

@section('script-head')
        <style>
        .rumahmakan .galeri {
        /* margin-top: 25px; */
        padding: 0 40px 0 40px;
        }
        .galeri {
            position: relative;
        }
        .rumahmakan .swiper-slide {
            height: 250px;
            width: auto;
        }
        .rumahmakan .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .container .tombol {
            color: #000;
        }

        .container .tombol::before,
        .container .tombol::after {
            font-size: 18px;
        }
        @media screen and (max-width: 770px) {
            .rumahmakan .swiper-slide {
                height: 200px;
                width: auto;
            }
        }
        @media screen and (max-width: 500px) {
            .rumahmakan .swiper-slide {
                height: 150px;
                width: auto;
            }
        }
        </style>
    @endsection

    @section('script-body')
        <script>
            var swiper = new Swiper(".swipper-slider", {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                },
            });
            var swiper2 = new Swiper(".swipper-slider-2", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: ".swipper-slider-2 .swiper-pagination",
                    clickable: true,
                },
            });
        </script>
    @endsection

    @section('script-body')
    <script>

        // Ambil semua elemen kartu produk
        const cardkuliner = document.querySelectorAll(".card-3");

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

