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
                    {{-- <div class="button-balik">
                        <button onclick="window.location='/attractions?category_id={{ $attraction->category_id }}'" class="btn-back ">
                            <svg width="25" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div> --}}

                    <div class="my-auto d-flex justify-content-center">
                        <h1 class="heading">{{ $hotel->name }}</h1>
                    </div>
                </div>
        </div>
        {{-- galeri --}}
        <div class="carousel-galeri mt-3">
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
    </div>
</div>
</div>

    <div class="mb-4 py-5 bg-secondary2">
        <div class="container">
            <h2 class="fw-bolder mb-0">{{ $hotel->name }}</h2>
            <small class="d-block mb-3"><i class="fa fa-map-marker-alt"></i> {{ $hotel->address }}</small>
            <h2 class="fw-bolder mb-0">Tentang</h2>
            <small class="d-block mb-3">{!! $hotel->description !!}</small>
            <h2 class="fw-bolder mb-0">Kontak</h2>
            <small class="d-block mb-3">{!! $hotel->contact !!}</small>

            <div class="row">
                {{-- <div class="col-md-12">
                    <h5 class="fw-bolder">Tentang</h5>
                    <p>{!! $hotel->description !!}</p>
                    <div class="mt-4">
                        <h5 class="fw-bolder">Kontak</h5>
                        <p>{{ $hotel->contact }}</p>
                    </div>
                </div> --}}
                {{-- <div class="col-md-6 ms-auto">
                <h5 class="fw-bolder">Fasilitas</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-water-ladder me-2"></i> Kolam renang outdoor</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-dumbbell me-2"></i> Gym</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-water-ladder me-2"></i> Kolam renang indoor</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-wine-glass me-2"></i> Cafe/bar</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-spa me-2"></i> Spa dan pusat kesehatan</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-wifi me-2"></i> Free Wi-Fi</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-utensils me-2"></i> Restoran</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-mug-saucer me-2"></i> Mesin teh/kopi</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fa-solid fa-bell-concierge me-2"></i> Room service</span>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>

    </div>
    <div class="container">

        <div class="mb-5">
            <h4 class="mb-3 fw-bolder">Tipe Kamar</h4>
            <div class="row">
                @if ($hotelRooms->count() > 0)
                    @foreach ($hotelRooms as $room)
                        <div class="col-md-6">
                            <div class="card rounded-4 mb-3">
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
                                    <h4 class="fw-bold">{{ $room->name }}</h4>
                                    <small class="d-block mb-2"><i class="fa fa-user"></i> {{ $room->capacity }} Orang</small>
                                    <p class="mb-4">{!! $room->description !!}</p>
                                    <div class="row">
                                        <div class="col-lg-8 text-end offset-lg-4">
                                            <form action="/hotels/{{ $hotel->slug }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="item_id" value="{{ $room->id }}">
                                                <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                                                <input type="hidden" name="price" value="{{ $room->price }}">
                                                <input type="hidden" name="slug" value="{{ $hotel->slug }}">
                                            <div class="text-end mb-1 "><strong>Rp{{ number_format($room->price, 0, ',', '.') }}</strong></div>
                                            <div class="row align-items-center">
                                                {{-- <div class="col-lg-6 mb-3 mb-lg-0">
                                                    <input type="number" class="form-control text-center"
                                                        value="1">
                                                </div> --}}
                                                <div class="mb-3 row d-flex align-items-center justify-content-center">
                                                    <input type="hidden" name="quantity" id="quantityInput{{ $room->id }}">
                                                    <div class="input-wrapper">
                                                        <span class="minus" data-itemid="{{ $room->id }}">-</span>
                                                        <span class="num" id="quantityValue{{ $room->id }}">1</span>
                                                        <span class="plus" data-itemid="{{ $room->id }}">+</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <button type="submit"
                                                        class="detail-button btn-sm w-100 d-block">Tambahkan</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="pt-5">
                        <p>Nothing room found.</p>
                    </div>
                @endif
            </div>
        </div>

        <div class="w-100 mb-4">
            <h4 class="mb-3 fw-bolder">Lokasi/Peta</h4>
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
        .bg-secondary2 {
            background: #F6E7D8;
        }

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
            border-radius: 15px;
        }
    </style>
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
            nextEl: ".swipper-slider .swiper-button-next",
            prevEl: ".swipper-slider .swiper-button-prev",
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

        // const plus = document.querySelector(".plus"),
        // minus = document.querySelector(".minus"),
        // num = document.querySelector(".num");
        // const quantityInput = document.getElementById('quantityInput');

        // let a = 1;

        // plus.addEventListener("click", ()=>{
        // a++;
        // a = (a < 10) ? + a : a;
        // updateQuantity();
        // });
        // minus.addEventListener("click", ()=>{
        // if(a > 1){
        //     a--;
        //     a = (a < 10) ? + a : a;
        //     updateQuantity();
        // }
        // });

        // function updateQuantity() {
        //     num.innerText = a;
        //     quantityInput.value = a; // Update the hidden input field
        // }

        const plusButtons = document.querySelectorAll(".plus");
        const minusButtons = document.querySelectorAll(".minus");

        plusButtons.forEach(plusButton => {
            plusButton.addEventListener("click", function() {
                const itemId = this.getAttribute("data-itemid");
                updateQuantity(itemId, 1);
            });
        });

        minusButtons.forEach(minusButton => {
            minusButton.addEventListener("click", function() {
                const itemId = this.getAttribute("data-itemid");
                updateQuantity(itemId, -1);
            });
        });

        function updateQuantity(itemId, increment) {
            const quantityValue = document.getElementById(`quantityValue${itemId}`);
            const quantityInput = document.getElementById(`quantityInput${itemId}`);

            let a = parseInt(quantityValue.innerText, 10) + increment;

            if (a > 0 && a < 10) {
                quantityValue.innerText = a;
                quantityInput.value = a;
            }
        }

    </script>
@endsection
