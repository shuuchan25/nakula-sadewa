@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
@include('sweetalert::alert')

<section class="alam">
    {{-- BREADCRUMB --}}
    <div class="container atraksi-alam">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/attractions">Atraksi</a></li>
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/attractions?category_id={{ $attraction->category_id }}">{{ $attraction->category->name }}</a></li>
            <li class="breadcrumb-item aktif" aria-current="page">Detail</li>
            </ul>

    {{-- hero --}}
            <div class="detail row">
                <div class="banner col-md-12 position-relative mb-3">
                        <img src="{{ asset('storage/' . $attraction->image) }}" alt="Desa Wisata"/>
                        <a href="/attractions" class="btn btn-back-balik">
                            <i class="fa fa-arrow-left"></i></a>
                        <div class="content">
                            <div class="d-flex justify-content-center heading">
                                <h1>{{ $attraction->name }}</h1>
                            </div>
                        </div>
                </div>
                {{-- galeri --}}
                <div class="carousel-galeri mt-3">
                    <div class="col-md-12 galeri">
                        <div class="swiper swipper-slider">
                            <div class="swiper-wrapper">
                                @foreach ($attraction->images as $image)
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
    {{-- end container --}}


    {{-- Deskripsi desa wisata --}}
    <section class="bg  mt-5">
        <div class="container desc" style="flex-wrap: wrap; padding-bottom: 70px; padding-top: 70px;">
            <div class="row d-flex justify-content-center align-items-center">
                @if($attraction->video)
                    <div class="col-lg desc-img ratio ratio-16x9">
                        <iframe src="{{ $attraction->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                @endif
                <div class="col-lg desc-teks">
                    <h5>Deskripsi</h5>
                    <div class="deskripsi-atraksi" style="text-align: justify;">
                    <p>{!! $attraction->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LOKASI --}}
    <div class="container">
        <section class="lokasi-nada">
            <div class="row mt-5 pt-4">
                <div class="d-flex justify-content-center align-item-center">
                    @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-25">
                        {!! session('success') !!}
                    </div>
                @endif
                </div>
                <div class="col-md-8 lokasii">
                    <h5>Lokasi</h5>
                    <p class="card-text"><i class="fa fa-map-marker-alt"></i> {{ $attraction->address }}</p>
                    <h5>Waktu Operasional</h5>
                    <p class="card-text"><i class="fa fa-clock"></i> {{ $attraction->operational_hour }}</p>
                    <h5>Kontak</h5>
                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> {{ $attraction->contact }}</p>
                </div>
                <div class="col-sm harga-detail pt-3 pb-4 mx-auto">
                    <form action="/attractions/{{ $attraction->slug }}" method="POST">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $attraction->id }}">
                    <input type="hidden" name="slug" value="{{ $attraction->slug }}">
                    <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                        <div class="row">
                            <h6>Harga</h6>
                            <input type="hidden" name="price" value="{{ $attraction->price }}">
                            <p>Rp{{ number_format($attraction->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center">
                            <input type="hidden" name="quantity" id="quantityInput">
                            <div class="input-wrapper">
                                <span class="minus">-</span>
                                <span class="num" id="quantityValue">1</span>
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="row mt-3 d-flex align-items-center justify-content-center">
                            <button class="btn-tambahkan" type="submit">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>


    {{-- LIHAT PETA/MAPS --}}
        <section class="maps mt-5 pt-4 mb-5">
            <h5 class="card-title pb-4">Lokasi/Maps</h5>
            <iframe src="{{ $attraction->map }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
        </section>
    </div>

</section>

@include('partials.footer')
</div>
{{-- <script>
    // Get the num span and the hidden input field
    var numSpan = document.getElementById('quantityValue');
    var quantityInput = document.getElementById('quantityInput');

    // Update the hidden input field when the num span changes
    numSpan.addEventListener('input', function() {
        quantityInput.value = numSpan.textContent;
        console.log('Quantity updated: ' + quantityInput.value);
    });
</script> --}}
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
