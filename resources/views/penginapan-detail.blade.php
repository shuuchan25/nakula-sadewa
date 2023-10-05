
@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')

<div class="container my-5">

    <div class="row mb-5">
        <div class="col-md-12 relative mb-3">
            <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="rounded-4" width="100%">
        </div>
        <div class="col-md-12">
            <div class="swiper swipper-slider">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                  </div>
                  <div class="swiper-slide">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </div>

    <div class="mb-4">
        <h2 class="fw-bolder">Hotel Uapik Dewe Sak Trenggalek</h2>
        <small class="d-block mb-3"><i class="fa fa-map-marker-alt"></i> Jl Blimbink no 892, Trenggalek City </small>

        <div class="row">
            <div class="col-md-5">
                <h5 class="fw-bolder">Tentang</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
            </div>
            <div class="col-md-6 ms-auto">
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
            </div>
        </div>

    </div>

    <div class="mb-5">
        <div class="card rounded-4 mb-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="swiper swipper-slider-2">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                          </div>
                          <div class="swiper-slide">
                            <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="w-100">
                          </div>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h4 class="fw-bold">Kamar Superior 1 Tempat Tidur Queen</h4> 
                        <small class="d-block mb-4"><i class="fa fa-user"></i> 2 Orang</small>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu l</p>
                        <div class="row">
                            <div class="col-lg-8 text-end offset-lg-4">
                                <div class="text-end mb-1 "><strong>Rp 1.000.000/malam</strong></div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <input type="number" class="form-control text-center" value="1">
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="btn btn-warning btn-sm w-100 d-block">Tambahkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614731597!2d111.46970935265813!3d-8.163560318840469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1694351083338!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
        <small><i class="fa fa-map-marker-alt"></i> Kota Trenggalek</small>
    </div>
    
</div>

@include('user.partials.footer')

@endsection
@section('script-head')
<style>

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
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
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
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
</script>
@endsection
