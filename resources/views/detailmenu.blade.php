@extends('partials.master')

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
        <section class="search-menu">
            <div class="container">
                <div class="row width-100%">
                    <div class="col-3 d-flex justify-content-center">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori Destinasi Wisata</button>
                        <ul class="dropdown-menu" style="width: 250px; text-align: center;">
                        <li><a class="dropdown-item" href="#">Makanan</a></li>
                        <li><a class="dropdown-item" href="#">Minuman</a></li>
                        <li><a class="dropdown-item" href="#">Snack</a></li>
                        <li><a class="dropdown-item" href="#">Paket</a></li>
                        </ul>
                    </div>
                    <div class="col-4 d-flex justify-content-flex-start">
                        <input type="text" placeholder="Cari Makanan" class="form-control" aria-label="Text input" aria-describedby="basic-addon2">
                        {{-- <span class="input-group-text" id="basic-addon2"><i class="bi bi-search text-dark"></i></span> --}}

                        {{-- <form class="cari">
                        <input type="text" class="form" placeholder="Cari Makanan">
                        button type="submit" class="tombol"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>

<!-- CARDLIST MENU MAKAN --> 


<!-- FOOTER -->

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection