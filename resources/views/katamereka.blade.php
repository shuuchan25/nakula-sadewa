@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')


<!-- Slick JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


{{-- HERO SECTION --}}
<section class="hero-image">
    <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
    <div class="hero-content">
        <div class="my-auto d-flex justify-content-center">
            <h1>Kata Mereka</h1>
        </div>
    </div>
</section>
{{-- END HERO SECTION --}}

{{-- ABOUT --}}
<section class="cerita mt-5 mb-5 pb-5">
    <div class="container">
        <div class="cerita-wisatawan">
            <div class="author">
                <h6>By Admin</h6>
                <small>7 Agustus 2023</small>
            </div>
            <div class="cerita-mereka mt-3">
                <h3 style="font-weight: 600">Red Island Gandrung Surf Sukses Ramaikan Pantai Pulau Mera dan Wisata Alam Lainnya</h3>
            </div>
            <div class="cerita-mereka pt-3 pb-2">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
            </div>
        </div>
    </div>
</section>
{{-- END ABOUT --}}


@include('partials.footer')

@endsection
