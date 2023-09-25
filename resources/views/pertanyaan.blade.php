@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')


<!--HERO-->
<div class="hero-image p-5 text-center bg-image" style="background-image: url(../assets/pict/destinasi.jpg);">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="mb-3">Destinasi Wisata</h1>
        </div>
</div>

{{-- CONTENT --}}
<section class="pertanyaan">
    <div class="container daftar-pertanyaan">
        <div class="container mt-5 mb-3">
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari pertanyaan Anda" aria-label="Search">
            <button class="small-button" type="submit">Cari</button>
            </form>
        </div>
        <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Bagaimana cara mencari harga makanan?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Bagaimana cara mencari harga penginapan?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Bagaimana cara menghubungi biro perjalanan paket wisata?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- END CONTENT --}}

@include('partials.footer')
@endsection




