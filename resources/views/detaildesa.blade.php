@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- BREADCRUMB --}}
<div class="container">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="../destinasiwisata">Destinasi</a></li>
        <li class="breadcrumb-item"><a href="#">Alam</a></li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        </ul>

{{-- hero --}}
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
                    <div class="col-lg-7 mb-3 mb-lg-0 d-flex justify-content-center">
                        <input type="number" class="form-control text-center" value="1">
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                <button><h5>Tambahkan</h5></button>
                </div>
            </div>
        </div>
    </section>


{{-- LIHAT PETA/MAPS --}}
    <section class="maps mt-5 pt-4">
        <h5 class="card-title">Lokasi/Maps</h5>
        <div class="button-maps d-flex justify-content-end mb-3">
            <button class="btn-maps"><a href="#">Lihat di Google Maps</a></button>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614731597!2d111.46970935265813!3d-8.163560318840469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1694351083338!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
    </section>
</div>


<button class="btn-hubungi">
    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.8965 15C3.8965 8.29367 9.24362 2.85714 15.8396 2.85714C22.4356 2.85714 27.7827 8.29367 27.7827 15C27.7827 21.7062 22.4356 27.1428 15.8396 27.1428C13.49 27.1428 11.303 26.4545 9.45772 25.2658C9.11431 25.0447 8.6935 24.9855 8.30396 25.1037L4.25854 26.3312L5.7817 22.7075C5.96173 22.2792 5.9251 21.7887 5.68354 21.393C4.55081 19.5371 3.8965 17.3484 3.8965 15ZM15.8396 0C7.69161 0 1.08636 6.71571 1.08636 15C1.08636 17.6258 1.75115 20.0975 2.91946 22.2467L0.496857 28.0099C0.282693 28.5195 0.377623 29.1089 0.740427 29.5224C1.10323 29.9359 1.66848 30.0988 2.1907 29.9402L8.51271 28.0221C10.6724 29.2807 13.1751 29.9999 15.8396 29.9999C23.9876 29.9999 30.5928 23.2842 30.5928 15C30.5928 6.71571 23.9876 0 15.8396 0ZM19.0607 18.1177L17.2142 19.4401C16.3493 18.9392 15.3932 18.2401 14.4341 17.265C13.4371 16.2513 12.6979 15.2047 12.1528 14.2447L13.3263 13.232C13.8299 12.7974 13.9677 12.0647 13.6575 11.4718L12.1623 8.61467C11.9609 8.22994 11.5979 7.9597 11.1764 7.88075C10.7548 7.80183 10.3209 7.92284 9.99796 8.2094L9.55464 8.60277C8.48857 9.54875 7.85807 11.1033 8.38063 12.6773C8.92239 14.309 10.0786 16.8771 12.4471 19.2852C14.9953 21.8761 17.5837 22.8964 19.0974 23.2927C20.317 23.6118 21.4711 23.184 22.2844 22.5102L23.1155 21.8217C23.471 21.5272 23.6628 21.0748 23.6293 20.6098C23.5957 20.1448 23.3411 19.7257 22.9471 19.487L20.589 18.0584C20.1127 17.77 19.5141 17.7931 19.0607 18.1177Z" fill="white"/>
        </svg>
        Hubungi Biro</a>
</button>

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
