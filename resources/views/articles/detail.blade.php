@extends('partials.master')
@section('content')


<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

<div class="bd-content">
    {{-- HERO SECTION --}}

    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Kuliner</a></li>
        <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Rumah Makan</a></li>
        <li class="breadcrumb-item" aria-current="page">Detail</li>
        </ul>

<!-- HERO-->
            <div class="resto-img col-md-12 relative mb-3">
                <img src="{{ Storage::url($culinary->image) }}" alt="Rumah Makan"/>
                <div class="content">
                    <div class="button-back">
                        <button onclick="window.location='/culinaries'" class="btn-back">
                            <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class=>
                        <h1 class="heading">{{ $culinary->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
        <div class="hero-content">
            <div class="my-auto d-flex justify-content-center">
                <h1>Berita Terkini</h1>
            </div>
        </div>
    </section> --}}
    {{-- END HERO SECTION --}}

    {{-- CONTENT --}}
    <section class="newest mt-5 mb-5 pb-5">
        <div class="container">
            <div class="berita-terkini">
                <div class="author">
                    <h6 style="font-size: 13px" >By Admin</h6>
                    <small style="font-size: 12px" >7 Agustus 2023</small>
                </div>
                <div class="judul-berita mt-3">
                    <h3 style="font-weight: 600">Red Island Gandrung Surf Sukses Ramaikan Pantai Pulau Mera dan Wisata Alam Lainnya</h3>
                </div>
                <div class="berita-teks pt-3 pb-2">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem laboriosam quasi expedita voluptatibus enim eos perspiciatis aperiam voluptate qui rerum, facere aut, repellat distinctio quae numquam repellendus eaque, veniam perferendis id soluta. Aliquam possimus, atque dolorem sed quod dolorum repellat vero libero laudantium cupiditate, itaque optio totam error minus dicta odit sit sunt tempora architecto maxime quaerat ad, ea nobis exercitationem! Autem, consequuntur laborum modi dolorem amet impedit nam omnis.</p>
                </div>
            </div>
        </div>
    </section>
</div>
{{-- END CONTENT --}}
@include('partials.footer')

</div>

@endsection
