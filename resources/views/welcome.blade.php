@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

{{-- Swiper --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

<!-- Slick JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


{{-- HERO SECTION --}}
<section class="hero-wrapper">
    <div id="slider-autoplay" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="z-index: 99">
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner hero">
            <div class="carousel-item active">
                <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-1">
            </div>
            <div class="carousel-item hero">
                <img src="../assets/pict/hero-wisata.jpg" class="d-block w-100" alt="hero-2">
            </div>
            <div class="carousel-item hero">
                <img src="../assets/pict/destinasi.jpg" class="d-block w-100" alt="hero-2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider-autoplay" data-bs-slide="prev" style="z-index: 99">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider-autoplay" data-bs-slide="next" style="z-index: 99">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="carousel-caption">
        <h5>TRENGGALEK</h5>
        <h5>SOUTHERN PARADISE</h5>
        <br>
        <p>Some representative placeholder content for the first slide.</p>
    </div>
</section>
{{-- END HERO SECTION --}}


{{-- KATALOG MENU --}}
<section class="katalog mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row menu w-100">
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-mountain.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Destinasi Wisata</p>
                </div>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-hotel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Penginapan</p>
                </div>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-kuliner.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Kuliner</p>
                </div>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-travel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Biro Perjalanan</p>
                </div>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-route.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Peta Wisata</p>
                </div>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/icon-travel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Kalkulator</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END KATALOG MENU --}}

{{-- ABOUT --}}
<section class="about  mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-4 about-img">
                <img src="../assets/pict/hero-wisata.jpg" alt="">
            </div>
            <div class="col-8 about-teks">
                <h3>About Us</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
            </div>
        </div>
    </div>
</section>
{{-- END ABOUT --}}

{{-- VIDEO PROFILE --}}
<section class="video-wrapper mt-5 mb-5 pt-5 pb-5">
    <div class="container video-profile">
        <div class="row mb-3 mt-2 video-title">
            <h3>Video Profile</h3>
        </div>
        <div class="video row mb-5">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UKlLLKDUsdQ?si=NsjFztcxfKjg1pyu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</section>
{{-- END VIDEO PROFILE --}}

{{-- KALENDER EVENT --}}
<section class="kalendar mb-5">
    <div class="container kalendar">
        <div class="row kalender-title">
            <h3>Kalender Event</h3>
        </div>
        <div class="container swiper pt-5">
            <div class="slide-container-kalender">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-box">
                            <img src="../assets/pict/hero-deswisata.png">
                        </div>
                        <div class="card-body">
                            <h5>Card Title</h5>
                            <p class="lokasi">Lokasi</p>
                            <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="image-box">
                            <img src="../assets/pict/hero-homepage.png">
                        </div>
                        <div class="card-body">
                            <h5>Card Title</h5>
                            <p class="lokasi">Lokasi</p>
                            <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5>Card Title</h5>
                            <p class="lokasi">Lokasi</p>
                            <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                            <button type="detail" class="w-100 detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            </div>
        </div>
    </div>
</section>
{{-- END KALENDER EVENT --}}

{{-- BERITA TERKINI --}}
<section class="berita mb-5 pt-5 pb-3">
    <div class="container berita">
        <div class="berita-title">
            <h3>Berita Terkini</h3>
        </div>
        <div class="container swiper mb-5 pt-3">
            <div class="slide-container-berita">
                <div class="berita-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END BERITA TERKINI --}}

{{-- KATA MEREKA --}}
<section class="kata mt-5 mb-5 pt-3 pb-3">
    <div class="container kata">
        <div class="row kata-title">
            <h3>Kata Mereka</h3>
        </div>
        <div class="row res-slider">
            <div class="col-12 mt-5 wrapper justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex align-items-center mt-2 mb-2">
                        <img src="../assets/pict/hero-homepage.png">
                    </div>
                    <div class="col-8 my-auto">
                        <div class="teks">
                            <p class="card-text"><small class="text-body-secondary">Sep, 05 2023</small></p>
                            <h5 class="card-title">Cholis Hock M</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="detail" class="detail-button mt-3">Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex align-items-center mt-2 mb-2">
                        <img src="../assets/pict/hero-deswisata.png">
                    </div>
                    <div class="col-8 my-auto">
                        <div class="teks">
                            <p class="card-text"><small class="text-body-secondary">Sep, 05 2023</small></p>
                            <h5 class="card-title">Cholis Hock M</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button type="detail" class="detail-button mt-3">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END KATA MEREKA --}}

{{-- KOMENTAR --}}
<section class="komentar mb-5 pb-3">
    <div class="container swiper">
        <div class="slide-container-komentar">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nur Maliq</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="card  swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nur Maliq</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="card  swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nur Maliq</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="card  swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nur Maliq</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
    </div>
</section>


@include('partials.footer')

    {{-- Option 1: jQuery and Bootstrap Bundle (includes Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    {{-- Script Carousel --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Javascript --}}
<script>

$('.wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
});

</script>


@endsection
