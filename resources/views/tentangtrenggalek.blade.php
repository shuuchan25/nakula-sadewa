@extends('partials.master')
@section('content')


<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

{{-- Swiper --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

<!-- Slick JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="bd-content">
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

    {{-- ABOUT --}}
    <section class="about  mt-5 mb-5 pb-5" id="about">
        <div class="container">
            <div class="tentang-trenggalek">
                <div class="about-teks pt-3 pb-2">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- END ABOUT --}}
</div>
@include('partials.footer')
</div>
@endsection
