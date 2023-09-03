@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')

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
            <div class="carousel-caption">
                <h5>TRENGGALEK</h5>
                <h5>SOUTHERN PARADISE</h5>
                <br>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-2">
            <div class="carousel-caption">
                <h5>TRENGGALEK</h5>
                <h5>SOUTHERN PARADISE</h5>
                <br>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/pict/hero-homepage.png" class="d-block w-100" alt="hero-2">
            <div class="carousel-caption">
                <h5>TRENGGALEK</h5>
                <h5>SOUTHERN PARADISE</h5>
                <br>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
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
</section>
{{-- END HERO SECTION --}}


{{-- KATALOG MENU --}}
<section class="katalog mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row menu">
                <div class="col menu">
                    <img src="../assets/icons/destinasi-wisata-icon.svg" alt="" style="margin: auto">
                    <p>Destinasi Wisata</p>
                </div>
                <div class="col menu">
                    <img src="../assets/icons/penginapan-icon.svg" alt="">
                    <p>Penginapan</p>
                </div>
                <div class="col menu">
                    <img src="../assets/icons/kuliner-icon.svg" alt="">
                    <p>Kuliner</p>
                </div>
                <div class="col menu">
                    <img src="../assets/icons/biro-perjalanan-icon.svg" alt="">
                    <p>Biro Perjalanan</p>
                </div>
                <div class="col menu">
                    <img src="../assets/icons/peta-wisata-icon.svg" alt="">
                    <p>Peta Wisata</p>
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
            <video width="1120" controls="controls" preload="metadata">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4#t=0.1" type="video/mp4">
            </video>
        </div>
    </div>
</section>
{{-- END VIDEO PROFILE --}}

{{-- KALENDER EVENT --}}
<section class="kalendar mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row mb-5 mt-2 kalender-title">
            <h3>Kalender Event</h3>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    
                </div>
            </div>
        </div>
    </div>

</section>
{{-- END KALENDER EVENT --}}

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
