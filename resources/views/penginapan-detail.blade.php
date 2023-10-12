
@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

<div class="container detailpenginapan mt-5 pt-5">

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('penginapan') }}" class="text-decoration-none">Akomodasi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
      </nav>
      <div class="row">
          <div class="col-md-12 position-relative mb-3 p-0">
              <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="rounded-4" width="100%">
              <a href="{{ url('penginapan') }}" class="btn btn-back-penginapan">
              <i class="fa fa-arrow-left"></i></a>
          </div>
      </div>
    </div>

    <div class="container position-relative mb-4">
        <div class="swiper-button-next"></div>
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
        </div>
        <div class="swiper-button-prev"></div>
        {{-- <div class="swiper-pagination"></div> --}}
    </div>


    <div class="mb-4 py-5 bg-secondary2">
        <div class="container">
        <h2 class="fw-bolder">Hotel Uapik Dewe Sak Trenggalek</h2>
        <small class="d-block mb-3"><i class="fa fa-map-marker-alt"></i> Jl Blimbink no 892, Trenggalek City </small>

        <div class="row">
            <div class="col-md-12">
                <h5 class="fw-bolder">Tentang</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
                <div class="mt-4">
                    <h5 class="fw-bolder">Kontak</h5>
                    <p>081984123543</p>
                </div>
            </div>
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
            <div class="col-md-6">
                <div class="card rounded-4 mb-3">
                    <div class="row">
                        <div class="col-lg-12">
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
                        <div class="col-lg-12">
                            <div class="card-body p-3">
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
                                                <button class="detail-button btn-sm w-100 d-block">Tambahkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded-4 mb-3">
                    <div class="row">
                        <div class="col-lg-12">
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
                        <div class="col-lg-12">
                            <div class="card-body p-3">
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
                                                <button class="detail-button btn-sm w-100 d-block">Tambahkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 mb-4">
        <h4 class="mb-3 fw-bolder">Lokasi/Peta</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614731597!2d111.46970935265813!3d-8.163560318840469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1694351083338!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
    </div>

</div>

@include('partials.footer')
</div>
@endsection

@section('script-body')
<script>
        var swiper = new Swiper(".swipper-slider", {
            slidesPerView: 1,
            spaceBetween: 10,
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
                    spaceBetween: 5,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
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
