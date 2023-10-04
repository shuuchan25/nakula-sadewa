@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- hero --}}
<div class="container">
    <div class="detail row">
        <div class="banner col-md-12 relative pb-5">
            <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
            <a href="../#">
            <button class="btn-back">
                <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button></a>
            <div class="my-auto d-flex justify-content-center align-items-center">
                <h1 class="heading">Ekowisata Mangrove Cengkrong</h1>
            </div>
        </div>

{{-- galeri --}}
        <div class="col-md-12 galeri">
            <div class="swiper swipper-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="../assets/pict/hero-homepage.png" alt="galeri" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/pict/hero-wisata.jpg" alt="galeri" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/pict/destinasi.jpg" alt="galeri" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="../assets/pict/hero-deswisata.png" alt="galeri" class="w-100">
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev tombol"></div>
            <div class="swiper-button-next tombol"></div>
        </div>
    </div>
</div>


{{-- DESKRIPSI PAKET WISATA --}}
        <div class="container deskripsi-paket mt-5 mb-5">
            <div class="deskripsi-wrapper">
                <h4>Deskripsi</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.
                </p>
            </div>
        </div>

        <div class="container mb-5">
            <div class="harga mt-5">
                <h4>Harga</h4>
                <h6 class="price">Rp. 1.000.000/Paket</h6>
            </div>
            <div class="input-amount">
                <div class="col-2 my-auto">
                    <input type="number" class="input-area" value="1">
                </div>
                <div class="button-add-amount">
                    <button type="detail" class="add-button">Tambahkan</button>
                </div>
            </div>
        </div>
{{-- END DESKRIPSI PAKET WISATA --}}

@include('partials.footer')


<script>
        var swiper = new Swiper(".swipper-slider", {
            slidesPerView: 1,
            spaceBetween: 20,
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
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 25,
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
