@extends('partials.master')
@section('content')
    {{-- Get partials --}}
    @include('partials.header')
    @include('sweetalert::alert')

    <div class="container mt-5 pt-5">

        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/hotels" class="text-decoration-none">Akomodasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail {{ $hotel->name }}</li>
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
                <img src="{{ asset('storage/' . $hotel->image) }}" alt="Hotel"/>
                <a href="/hotels" class="btn btn-back-balik">
                    <i class="fa fa-arrow-left"></i></a>
                <div class="content">
                    <div class="my-auto d-flex justify-content-center">
                        <h1 class="heading">{{ $hotel->name }}</h1>
                    </div>
                </div>
        </div>
        {{-- galeri --}}
        @if($hotel->images->count() > 0)
        <div class="carousel-galeri mt-3 mb-5">
            <div class="col-md-12 galeri">
                <div class="swiper swipper-slider">
                    <div class="swiper-wrapper">
                        @foreach ($hotel->images as $image)
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
        @endif
    </div>
</div>

    <div class="mb-5 py-5 bg">
        <div class="container hotels">
            <div class="row">
                <div class="col-sm-8 tentang">
                    <h3>Tentang</h3>
                    <p>{!! $hotel->description !!}</p>
                </div>
                <div class="col-sm-4">
                    <div class="mb-4">
                        <h3>Alamat</h3>
                        <div class="desc-tentang">
                        <p class="mb-3"><i class="fa fa-map-marker-alt"></i> {{ $hotel->address }}</p></div>
                    </div>
                    <div class="mb-4">
                        <h3>Kontak</h3>
                        <p><i class="fa fa-phone"></i> {{ $hotel->contact }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="mb-5">
            <h3 class="mb-3">Tipe Kamar</h3>
            <div class="row align-items-stretch">
                @if ($hotelRooms->count() > 0)
                    @foreach ($hotelRooms as $room)
                        <div class="col-md-12 col-lg-6 col-xl-6">
                            <div class="card mb-3 h-100" style="border-radius: 8px;">
                                <div class="row m-0">
                                    <div class="swiper swipper-slider-2 col-md-12 p-0">
                                        <div class="swiper-wrapper">
                                            @foreach($room->images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('storage/' . $image->image) }}" alt=""
                                                    class="w-100">
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="d-flex flex-column h-100">
                                        <div>
                                            <h5>{{ $room->name }}</h5>
                                            <small class="d-block"><i class="fa fa-user"></i> {{ $room->capacity }} Orang</small>
                                            <div class="desc-room"><p class="mb-3">{!! $room->description !!}</p></div>
                                        </div>
                                        <div class="row mt-auto">
                                            <div class="col-lg-12 text-end">
                                                <form action="/hotels/{{ $hotel->slug }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="item_id" value="{{ $room->id }}">
                                                    <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                                                    <input type="hidden" name="price" value="{{ $room->price }}">
                                                    <input type="hidden" name="slug" value="{{ $hotel->slug }}">


                                                <div class="d-flex align-items-end justify-content-end m-0">

                                                    <div class="ms-auto me-2">
                                                        <div class="card-dropdown">
                                                            <span class="btn-card-dropdown fs-6" style="padding: 10px">
                                                                <span class="ms-3">Jumlah Item</span>
                                                            </span>
                                                            <div class="card-dropdown-content">
                                                                <div class="d-flex justify-content-between">
                                                                    <div>Kamar</div>
                                                                    <div class="quantity-input">
                                                                        <input class="qty" min="1" name="quantity" value="1" type="number">
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between mb-2">
                                                                    <div>Malam</div>
                                                                    <div class="quantity-input">
                                                                        <input class="qty" min="1" name="sub_quantity" value="1" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="px-0">
                                                        <div class="text-end mb-2"><strong>Rp{{ number_format($room->price, 0, ',', '.') }}</strong></div>
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
            <iframe
                src="{{ $hotel->map }}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
        </div>

    </div>

    @include('partials.footer')
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
        h3{
            font: 600 20px "Poppins", sans-serif;
        }
        .hotels .tentang{
            text-align: justify;
            padding-right: 60px !important;
        }
        .card-body h5{
            font-size: 16px;
        }
        .card-body .desc-room{
            font-size: 14px;
            position: relative;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }
        .detail-button {
            height: 46px;
            width: 160px !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            font-size: 16px;
        }
        .detail-button:hover{
            scale: 1.03;
            background-color: white;
            scale: none;
            border-color: var(--ylw);
        }
        @media screen and (max-width: 780px) {

        }
        @media screen and (max-width: 500px) {
            .hotels .tentang{
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
