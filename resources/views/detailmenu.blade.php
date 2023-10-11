@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- BREADCRUMB --}}
    <div class="container">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="../rumahmakan">Kuliner</a></li>
            <li class="breadcrumb-item"><a href="../rumahmakan">Rumah Makan</a></li>
            <li class="breadcrumb-item" aria-current="page">Detail</li>
            </ul>

<!-- HERO-->
        <div class="resto-img col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <div class="content">
                <div class="button-back">
                    <button onclick="window.location='detailrumahmakan'" class="btn-back">
                        <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                        <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                <div class="col">
                    <div class="card-2 h-100">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Menu</h5>
                        </div>
                        <div class="btn-group d-flex align-items-center justify-content-center">
                            <div class="input-btn" style="width: 100px">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2 h-100">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Menu</h5>
                        </div>
                        <div class="btn-group d-flex align-items-center justify-content-center">
                            <div class="input-btn" style="width: 100px">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2 h-100">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Menu</h5>
                        </div>
                        <div class="btn-group d-flex align-items-center justify-content-center">
                            <div class="input-btn" style="width: 100px">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2 h-100">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Menu</h5>
                        </div>
                        <div class="btn-group d-flex align-items-center justify-content-center">
                            <div class="input-btn" style="width: 100px">
                                <span class="minus">-</span>
                                <span class="num">1</span>
                                <span class="plus">+</span>
                            </div>
                            <button onclick="window.location='detailrumahmakan'" class="add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-2 h-100">
                        <div class="content-img">
                            <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="card-body">
                            <h5>Nama Menu</h5>
                        </div>
                        <div class="btn-group d-flex align-items-center justify-content-center">
                            <div class="input-btn" style="width: 100px">
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

        <div style="clear: both;"></div>



<!-- FOOTER -->

@include('partials.footer')
@endsection

@section('script-body')
<script>
        var swiper = new Swiper(".swipper-slider", {
            slidesPerView: 4,
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