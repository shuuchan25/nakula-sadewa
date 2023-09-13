@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')

<!-- HERO-->
    <div class="container">
        <div class="banner col-md-12 relative mb-3">
                <img src="../assets/pict/hero-wisata.jpg" alt="Desa Wisata"/>
                <h1 class="heading">Rumah Makan Sari Rasa</h1>
        </div>
    </div>

<!-- DESCRIPTION RESTAURANT-->
    <section class="deskripsi mt-5 mb-5 pt-3 pb-3">
        <div class="container resto">
            <div class="row">
                <div class="col ms-auto">
                    <h5 class="card-title">Lokasi</h5>
                    <p class="card-text">Pandean, Dongko, Kabupaten Trenggalek, Jawa Timur</p>
                    <h5 class="card-title">Waktu Operasional</h5>
                    <p class="card-text">01.00-23.59</p>
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">0812345678910</p>
                </div>
                <div class="col">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
                </div>
            </div>
        </div>
    </section>

<!-- CARD LIST RESTAURANT-->
        <div class="container">
            <h3 class="title-resto">Menu Rumah Makan</h3>
                <section class="cardkuliner mt-3">
                    <div class="row w-100% py-2">
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi qui doloribus nostrum saepe eos ipsum doloremque reprehenderit, obcaecati quis eum, eius aliquid nisi iure molestiae dolores odit fuga omnis inventore!</p>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card cardlist mb-3" style="width: 555px; height: 245px; border-radius: 8px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../assets/pict/hero-wisata.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body">
                                <h5 class="card-title">Kuliner</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate distinctio voluptas quos illum maxime explicabo cum voluptatum quibusdam recusandae impedit praesentium expedita nam odit animi mollitia est aperiam, perspiciatis id.</p>
                                <p class="card-price"> <h5>Rp. 16.000</h> </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
<<<<<<< HEAD
        
=======

>>>>>>> 4ffd6761b649dbfa6e4a79500b13cb1ac541c620
            <div style="clear: both;"></div>

 <!-- FOOTER-->

 @include('user.partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 4ffd6761b649dbfa6e4a79500b13cb1ac541c620
