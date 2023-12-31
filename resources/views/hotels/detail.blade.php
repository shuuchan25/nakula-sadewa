@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        @include('sweetalert::alert')
        <div class="bd-content">
            <div class="container mt-5 pt-5">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/hotels" class="text-decoration-none">Akomodasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $hotel->name }}</li>
                    </ol>
                </nav>
                {{-- <div class="row">
            <div class="col-md-12 position-relative mb-3 p-0">
                <img src="{{ Storage::url($hotel->image) }}" alt="" class="rounded-4" width="100%">
                <a href="/hotels" class="btn btn-back-penginapan">
                    <i class="fa fa-arrow-left"></i></a>
            </div>
        </div> --}}
            </div>

            <div class="container position-relative mb-4">
                {{-- <div class="swiper-button-next"></div>
        <div class="swiper swipper-slider">
            <div class="swiper-wrapper">
                @foreach ($hotel->images as $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $image->other_image) }}" alt="" class="w-100">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-button-prev"></div> --}}
                {{-- <div class="swiper-pagination"></div> --}}

                {{-- hero --}}
                <div class="detail row">
                    <div class="banner col-md-12 position-relative mb-3">
                        <img src="{{ asset('storage/' . $hotel->image) }}" alt="Hotel" />
                        <a href="/hotels" class="btn btn-back-balik">
                            <i class="fa fa-arrow-left"></i></a>
                        <div class="content">
                            <div class="my-auto d-flex justify-content-center heading">
                                <h1>{{ $hotel->name }}</h1>
                            </div>
                        </div>
                    </div>
                    {{-- galeri --}}
                    @if ($hotel->images->count() > 0)
                        <div class="carousel-galeri mt-3 mb-5">
                            <div class="col-md-12 galeri">
                                <div class="swiper swipper-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotel->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('storage/' . $image->other_image) }}" alt="galeri"
                                                    class="w-100">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-prev tombol"></div>
                                <div class="swiper-button-next tombol"></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-5 py-5 bg">
                <div class="container hotels">
                    <div class="row">
                        <div class="col-sm-8 tentang">
                            <h3>Tentang</h3>
                            {!! $hotel->description !!}
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-4">
                                <h3>Alamat</h3>
                                <div class="desc-tentang">
                                    <p class="mb-3"><i class="fa fa-map-marker-alt me-2"></i>{{ $hotel->address }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h3>Kontak</h3>
                                {{-- <p><i class="fa fa-phone me-2"></i>{{ $hotel->contact }}</p> --}}
                                <button class="btn-hubungi">
                                    <a href="https://wa.me/62{{ $hotel->contact }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                            viewBox="0 0 31 30" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.8965 15C3.8965 8.29367 9.24362 2.85714 15.8396 2.85714C22.4356 2.85714 27.7827 8.29367 27.7827 15C27.7827 21.7062 22.4356 27.1428 15.8396 27.1428C13.49 27.1428 11.303 26.4545 9.45772 25.2658C9.11431 25.0447 8.6935 24.9855 8.30396 25.1037L4.25854 26.3312L5.7817 22.7075C5.96173 22.2792 5.9251 21.7887 5.68354 21.393C4.55081 19.5371 3.8965 17.3484 3.8965 15ZM15.8396 0C7.69161 0 1.08636 6.71571 1.08636 15C1.08636 17.6258 1.75115 20.0975 2.91946 22.2467L0.496857 28.0099C0.282693 28.5195 0.377623 29.1089 0.740427 29.5224C1.10323 29.9359 1.66848 30.0988 2.1907 29.9402L8.51271 28.0221C10.6724 29.2807 13.1751 29.9999 15.8396 29.9999C23.9876 29.9999 30.5928 23.2842 30.5928 15C30.5928 6.71571 23.9876 0 15.8396 0ZM19.0607 18.1177L17.2142 19.4401C16.3493 18.9392 15.3932 18.2401 14.4341 17.265C13.4371 16.2513 12.6979 15.2047 12.1528 14.2447L13.3263 13.232C13.8299 12.7974 13.9677 12.0647 13.6575 11.4718L12.1623 8.61467C11.9609 8.22994 11.5979 7.9597 11.1764 7.88075C10.7548 7.80183 10.3209 7.92284 9.99796 8.2094L9.55464 8.60277C8.48857 9.54875 7.85807 11.1033 8.38063 12.6773C8.92239 14.309 10.0786 16.8771 12.4471 19.2852C14.9953 21.8761 17.5837 22.8964 19.0974 23.2927C20.317 23.6118 21.4711 23.184 22.2844 22.5102L23.1155 21.8217C23.471 21.5272 23.6628 21.0748 23.6293 20.6098C23.5957 20.1448 23.3411 19.7257 22.9471 19.487L20.589 18.0584C20.1127 17.77 19.5141 17.7931 19.0607 18.1177Z"
                                                fill="white" />
                                        </svg>
                                        Hubungi Penginapan</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container room">
                <div class="mb-5">
                    <h3 class="mb-3">Tipe Kamar</h3>
                    <div class="row align-items-stretch">
                        @if ($hotelRooms->count() > 0)
                            @foreach ($hotelRooms as $room)
                                <div class="col-md-12 col-lg-6 col-xl-6 g-4">
                                    <div class="card mb-3 h-100" style="border-radius: 8px;">
                                        <div class="row m-0">
                                            <div class="swiper swipper-slider-2 col-md-12 p-0">
                                                <div class="swiper-wrapper">
                                                    @foreach ($room->images as $image)
                                                        <div class="swiper-slide">
                                                            <img src="{{ asset('storage/' . $image->image) }}"
                                                                alt="" class="w-100">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="d-flex flex-column h-100">
                                                <div>
                                                    <h4>{{ $room->name }}</h4>
                                                    <small class="d-block"><i class="fa fa-user me-1"></i>
                                                        {{ $room->capacity }} Orang</small>
                                                    <div class="desc-room">
                                                        <p class="mb-3">{!! $room->description !!}</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-auto">
                                                    <div class="col-lg-12 text-end">
                                                        <form action="/hotels/{{ $hotel->slug }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="item_id"
                                                                value="{{ $room->id }}">
                                                            <input type="hidden" name="session_id"
                                                                value="{{ session()->getId() }}">
                                                            <input type="hidden" name="price"
                                                                value="{{ $room->price }}">
                                                            <input type="hidden" name="slug"
                                                                value="{{ $hotel->slug }}">


                                                            <div class="d-flex align-items-end justify-content-end m-0" style="max-width: 100%;">
                                                                <div class="ms-auto me-2">
                                                                    <div class="card-dropdown w-auto" style="height: 46px;">
                                                                        <span class="btn-card-dropdown fs-6 "
                                                                            style="padding: 10px; max-width: 100%;">
                                                                            <span class="ms-1 me-1">Jumlah Item</span>
                                                                        </span>
                                                                        <div class="card-dropdown-content">
                                                                            <div
                                                                                class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                                                                <div class="text" style="padding-right: 3px;">Kamar</div>
                                                                                <div class="quantity-input">
                                                                                    <input class="qty" min="1"
                                                                                        name="quantity" value="1"
                                                                                        type="number">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="d-flex justify-content-between mb-2">
                                                                                <div class="text" style="padding-right: 3px;">Malam</div>
                                                                                <div class="quantity-input">
                                                                                    <input class="qty" min="1"
                                                                                        name="sub_quantity" value="1"
                                                                                        type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="px-0">
                                                                    <div class="text-end mb-2">
                                                                        <strong>Rp{{ number_format($room->price, 0, ',', '.') }}</strong>
                                                                    </div>
                                                                    <button type="submit"
                                                                        class="detail-button btn-sm w-auto px-4">Tambahkan</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="pt-5">
                                <p>No room found.</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="w-100 mb-4">
                    <h3 class="mb-3">Lokasi/Peta</h3>
                    <iframe src="{{ $hotel->map }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-4"></iframe>
                </div>

            </div>
        </div>
        @include('partials.footer')
    </div>
@endsection
@section('script-head')
    <style>
        .card .card-body {
            overflow: unset;
            display: block
        }

        .btn-back-penginapan {
            position: absolute;
            top: 10px;
            left: 20px;
            background: rgba(255, 255, 255, .67);
            border-radius: 50%;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-button-next {
            right: 10px;
        }

        .container .breadcrumb {
            padding-top: 0;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }

        h3 {
            font: 600 20px "Poppins", sans-serif;
        }

        .hotels .tentang {
            text-align: justify;
            padding-right: 60px !important;
        }

        .card .swiper-slide img {
        transition: transform 0.3s ease;
        }

        .card .swiper-slide:hover img {
            transform: scale(1.08);
        }

        .card-body h5 {
            font-size: 16px;
        }

        .card .card-body .card-dropdown .quantity-input svg{
            width: 8px;

        }

        .detail-button {
            height: 46px;
            max-width: 160px !important;
            width: 100% !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            font-size: 16px;
        }

        .detail-button:hover {
            scale: 1.03;
            background-color: white;
            scale: none;
            border-color: var(--ylw);
        }

        @media screen and (max-width: 350px){
            .card-dropdown .btn-card-dropdown{
            width: 100%;
            min-width: 130px !important;
        }

            .card .card-body .card-dropdown span{
                font-size: 15px;
            }

            .card-dropdown-content .text{
                font-size: 14px;
            }

            .detail-button {
                max-width: 100%;
                font-size: 14px;
            }
        }

        @media screen and (max-width: 780px) {
            .detail-button {
                width: 100% !important;
            }
        }

        @media screen and (max-width: 500px) {
            .hotels .tentang {
                padding-right: 12px !important;
            }
        }
    </style>
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
        // minus = document.querySelector(".minus"),
        // num = document.querySelector(".num");
        // const quantityInput = document.getElementById('quantityInput');

        // let a = 1;

        // plus.addEventListener("click", ()=>{
        //   a++;
        //   a = (a < 10) ? + a : a;
        //   updateQuantity();
        // });
        // minus.addEventListener("click", ()=>{
        //   if(a > 1){
        //     a--;
        //     a = (a < 10) ? + a : a;
        //     updateQuantity();
        //   }
        // });

        // function updateQuantity() {
        //     num.innerText = a;
        //     quantityInput.value = a; // Update the hidden input field
        // }
    </script>
@endsection
