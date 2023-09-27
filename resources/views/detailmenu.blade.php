@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

<!-- HERO -->
    <div class="container">
        <div class="resto-image col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <h1 class="title-image">Rumah Makan Sari Rasa</h1>
        </div>
    </div>

<!-- SEARCH MENU MAKAN -->
    <div class="menu-resto mt-3">
        <h3 class="title-heading">Temukan Makanan Favoritmu di Sini!</h3>
            <section class="search">
                <div class="row search">
                    <div class="col teks-search w-100">
                        <h4>Temukan Makanan Favoritmu di Sini!</h4>
                    </div>
                    <div class="col category-search w-100 mb-3">
                        <select class="form-select">
                            <option selected>Makanan</option>
                            <option value="1">Minuman</option>
                        </select>
                    </div>
                    <div class="col input-search w-100">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Makanan Favoritmu!" style="width: 400px; text-align: left">
                        <button style="border: none; background-color: none">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 16.958L21.5 21.958" stroke="#2B3F6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
    </div>
    
<!-- CARDLIST MENU MAKAN -->



<!-- FOOTER -->

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection