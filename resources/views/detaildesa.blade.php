@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- hero --}}
<div class="container">
    <div class="detail row mb-5">
        <div class="banner col-md-12 relative mb-3">
                <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
                <a href="../#">
                <button class="btn button">
                    <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button></a>
                <h1 class="heading">Desa Wisata Pandean</h1>
        </div>
{{-- galeri --}}
        <div class="col-md-12 pb-5">
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
        </div>
        <div class="swiper-button-prev tombol"></div>
        <div class="swiper-button-next tombol"></div>
    </div>
</div>

{{-- Deskripsi desa wisata --}}
<section class="desc  mt-5 pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-6 desc-img">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D0KeMuJyafU?si=q4lQppTU3tOH2Mgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-6 desc-teks">
                <h3>Deskripsi Desa Wisata</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
            </div>
        </div>
    </div>
</section>

{{-- LOKASI --}}
<div class="container lokasi">
<div class="row mt-5 pt-4 pb-4">
    <div class="col-md-5">
        <h5 class="card-title">Lokasi</h5>
        <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
        <h5 class="card-title">Waktu Operasional</h5>
        <p class="card-text">01.00-23.59</p>
        <h5 class="card-title">Kontak</h5>
        <p class="card-text">0812345678910</p>
    </div>
    <div class="col-md-6 ms-auto">
        <h4>Harga</h4>
        <p>Rp 10.000</p>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-3 mb-lg-0 d-felx">
                <input type="number" class="form-control text-center" value="1">
            </div>
        </div>
    </div>
</div>
</div>


{{-- </section> --}}
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
