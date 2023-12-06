@extends('partials.master')
{{-- @dd($attractionPackage) --}}
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
                <li class="breadcrumb-item"><a style="text-decoration:none" href="/attractions/{{ $attraction->slug }}">Detail Atraksi</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $attractionPackage->name }}</li>
            </ul>

            {{-- hero --}}
            <div class="detail row">
                <div class="banner mb-3 col-md-12 position-relative">
                    <img src="{{ asset('storage/' . $attractionPackage->image) }}" alt="Desa Wisata"/>
                    <a href="/attractions/{{ $attraction->slug }}" class="btn btn-back-balik">
                        <i class="fa fa-arrow-left"></i></a>
                    <div class="content">
                        <div class="my-auto d-flex justify-content-center">
                            <h1 class="heading" style="margin-top: -1em">{{ $attractionPackage->name }}</h1>
                            <h6 class="mt-2 mb-0 p-3 pt-0">oleh {{ $attraction->name }}</h6>
                        </div>
                    </div>
                </div>
                {{-- galeri --}}
                <div class="carousel-galeri mt-4">
                <div class="col-md-12 galeri">
                    <div class="swiper swipper-slider">
                        <div class="swiper-wrapper">
                            @foreach ($attractionPackage->images as $image)
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


    {{-- DESKRIPSI PAKET WISATA --}}
    <div class="bg mt-5" style="flex-wrap: wrap; padding-top: 70px; padding-bottom: 70px;">
        <div class="container desc">
            @if($attractionPackage->video)
            <div class="row">
                <div class="col-lg desc-img ratio ratio-16x9">
                    <iframe src="{{ $attractionPackage->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-lg desc-teks">
                    <h5>Deskripsi</h5>
                    <div class="deskripsi-atraksi" style="text-align: justify;">
                        <p>{!! $attractionPackage->description !!}</p>
                    </div>
                </div>
            </div>
            @endif
            @if(!$attractionPackage->video)
            <div class="row">
                <div class="col-lg desc-teks">
                    <h5>Deskripsi</h5>
                    <div class="deskripsi-atraksi" style="text-align: justify;">
                        <p>{!! $attractionPackage->description !!}</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
        <div class="container mb-5">
            <div class="harga mt-5">
                <h4>Harga</h4>
                <h6 class="price">Rp{{ number_format($attractionPackage->price, 0, ',', '.') }} /Paket</h6>
            </div>
            <div class="row toggle-paket-wisata">
                <div class="col my-auto">
                    {{-- <form action="/travels/{{ $travelMenu->slug }}" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $travelMenu->id }}">
                        <input type="hidden" name="slug" value="{{ $travelMenu->slug }}">
                        <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                        <input type="hidden" name="price" value="{{ $travelMenu->price }}"> --}}
                        <div class="row input-amount ">
                            <div class="col-md-5 my-auto">
                                <input type="hidden" name="quantity" id="quantityInput">
                                <div class="input-wrapper-2">
                                    <span class="minus">-</span>
                                    <span class="num" id="quantityValue">1</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                            <div class="button-add-amount my-auto">
                                <button type="submit" class="add-button">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm input-amount-2  mx-auto">
                    <div class="row kedua">
                        <div class="button-hubungi my-auto">
                            <button class="btn-hubungi">
                                <a href="https://wa.me/6281234543" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                        viewBox="0 0 31 30" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.8965 15C3.8965 8.29367 9.24362 2.85714 15.8396 2.85714C22.4356 2.85714 27.7827 8.29367 27.7827 15C27.7827 21.7062 22.4356 27.1428 15.8396 27.1428C13.49 27.1428 11.303 26.4545 9.45772 25.2658C9.11431 25.0447 8.6935 24.9855 8.30396 25.1037L4.25854 26.3312L5.7817 22.7075C5.96173 22.2792 5.9251 21.7887 5.68354 21.393C4.55081 19.5371 3.8965 17.3484 3.8965 15ZM15.8396 0C7.69161 0 1.08636 6.71571 1.08636 15C1.08636 17.6258 1.75115 20.0975 2.91946 22.2467L0.496857 28.0099C0.282693 28.5195 0.377623 29.1089 0.740427 29.5224C1.10323 29.9359 1.66848 30.0988 2.1907 29.9402L8.51271 28.0221C10.6724 29.2807 13.1751 29.9999 15.8396 29.9999C23.9876 29.9999 30.5928 23.2842 30.5928 15C30.5928 6.71571 23.9876 0 15.8396 0ZM19.0607 18.1177L17.2142 19.4401C16.3493 18.9392 15.3932 18.2401 14.4341 17.265C13.4371 16.2513 12.6979 15.2047 12.1528 14.2447L13.3263 13.232C13.8299 12.7974 13.9677 12.0647 13.6575 11.4718L12.1623 8.61467C11.9609 8.22994 11.5979 7.9597 11.1764 7.88075C10.7548 7.80183 10.3209 7.92284 9.99796 8.2094L9.55464 8.60277C8.48857 9.54875 7.85807 11.1033 8.38063 12.6773C8.92239 14.309 10.0786 16.8771 12.4471 19.2852C14.9953 21.8761 17.5837 22.8964 19.0974 23.2927C20.317 23.6118 21.4711 23.184 22.2844 22.5102L23.1155 21.8217C23.471 21.5272 23.6628 21.0748 23.6293 20.6098C23.5957 20.1448 23.3411 19.7257 22.9471 19.487L20.589 18.0584C20.1127 17.77 19.5141 17.7931 19.0607 18.1177Z"
                                            fill="white" />
                                    </svg>
                                    Hubungi Admin</a>
                            </button>
                        </div>
                    </div>
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
