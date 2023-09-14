@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')

<!-- HERO-->
    <div class="container">
        <div class="resto-image col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
            <h1 class="heading">Rumah Makan Sari Rasa</h1>
        </div>
    </div>



<!-- FOOTER-->

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection