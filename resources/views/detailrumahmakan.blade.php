@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

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
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <div class="content">
                <div class="button-back">
                    <button onclick="window.location='rumahmakan'" class="btn-back">
                        <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class=>
                    <h1 class="heading">Rumah Makan</h1>
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
                    <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
                    <h5 class="card-title">Waktu Operasional</h5>
                    <p class="card-text">01.00-23.59</p>
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">0812345678910</p>
                </div>
                <div class="col">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
                </div>
            </div>
        </div>
    </section>

<!-- CARD LIST RESTAURANT-->
        <div class="restaurant container mt-3">
            <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                <div class="col">
                    <div class="card-2">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Paket Wisata Pertama Kedua Ketiga Keempat Kelima</h5>
                        </div>
                        <div class="group-btn-rm d-flex justify-content-center">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-2">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Paket Wisata Pertama </h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="group-btn-rm d-flex mx-auto">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card-2">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body" style="position: relative">
                            <h5>Paket Wisata Pertama </h5>
                        </div>
                        <div class="group-btn-rm d-flex justify-content-center">
                            <div class="input-btn">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

                <div class="btn-lihat mt-3 pb-3 d-flex justify-content-center">
                    <button onclick="window.location='detailmenu'" class="lihat-button">Lihat Semua</button>
                </div>
                </section>
        <div style="clear: both;"></div>

 <!-- FOOTER-->

@include('partials.footer')
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
