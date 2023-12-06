@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
@include('sweetalert::alert')
<div class="bd-content">
    {{-- hero --}}
    <div class="container">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a style="text-decoration:none" href="/attractions">Atraksi</a></li>
                <li class="breadcrumb-item"><a style="text-decoration:none" href="/attractions/detail">Detail Atraksi</a></li>
                <li class="breadcrumb-item" aria-current="page">Paket ABC</li>
            </ul>

            {{-- hero --}}
            <div class="detail row">
                <div class="banner mb-3 col-md-12 position-relative">
                    <img src="{{ asset('assets/pict/atraksi.jpg') }}" alt="Desa Wisata"/>
                    <a href="/travels" class="btn btn-back-balik">
                        <i class="fa fa-arrow-left"></i></a>
                    <div class="content">
                        <div class="my-auto d-flex justify-content-center">
                            <h1 class="heading" style="margin-top: -1em">Paket Wisata ABC</h1>
                            <h6 class="mt-2 mb-0 p-3 pt-0">oleh Desa Wisata BCD</h6>
                        </div>
                    </div>
                </div>
                {{-- galeri --}}
                <div class="carousel-galeri mt-4">
                <div class="col-md-12 galeri">
                    <div class="swiper swipper-slider">
                        <div class="swiper-wrapper">
                            {{-- @foreach ($travelMenu->images as $image) --}}
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/pict/atraksi.jpg') }}" alt="galeri" class="w-100">
                                </div>
                            {{-- @endforeach --}}
                        </div>
                    </div>
                    <div class="swiper-button-prev tombol"></div>
                    <div class="swiper-button-next tombol"></div>
                </div>
                </div>
            </div>
        </div>
    </div>


    {{-- DESKRIPSI PAKET WISATA --}}
    <div class="bg mt-5" style="padding-top: 70px; padding-bottom: 70px;">
        <div class="container deskripsi-paket">
            <div class="deskripsi-wrapper">
                <h4>Deskripsi</h4>
                {{-- {!! $travelMenu->description !!} --}}
                <p>Paket wisata (package tour, inclusive tour) diartikan sebagai suatu perjalanan wisata dengan satu atau lebih tujuan kunjungan yang disusun dari berbagai fasilitas perjalanan tertentu dalam suatu acara perjalanan yang tetap, serta dijual dengan harga tunggal yang menyangkut seluruh komponen dari perjalanan wisata.</p>
            </div>
        </div>
    </div>
        <div class="container mb-5">
            <div class="harga mt-5">
                <h4 style="text-align: center;">Harga</h4>
                {{-- <h6 class="price">Rp{{ number_format($travelMenu->price, 0, ',', '.') }}/Paket</h6> --}}
                <h6 class="price" style="text-align: center">Rp 6000 /paket</h6>
            </div>
            <div class="row toggle-paket-wisata">
                <div class="col my-auto">
                    {{-- <form action="/travels/{{ $travelMenu->slug }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $travelMenu->id }}">
                        <input type="hidden" name="slug" value="{{ $travelMenu->slug }}">
                        <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                        <input type="hidden" name="price" value="{{ $travelMenu->price }}"> --}}
                        <div class="row input-amount align-items-center justify-content-center d-flex">
                            <div class="col-md-5 my-auto align-items-center justify-content-center d-flex">
                                <input type="hidden" name="quantity" id="quantityInput">
                                <div class="input-wrapper-2">
                                    <span class="minus">-</span>
                                    <span class="num" id="quantityValue">1</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="button-add-amount my-auto align-items-center justify-content-center d-flex">
                                <button type="submit" class="add-button">Tambahkan</button>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>

    {{-- END DESKRIPSI PAKET WISATA --}}


</div>
@include('partials.footer')
</div>
@endsection

@section('script-body')
    <script>
        var swiper = new Swiper(".swipper-slider", {
            slidesPerView: 1,
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
        var swiper2 = new Swiper(".swipper-slider-2", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swipper-slider-2 .swiper-pagination",
                clickable: true,
            },
        });
        // const plus = document.querySelector(".plus"),
        //     minus = document.querySelector(".minus"),
        //     num = document.querySelector(".num");
        // let a = 1;
        // plus.addEventListener("click", () => {
        //     a++;
        //     a = (a < 10) ? +a : a;
        //     num.innerText = a;
        // });
        // minus.addEventListener("click", () => {
        //     if (a > 1) {
        //         a--;
        //         a = (a < 10) ? +a : a;
        //         num.innerText = a;
        //     }
        // });
        const plus = document.querySelector(".plus"),
        minus = document.querySelector(".minus"),
        num = document.querySelector(".num");
        const quantityInput = document.getElementById('quantityInput');

        let a = 1;

        plus.addEventListener("click", ()=>{
        a++;
        a = (a < 10) ? + a : a;
        updateQuantity();
        });
        minus.addEventListener("click", ()=>{
        if(a > 1){
            a--;
            a = (a < 10) ? + a : a;
            updateQuantity();
        }
        });

        function updateQuantity() {
            num.innerText = a;
            quantityInput.value = a; // Update the hidden input field
        }
    </script>
@endsection
