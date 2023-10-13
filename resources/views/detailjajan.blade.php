@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="detailoleh" style="flex: 1">

    <section class="detailproduk">
        {{-- BREADCRUMB --}}
        <div class="container">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Kuliner</a></li>
                <li class="breadcrumb-item"><a style="text-decoration:none" href="../rumahmakan">Rumah Makan</a></li>
                <li class="breadcrumb-item" aria-current="page">Detail</li>
                </ul>

                <!-- HERO-->
                <div class="resto-img col-md-12 relative mb-3">
                    <img src="../assets/pict/hero-wisata.jpg" alt="Rumah Makan"/>
                    <div class="content">
                        <div class="button-back">
                            <button onclick="window.location='rumahmakan'" class="btn-back">
                                <svg width="20" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <div class=>
                            <h1 class="heading">Rumah Makan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DESCRIPTION -->
            <section class="deskripsi mt-5 pb-5 pt-3" style="position: relative; height: 50%; width: 100vw;">
                <div class="container pusatoleh">
                    <div class="row mb-5">
                        <div class="col-8 ms-auto">
                            <h5 class="card-title">Deskripsi</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus porttitor eget arcu libero tellus sapien eros, ut. Curabitur sem aliquet dolor eu nibh cursus urna, urna. Arcu, lacinia umst ut</p>
                        </div>
                        <div class="col-4 mx-auto" style="padding-left: 20px">
                            <h5 class="card-title">Harga</h5>
                            <p class="card-text">Rp 20.000</p>
                        </div>
                    </div>
                </div>
            </section>
    </section>

<!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
