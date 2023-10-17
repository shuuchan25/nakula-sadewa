@extends('partials.master')
@section('content')


<div class="page-content">
    {{-- Get partials --}}
    @include('partials.header')
    <div class="bd-content">
    <section class="hero-image">
        <img src="{{ asset('assets/pict/hotel.jpeg') }}" alt="Hero Akomodasi">
        <div class="hero-content">
            <div class="my-auto">
                <h1 class="mb-3 position-static">Akomodasi</h1>
                <span class="text-white">Temukan kebutuhan akomodasi anda</span>
            </div>
        </div>
    </section>

   {{-- MENUBAR --}}
   @include('partials.menubar')
   {{-- end MENUBAR --}}

    <div class="bg-rounded-secondary py-5">
        {{-- SEARCH BAR PENGINAPAN --}}
        <div class="container card-paket mb-5">
            <div class="">
                <div class="card-body p-3">
                    <form action="/hotels" method="GET">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control border-end-0" value="{{ request('search') }}"
                                        placeholder="Cari Akomodasi atau Lokasi">
                                        <button type="submit" class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"
                                                fill="none">
                                                <ellipse cx="6.79167" cy="7.29753" rx="5.66667" ry="5.66667" stroke="black"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.6875 11.5175L14.2292 15.0592" stroke="black" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                                </option>
                                            @endforeach
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
                    </form>
                </div>
            </div>
        </div>

        {{-- CARD LIST PENGINAPAN --}}
        <div class="container mb-5">
            <div class="row">
                @if ($hotels->count() > 0)
                    @foreach ($hotels as $hotel)
                        <div class="col-md-3">

                            <div class="shadow-sm cardlist bg-white">
                                <div class="gambar-card">
                                    <img src="{{ Storage::url($hotel->image) }}" class="card-img-top"
                                        alt="gambar rumah makan">
                                    <span class="badge-overlay badge bg-secondary">{{ optional($hotel->category)->name }}</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $hotel->name }}</h5>
                                    <p class="card-text"><i class="fa fa-map-marker-alt"></i>&nbsp;{{ $hotel->address }}</p>

                                    <a href="/hotels/{{ $hotel->slug }}"
                                        class="detail-button w-100 d-block text-center">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="pt-5">
                        <p>Belum ada data yang tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    </div>
    @include('partials.footer')
</div>
@endsection
@section('script-head')
    <style>
        .cardlist {
            border-radius: 8px;
        }

        .bg-rounded-secondary {
            background: #F6E7D8;
            border-radius: 46px 46px 0 0;
        }

        .badge-overlay {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .hero {
            /* position: relative;
                min-height: 100px;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden; */
            background-blend-mode: darken;
            background-size: cover;
            height: 300px;
            position: relative;
            padding: 0;
        }

        .hero img {
            height: 250px;
            width: 100%;
        }

        @media screen and (min-width: 768px) {
            .hero img {
                height: 300px;
            }
        }

        @media screen and (min-width: 1400px) {
            .hero img {
                height: 400px;
            }
        }

        .hero .hero-content {
            background: rgba(0, 0, 0, .3);
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
            margin-top: 58px;
        }

        .category-tab {
            margin-top: -30px;
        }

        .category-tab .card {
            width: 100%;
        }

        @media screen and (min-width: 768px) {
            .category-tab .card {
                width: 90%;
                margin: 0 auto;
            }
        }

        .category-tab .nav {
            gap: 2rem;
        }

        .category-tab .nav-link {
            color: #000;
            display: flex;
            align-items: center;
            gap: .5rem;
            padding: .5rem .8rem;
            border-radius: 10px;
            font-weight: 400 !important;
        }

        .category-tab .nav-link:hover,
        .category-tab .nav-link:focus,
        .category-tab .nav-link.active {
            border: 0;
            background: #8F010A;
            color: #fff;
        }

        .category-tab .nav-link:hover i,
        .category-tab .nav-link:focus i,
        .category-tab .nav-link.active i {
            color: #fff !important;
        }
    </style>
@endsection
