@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
@include('user.partials.sidebar')
        
        <!--HERO-->
        <section id="hero-section">
            <div class="container">
            <div class="row ">
            <h1 class="display-4 text-white">Kuliner</h1>
            </div>
            </div>
        </section>
        
        <!--MENU BAR-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 menubar">
                    <div class="row">
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-deswisata.png" alt="user">
                            <h4>Destinasi Wisata</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-hotel.png" alt="user">
                            <h4>Penginapan</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-kuliner.png" alt="user">
                            <h4>Kuliner</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-travel.png" alt="user">
                            <h4>Biro Perjalanan</h4>
                        </div>
                        <div class="col-lg menu">
                            <img src="../assets/icons/icon-petawisata.png" alt="user">
                            <h4>Peta Wisata</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Section-->
        <div class='container'>
            <div class="container" style="margin: 0px 80px 0px 80px;">
            <div class="card">
                <!-- Product image-->
                    <img src="img/1.png"/>
                <!-- Product details-->
                    <div class='card-body'>
                    <div class='card-text'>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                    like Aldus PageMaker including versions of Lorem Ipsum.In porttitor porta mi pharetra tempor.</p>   
                    </div>
                <!-- Product actions-->
                    <button>More...</button>
            </div>
        </div>     

            <div class="card">
                <!-- Product image-->
                    <img src="img/2.png"/>
                <!-- Product details-->
                    <div class='card-body'>
                    <div class='card-text'>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                    like Aldus PageMaker including versions of Lorem Ipsum.In porttitor porta mi pharetra tempor.</p>   
                    </div>
                <!-- Product actions-->
                    <button>More...</button>
            </div>
        </div>
    </div>   
        </div>
                <div style="clear: both;"></div>

        <!-- Footer-->
        {{-- END KALENDER EVENT --}}

@include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
  
