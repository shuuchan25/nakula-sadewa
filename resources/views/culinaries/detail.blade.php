@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
@include('sweetalert::alert')
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
                <div class="resto-img banner col-md-12 position-relative mb-3">
                    <img src="{{ Storage::url($culinary->image) }}" alt="Rumah Makan"/>
                    <a href="/culinaries" class="btn btn-back-balik">
                        <i class="fa fa-arrow-left"></i></a>
                    <div class="konten-kuliner">
                        {{-- <div class="button-back">
                            <button onclick="window.location='/culinaries'" class="btn-back">
                            <svg width="25" height="25" class="d-flex justify-content-center align-items-center" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </button>
                        </div> --}}
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
    <section class="deskripsi mt-5 mb-5">
        <div class="container resto">
            <div class="row">
                <div class="col-sm">
                    <h5 class="card-title">Lokasi</h5>
                    <p class="card-text">{{ $culinary->address }}</p>
                    <h5 class="card-title">Waktu Operasional</h5>
                    <p class="card-text">{{ $culinary->operational_hour }}</p>
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">{{ $culinary->contact }}</p>
                </div>
                <div class="col-sm">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">{!! $culinary->description !!}</p>
                </div>
            </div>
        </div>
    </section>

{{-- MAPS --}}
<div class="container mt-3">
    <section class="maps mt-3 pt-4 mb-5">
        <h5 class="card-title pb-3">Lokasi/Maps</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614014133!2d111.47004232617756!3d-8.163560432211733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1697517099184!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
    </section>

<!-- CARD LIST RESTAURANT-->
        <h5 class="card-title mt-5 mb-3" style="text-align: center; font-size: 20px; font-weight: 600;">Menu Rumah Makan</h5>
            <div class="restaurant container">
                @if($culinaryMenus->count() > 0)
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-3">
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
                                    <form action="/culinaries/{{ $culinary->slug }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="item_id" value="{{ $menu->id }}">
                                        <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                                        <input type="hidden" name="price" value="{{ $menu->price }}">
                                        <input type="hidden" name="slug" value="{{ $culinary->slug }}">
                                        <div class="group-btn-rm d-flex mx-auto">
                                            <input type="hidden" name="quantity" id="quantityInput{{ $menu->id }}">
                                            <div class="input-btn">
                                                <span class="minus" data-itemid="{{ $menu->id }}">-</span>
                                                <span class="num" id="quantityValue{{ $menu->id }}">1</span>
                                                <span class="plus" data-itemid="{{ $menu->id }}">+</span>
                                            </div>
                                            <button type="submit" class="button-tambah">Tambahkan</button>
                                        </div>
                                    </form>
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

                <div class="btn-lihat mt-3 pb-4 d-flex justify-content-center">
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
<script>
    const plusButtons = document.querySelectorAll(".plus");
    const minusButtons = document.querySelectorAll(".minus");

    plusButtons.forEach(plusButton => {
        plusButton.addEventListener("click", function() {
            const itemId = this.getAttribute("data-itemid");
            updateQuantity(itemId, 1);
        });
    });

    minusButtons.forEach(minusButton => {
        minusButton.addEventListener("click", function() {
            const itemId = this.getAttribute("data-itemid");
            updateQuantity(itemId, -1);
        });
    });

    function updateQuantity(itemId, increment) {
        const quantityValue = document.getElementById(`quantityValue${itemId}`);
        const quantityInput = document.getElementById(`quantityInput${itemId}`);

        let a = parseInt(quantityValue.innerText, 10) + increment;

        if (a > 0 && a < 10) {
            quantityValue.innerText = a;
            quantityInput.value = a;
        }
    }
</script>
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
            slidesPerView: 4,
            spaceBetween: 13,
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
                300: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 13,
                },
            },
        });
        </script>
    @endsection

    @section('script-body')
    <script>
        // Ambil semua elemen kartu produk
        // const cardkuliner = document.querySelectorAll(".card-3");

        // // Loop melalui setiap kartu produk dan tambahkan fungsionalitas
        // cardkuliner.forEach((document) => {
        //     const plus = document.querySelector(".plus");
        //     const minus = document.querySelector(".minus");
        //     const num = document.querySelector(".num");

        //     let a = 1; // Jumlah awal produk

        //     plus.addEventListener("click", () => {
        //         a++;
        //         num.textContent = a;
        //     });

        //     minus.addEventListener("click", () => {
        //         if (a > 1) {
        //             a--;
        //             num.textContent = a;
        //         }
        //     });
        // });
    </script>
    @endsection


