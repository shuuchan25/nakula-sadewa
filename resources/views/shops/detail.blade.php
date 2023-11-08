@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
{{-- BREADCRUMB --}}
<div class="container">
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration:none" href="/shops">Pusat Oleh-Oleh</a></li>
        <li class="breadcrumb-item" aria-current="page">Detail Toko</li>
        </ul>

<!-- HERO-->
        <div class="detail row">
            <div class="banner col-md-12 position-relative mb-3">
                <img src="{{ Storage::url($shop->image) }}" alt="Pusat Oleh-Oleh"/>
                <a href="/shops" class="btn btn-back-balik">
                    <i class="fa fa-arrow-left"></i></a>
                <div class="content">
                    <div class="heading">
                        <h1>{{ $shop->name }}</h1>
                    </div>
                </div>
            </div>
            {{-- galeri --}}
            <div class="carousel-galeri mt-3">
                <div class="col-md-12 galeri">
                    <div class="swiper swipper-slider">
                        <div class="swiper-wrapper">
                            @foreach ($shop->images as $image)
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
{{-- end galeri --}}


<!-- DESCRIPTION-->
    <section class="deskripsi mt-5 mb-5" style="padding-bottom: 70px; padding-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 ms-auto lokasi-oleh">
                    <h5 class="card-title">Lokasi</h5>
                    <p class="card-text"><i class="fa fa-map-marker-alt"></i> {{ $shop->address }}</p>
                    <h5 class="card-title">Waktu Operasional</h5>
                    <p class="card-text"><i class="fa fa-clock"></i> {{ $shop->operational_hour }}</p>
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> {{ $shop->contact }}</p>
                </div>
                <div class="col-sm-7 deskripsi-oleh mx-auto">
                    <h5 class="card-title">Deskripsi</h5>
                    <div class="card-text">
                    <p>{!! $shop->description !!}</p></div>
                </div>
            </div>
        </div>
    </section>

{{-- MAPS --}}
<div class="container mt-3">
    <section class="maps mt-5 pt-4 mb-5">
        <h5 class="card-title pb-3">Lokasi/Maps</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614014133!2d111.47004232617756!3d-8.163560432211733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1697517099184!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
    </section>

<!-- CARD LIST -->
        <h5 class="judul-produk mt-5 mb-3">Produk</h5>
            @if($gifts->count() > 0)
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-3 ">
                    @foreach($gifts as $gift)
                        <div class="col">
                            <div class="card-card">
                                <div class="content-img">
                                    <img src="{{ Storage::url($gift->image) }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body produk">
                                    <div class="judul">
                                        <h5 class="mb-0">{{ $gift->name }}</h5>
                                    </div>
                                    <div class="description">
                                        <p>{!! $gift->description !!}</p>
                                    </div>
                                    <div class="harga">
                                        <h6>Rp{{ number_format($gift->price, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="btn-lihat mt-4 mb-5 d-flex justify-content-center">
                    <button onclick="window.location='/shops/{{ $shop->slug }}/gifts'" class="lihat-button">Lihat Semua</button>
                </div>
            @else
                <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data Menu yang tersedia.</p>
            @endif

</div>
{{-- end container --}}


<!-- FOOTER-->
</div>
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
    </script>

    @endsection

