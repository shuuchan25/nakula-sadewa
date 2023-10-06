@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')

<!-- HERO-->
    <div class="container">
        <div class="resto-img col-md-12 relative mb-3">
            <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
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
        <!-- <div class="container">
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
            <div style="clear: both;"></div> -->

            <!-- <div class="container">
            <h3 class="title-resto">Menu Rumah Makan</h3>
                <section class="card-katalog">
                    <div class="row mt-3">
                        <div class="col cardlist">
                            <div class="gambar-card">
                                <img src="../assets/pict/destinasi.jpg" class="card-img-top" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col cardlist">
                            <div class="gambar-card">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                        <div class="col cardlist">
                            <div class="gambar-card">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col cardlist">
                            <div class="gambar-card ">
                                <img src="../assets/pict/destinasi.jpg" alt="gambar rumah makan">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nama Menu</h5>
                                <p class="card-price"> <h5>Rp. 20.000</h5> </p>
                                <div class="btn-group">
                                <input type="input" class="input-button" placeholder="Masukkan jumlah">
                                <button type="add" class=" add-button">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                     -->
        <div class="container mt-3">
            <div class="container-card">
                <div class="card-wrapper d-flex mx-auto justify-content-center" style="flex-wrap: wrap">
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                    <div class="card " style="width: 15rem; margin: 10px">
                        <div class="image-box">
                            <img src="../assets/pict/hero-wisata.jpg">
                        </div>
                        <div class="card-body">
                            <h5 style="font-weight: 600">Nama Rumah Makan</h5>
                        </div>
                        <div class="btn-group pb-3">
                            <input type="input" class="input-button" placeholder="Masukkan jumlah">
                            <button type="add" class=" add-button">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <div class="btn-lihat mt-3 pb-3 d-flex justify-content-center">
                        <button type="lihat" class="lihat-button">Lihat Semua</button>
                    </div>
                </section>
        <div style="clear: both;"></div>

 <!-- FOOTER-->

 @include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@endsection
