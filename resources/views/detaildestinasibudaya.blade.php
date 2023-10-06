@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- BREADCRUMB --}}
<div class="container">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration:none" href="../destinasiwisata">Destinasi</a></li>
        <li class="breadcrumb-item"><a style="text-decoration:none" href="../destinasiwisata">Budaya</a></li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        </ul>

{{-- hero --}}
        <div class="detail row">
            <div class="banner col-md-12">
                    <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
                    <div class="content">
                        <div class="button-back">
                            <a href="../#">
                            <button class="btn-back">
                                <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button></a>
                        </div>
                        <div class="my-auto d-flex justify-content-center">
                            <h1 class="heading">Ekowisata Mangrove Cengkrong</h1>
                        </div>
                    </div>
            </div>
{{-- galeri --}}
            <div class="carousel-galeri mt-5">
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
    </div>
</div>


{{-- Deskripsi desa wisata --}}
    <section class="bg  mt-5 pt-4 pb-4">
        <div class="container desc">
            <div class="row">
                <div class="col-sm-5 desc-img d-flex justify-content-center align-items-center">
                    <iframe height="315" width="500" src="https://www.youtube.com/embed/D0KeMuJyafU?si=q4lQppTU3tOH2Mgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-sm desc-teks">
                    <h3>Deskripsi</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
                </div>
            </div>
        </div>
    </section>

{{-- LOKASI --}}
<div class="container">
    <section class="lokasi">
        <div class="row mt-5 pt-4">
            <div class="col-md-8">
                <h5 class="card-title">Lokasi</h5>
                <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
                <h5 class="card-title">Waktu Operasional</h5>
                <p class="card-text">01.00-23.59</p>
                <h5 class="card-title">Kontak</h5>
                <p class="card-text">0812345678910</p>
            </div>
            <div class="col-md ms-auto">
                <div class="row mt-3 d-flex align-items-center justify-content-center">
                    <h4>Harga</h4>
                    <p>Rp 10.000</p>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    {{-- <div class="col mb-lg-0"> --}}
                        <input type="number" class="form-control text-center" value="1">
                    {{-- </div> --}}
                </div>
                <div class="row mt-4 d-flex align-items-center justify-content-center">
                <button class="btn-tambahkan" style="width: 300px"><h5>Tambahkan</h5></button>
                </div>
            </div>
        </div>
    </section>


{{-- LIHAT PETA/MAPS --}}
    <section class="maps mt-5 pt-4 mb-5">
        <h5 class="card-title pb-4">Lokasi/Maps</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614731597!2d111.46970935265813!3d-8.163560318840469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1694351083338!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
    </section>
</div>

@include('partials.footer')

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
                300: {
                    slidesPerView: 2,
                    spaceBetween: 17,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
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

