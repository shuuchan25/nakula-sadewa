@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')

    <section class="hero">
        <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="">
        <div class="hero-content">
            <div class="my-auto">
                <h2 class="mb-3">Penginapan</h2>
                <span>Temukan Penginapan bla bla bla bla</span>
            </div>
        </div>
    </section>

    <div class="container category-tab mb-5">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">
                <ul class="nav nav-underline justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#"><i class="fa fa-mountain text-warning"></i> Destinasi Wisata</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#"><i class="fas fa-hotel text-danger"></i> Penginapan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid fa-utensils text-warning"></i> Kuliner</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fas fa-car text-danger"></i> Biro Perjalanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid fa-map text-warning"></i> Peta Wisata</a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card shadow rounded-3">
            <div class="card-body">
                 <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <b>Cari Penginapan</b>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control border-end-0" placeholder="Cari penginapan">
                                    <div class="input-group-text bg-transparent"><i class="fa fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <select name="" id="" class="form-control">
                                    <option value="">Kategori Penginapan</option>
                                    <option value="">Hotel</option>
                                    <option value="">Villa</option>
                                    <option value="">Apartement</option>
                                    <option value="">Guesthouse</option>
                                    <option value="">Homestay</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <select name="" id="" class="form-control">
                                    <option value="">Lama Menginap</option>
                                    <option value="">1 Malam</option>
                                    <option value="">2 Malam</option>
                                    <option value="">3 Malam</option>
                                    <option value="">4 Malam</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card rounded-4 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="rounded-4" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <h4 class="fw-bold">Hotel Mawar Asri</h4> 
                                <small><i class="fa fa-map-marker-alt"></i> Desa Joho, Trenggalek</small>
                            </div>
                            <div>
                                <span class="badge bg-secondary rounded-pill px-3 py-2">Hotel</span>
                            </div>
                        </div>
                        <div>
                            <small class="d-block">mulai dari</small>
                            <h5 class="fw-bold mb-3">Rp 50.000/malam</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('user/penginapan/detail') }}" class="btn btn-block w-100 btn-warning shadow-sm fw-bolder">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card rounded-4 mb-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="" class="rounded-4" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-5">
                            <div>
                                <h4 class="fw-bold">Hotel Mawar Asri</h4> 
                                <small><i class="fa fa-map-marker-alt"></i> Desa Joho, Trenggalek</small>
                            </div>
                            <div>
                                <span class="badge bg-secondary rounded-pill px-3 py-2">Hotel</span>
                            </div>
                        </div>
                        <div>
                            <small class="d-block">mulai dari</small>
                            <h5 class="fw-bold mb-3">Rp 50.000/malam</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('user/penginapan/detail') }}" class="btn btn-block w-100 btn-warning shadow-sm fw-bolder">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('user.partials.footer')

@endsection
@section('script-head')
<style>

    .hero {
        position: relative;
        min-height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .hero img {
        height: 200px;
    }

    @media screen and (min-width: 768px){
        .hero img {
            height: 300px;
        }
    }

    @media screen and (min-width: 1400px){
        .hero img {
            height: 400px;
        }
    }

    .hero .hero-content {
        background: rgba(0,0,0,.3);
        position: absolute;
        top: 0;
        left: 0;
        /* transform: translateX(-50%) translateY(-50%); */
        text-align: center;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        color: #fff;
    }
    
    .category-tab .card {
        width: 100%;
    }

    @media screen and (min-width: 768px){
        .category-tab .card {
            width: 90%;
            margin: 0 auto;
        }
    }

    .category-tab .nav {
        gap: 2rem;
    }

    .category-tab .nav-link {
        color: #000 !important;
        display: flex;
        align-items: center;
        gap: .5rem;
        font-weight: 500;
    }
    
    .category-tab .nav-link:hover,
    .category-tab .nav-link:focus,
    .category-tab .nav-link.active {
        border-bottom-color: var(--bs-danger) !important;
    }

</style>
@endsection
