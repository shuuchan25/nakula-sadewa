@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

<section class="buatan">
    {{-- BREADCRUMB --}}
    <div class="container atraksi-buatan">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration:none" href="../atraksi">Atraksi</a></li>
            <li class="breadcrumb-item"><a style="text-decoration:none" href="../atraksi">Buatan</a></li>
            <li class="breadcrumb-item" aria-current="page">Detail</li>
            </ul>

    {{-- hero --}}
            <div class="detail row">
                <div class="banner col-md-12">
                        <img src="../assets/pict/destinasi.jpg" alt="Desa Wisata"/>
                        <div class="content">
                            <div class="button-balik">
                                <button onclick="window.location='atraksi'" class="btn-back ">
                                    <svg width="25" height="25" class="d-flex justify-content-center align-items-center" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="my-auto d-flex justify-content-center">
                                <h1 class="heading">Ekowisata Mangrove Cengkrong</h1>
                            </div>
                        </div>
                </div>
    {{-- galeri --}}
                <div class="carousel-galeri mt-3">
                    <div class="col-md-12 galeri">
                        <div class="swiper swipper-slider">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../assets/pict/hero-wisata.jpg" alt="galeri" class="w-100">
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/pict/hero-wisata.jpg" alt="galeri" class="w-100">
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/pict/destinasi.jpg" alt="galeri" class="w-100">
                            </div>
                            <div class="swiper-slide">
                                <img src="../assets/pict/hero-homepage.png" alt="galeri" class="w-100">
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
    {{-- end container --}}


    {{-- Deskripsi desa wisata --}}
    <section class="bg  mt-4">
         <div class="container desc pt-5 pb-5" style="flex-wrap: wrap">
            <div class="row">
                <div class="col-lg desc-img ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/D0KeMuJyafU?si=q4lQppTU3tOH2Mgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg desc-teks">
                    <h5>Deskripsi</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- LOKASI --}}
    <div class="container">
        <section class="lokasi-nada">
            <div class="row mt-5 pt-4">
                <div class="col-md-8 lokasii">
                    <h5>Lokasi</h5>
                    <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
                    <h5>Waktu Operasional</h5>
                    <p class="card-text">01.00-23.59</p>
                    <h5>Kontak</h5>
                    <p class="card-text">0812345678910</p>
                </div>
                <div class="col-sm harga-detail pt-3 pb-4 mx-auto">
                    <div class="row">
                        <h6>Harga</h6>
                        <p>Rp 10.000</p>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="input-wrapper">
                            <span class="minus">-</span>
                            <span class="num">1</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="row mt-3 d-flex align-items-center justify-content-center">
                        <button class="btn-tambahkan"><h6>Tambahkan</h6></button>
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
</section>

@include('partials.footer')
</div>
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

   const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");
    let a = 1;
    plus.addEventListener("click", ()=>{
      a++;
      a = (a < 10) ? + a : a;
      num.innerText = a;
    });
    minus.addEventListener("click", ()=>{
      if(a > 1){
        a--;
        a = (a < 10) ? + a : a;
        num.innerText = a;
      }
    });

</script>

@endsection
