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
        <div class="hero">
            <div class="hero-item">
                <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-1">
            </div>
        </div>
    <div class="carousel-caption">
        <h5>TENTANG TRENGGALEK</h5>
        <h5>SOUTHERN PARADISE</h5>
        <br>
        <p>Some representative placeholder content for the first slide.</p>
    </div>
</section>
{{-- END HERO SECTION --}}


{{-- KATALOG MENU --}}
<section class="katalog mt-5 mb-5 pt-5 pb-5" id="katalog">
    <div class="container">
        <div class="row menu w-100">
            .
        </div>
    </div>
</section>
{{-- END KATALOG MENU --}}

{{-- ABOUT --}}
<section class="about  mt-5 mb-5 pb-5" id="about">
    <div class="container">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-4 d-flex align-items-center about-img">
                    <img src="../assets/pict/hero-homepage.png" alt="logo bem" class="img-fluid my-auto mx-auto">
                </div>
                <div class="col-7">
                    <div class="about-teks pt-3 pb-2">
                        <h3>Tentang</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
                    </div>
                </div>
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
        <div class="video row mb-5" style="object-fit: cover">
            <iframe src="https://www.youtube.com/embed/UKlLLKDUsdQ?si=NsjFztcxfKjg1pyu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                            <img src="../assets/pict/hero-wisata.jpg">
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
                            <img src="../assets/pict/hero-deswisata.png" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-wisata.jpg" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-wisata.jpg" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-wisata.jpg" class="card-img w-100">
                            <div class="card-img-overlay berita-content">
                                <a href=""><h5 class="card-title" style="margin-top: 120px">Card title</h5></a>
                                <p class="card-text"><small>05 September 2023</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card  swiper-slide">
                        <div class="card text-bg-dark">
                            <img src="../assets/pict/hero-wisata.jpg" class="card-img w-100">
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
