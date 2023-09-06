@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

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
          <div class="carousel-item">
            <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-2">
          </div>
          <div class="carousel-item">
            <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-2">
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
                        <a href=""><img src="../assets/icons/mountain.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Destinasi Wisata</p>
                </div>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/hotel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Penginapan</p>
                </div>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/kuliner.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Kuliner</p>
                </div>
            </div>
            <div class="col menu-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/travel.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Biro Perjalanan</p>
                </div>
            </div>
            <div class="col menu-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href=""><img src="../assets/icons/route.svg" alt="" style="width: 48px; height: 42px"></a>
                    </button>
                    <p>Peta Wisata</p>
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
                <img src="../assets/pict/hero-homepage.png" alt="">
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
        <div class="row mb-5 mt-2 video-title">
            <h3>Video Profile</h3>
        </div>
        <div class="row mb-5">
            <video  controls="controls" preload="metadata">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4#t=0.1" type="video/mp4">
            </video>
        </div>
    </div>
</section>
{{-- END VIDEO PROFILE --}}

{{-- KALENDER EVENT --}}
<section class="kalendar  mb-5 pb-5">
    <div class="container swiper">
        <div class="row mb-5 mt-2 kalender-title">
            <h3>Kalender Event</h3>
        </div>
        <div class="slide-content">
            <div class="col d-flex card-wrapper w-100 justify-content-center swiper-wrapper">
                <div class="card swiper-slide">
                    <img src="../assets/pict/hero-deswisata.png">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p class="lokasi">Lokasi</p>
                        <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                        <button type="detail" class="detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <img src="../assets/pict/hero-deswisata.png">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p class="lokasi">Lokasi</p>
                        <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                        <button type="detail" class="detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <img src="../assets/pict/hero-deswisata.png">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p class="lokasi">Lokasi</p>
                        <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                        <button type="detail" class="detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <img src="../assets/pict/hero-deswisata.png">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p class="lokasi">Lokasi</p>
                        <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                        <button type="detail" class="detail-button">Lihat Detail</button>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <img src="../assets/pict/hero-deswisata.png">
                    <div class="card-body">
                        <h5>Card Title</h5>
                        <p class="lokasi">Lokasi</p>
                        <p class="date" style="font-weight: bold; font-size: 11px">dd/mm/yyyy</p>
                        <button type="detail" class="detail-button">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
{{-- END KALENDER EVENT --}}

{{-- BERITA TERKINI --}}
<section class="berita mt-5 mb-5 pt-5 pb-3">
    <div class="container berita">
        <div class="berita-title">
            <h3>Berita Terkini</h3>
        </div>
        <div class="berita-wrapper mb-5 pt-5 ">
            <div class="card text-bg-dark">
                <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                <div class="card-img-overlay berita-content">
                    <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                    <p class="card-text"><small>05 September 2023</small></p>
                </div>
            </div>
            <div class="card text-bg-dark">
                <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                <div class="card-img-overlay berita-content">
                    <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                    <p class="card-text"><small>05 September 2023</small></p>
                </div>
            </div>
            <div class="card text-bg-dark">
                <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                <div class="card-img-overlay berita-content">
                    <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                    <p class="card-text"><small>05 September 2023</small></p>
                </div>
            </div>
            <div class="card text-bg-dark">
                <img src="../assets/pict/hero-homepage.png" class="card-img w-100">
                <div class="card-img-overlay berita-content">
                    <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                    <p class="card-text"><small>05 September 2023</small></p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END BERITA TERKINI --}}

{{-- KATA MEREKA --}}
<section class="kata mt-5 mb-5 pt-5 pb-3">
    <div class="container kata">
        <div class="berita-title">
            <h3>Kata Mereka</h3>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <div class="row d-flex justify-content-center my-auto">
                    <div class="col-4 d-flex align-items-center">
                        <img src="../assets/pict/hero-homepage.png" alt="logo bem" class="img-fluid my-auto mx-auto">
                    </div>
                    <div class="col-8">
                        <div class="teks">
                            <small>Februari 27, 2023</small>
                            <h2>Cholis Hock Mudjainab</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusamus doloribus dolorum nostrum vitae, aut obcaecati est autem asperiores at quaerat inventore exercitationem ad alias facere. Perferendis corporis commodi in et libero dolorem nemo harum quae, nam molestiae suscipit impedit repudiandae vitae maxime. Ea atque error, odio aut neque quas?</p>
                            <button type="submit" class="primary-button mt-3">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- END KATA MEREKA --}}



@include('user.partials.footer')

    {{-- Option 1: jQuery and Bootstrap Bundle (includes Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    {{-- Script Carousel --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Javascript --}}
<script>
    $('.berita-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        variableWidth: true
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

});
</script>


@endsection
