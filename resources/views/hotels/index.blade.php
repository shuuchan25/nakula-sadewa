@extends('partials.master')
@section('content')
<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
@include('sweetalert::alert')
<div class="bd-content">

    {{-- hero --}}
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

    <div class="bg-section pt-4 pb-5">
        {{-- SEARCH BAR PENGINAPAN --}}
        <div class="container card-paket mb-5">
            {{-- pills kategori --}}
            <div class="pills-kategori p-0 pt-4">
                <ul class="nav nav-pills mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Hotel</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Homestay</a>
                    </li>
                </ul>
                {{-- tab content pills --}}
                <div class="tab-content" id="myTabContent">
                    <div class="card-body search-all">
                        <form action="/hotels" method="GET">
                            @csrf
                            {{-- <div class="row align-items-center">
                                <div class="searchbar d-flex w-100 justify-content-center">
                                    <div class="searchinput" style="width: 80%">
                                        <button>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                        <input name="search" class="form-control me-2" type="search" placeholder="Cari Penginapan" aria-label="Search" value="{{ request('search') }}">
                                    </div>
                                    <div class="sortinput justify-content-center">
                                        <select name="category_id" class="form-select" aria-label="Default select example">
                                            <option value="">Kategori</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="buttonsearch">
                                        <button class="small-button" type="submit">Cari</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="container search-all">
                                <div class="row align-items-center">
                                    <div class="searchbar d-flex w-100 justify-content-center">
                                        <div class="searchinput" style="width: 100%">
                                            <button>
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </button>
                                            <input name="search" class="form-control me-2" type="search" placeholder="Cari Penginapan" aria-label="Search" value="{{ request('search') }}">
                                        </div>
                                        <div class="buttonsearch">
                                            <button class="small-button" type="submit">Cari</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

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
                                                <div class="card-body pt-2">
                                                    <h5 class="card-title">{{ $hotel->name }}</h5>
                                                    <p class="card-text"><i class="fa fa-map-marker-alt"></i>&nbsp;{{ $hotel->address }}</p>

                                                    <a href="/hotels/{{ $hotel->slug }}"
                                                        class="detail-button w-100 d-block text-center text-decoration-none">Lihat Detail</a>
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
                        <div class="pagination d-flex justify-content-center pt-4">
                            {{ $hotels->links('partials.custom_pagination') }}
                        </div>
                    </div>
                </div>
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
