@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

<section class="detailtiketwisata">
{{-- hero --}}
<div class="container">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration:none" href="../paketwisata">Paket Wisata</a></li>
        {{-- <li class="breadcrumb-item"><a style="text-decoration:none" href="../destinasiwisata">Alam</a></li> --}}
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        </ul>

{{-- hero --}}
        <div class="detail row">
            <div class="banner col-md-12 mb-5">
                <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
                <div class="content">
                    <div class="button-back">
                        <a href="paketwisata">
                        <button class="btn-back">
                            <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button></a>
                    </div>
                    <div class="my-auto d-flex justify-content-center">
                        <h1 class="heading">Tiket Malang - Trenggalek</h1>
                        <h6>Biro Eazytravel</h6>
                    </div>
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
                <h6 class="price">Rp. 1.000.000/Tiket</h6>
            </div>
            <div class="row toggle-paket-wisata">
                <div class="col my-auto">
                    <div class="row input-amount ">
                        <div class="col-4 my-auto">
                            <input type="number" class="input-area" value="1">
                        </div>
                        <div class="col-8 button-add-amount my-auto">
                            <button type="detail" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
                <div class="col button-hubungi justify-content-end my-auto">
                    <button class="btn-hubungi">
                        <a href="profilebiro">Hubungi Biro</a>
                    </button>
                </div>
            </div>
        </div>
{{-- END DESKRIPSI PAKET WISATA --}}
</section>
@include('partials.footer')
</div>
@endsection

@section('script-body')
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
@endsection
