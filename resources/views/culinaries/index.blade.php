@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
    <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero rumah makan">
        <div class="hero-content">
            <div class="my-auto d-flex justify-content-center">
                <h1>Kuliner</h1>
            </div>
        </div>
    </section>

        <!--MENU BAR-->
        @include('partials.menubar')
        {{-- end MENUBAR --}}

        <!--SEARCH-->
        <div class="bg-section mt-3 pb-5">
            {{-- pills kategori --}}
            <div class="pills-kategori p-0 pt-4">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Restoran & Cafe</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Makanan Tradisional</a>
                    </li>
                </ul>

                {{-- tab content pills --}}
                <div class="tab-content" id="myTabContent">
                    <form action="/culinaries" method="GET">
                        @csrf
                        {{-- <div class="container search-all pt-4">
                            <div class="searchbar d-flex mt-3 w-100 justify-content-center ">
                                <div class="searchinput" style="width: 100%">
                                    <button>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                    <input name="search" class="form-control me-2" type="search" placeholder="Cari Rumah Makan" aria-label="Search" value="{{ request('search') }}">
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
                            <div class="tab-pane fade show active" role="tabpanel">

                                <div class="searchbar d-flex mt-5 w-100 justify-content-center">
                                    <div class="searchinput" style="width: 100%">
                                        <button>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                        <input name="search" class="form-control me-2" type="search" placeholder="Cari Rumah Makan" aria-label="Search" value="{{ request('search') }}">
                                    </div>
                                    <div class="buttonsearch">
                                        <button class="small-button" type="submit">Cari</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- end container search --}}
                    </form>

                    <!-- CARD RESTAURANT-->
                    <div class="restaurant container">
                        @if($culinaries->count() > 0)
                            <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-4 ">
                                @foreach($culinaries as $culinary)
                                    <div class="col">
                                        <div class="card-2">
                                            <div class="content-img">
                                                <img src="{{ Storage::url($culinary->image) }}" class="card-img-top" alt="gambar">
                                            </div>
                                            <div class="card-body">
                                                <h5>{{ $culinary->name }}</h5>
                                            </div>
                                            <div class="card-btn d-flex justify-content-center">
                                                <button onclick="window.location='/culinaries/{{ $culinary->slug }}'" class="detail-button">Lihat Detail</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="pt-5">
                                <p>Belum ada data yang tersedia.</p>
                            </div>
                        @endif {{-- end CARD --}}
                    </div> {{-- end container restaurant --}}
                </div> {{-- end tab content pills --}}
            </div> {{-- end piils kategori --}}
        </div> {{-- end BG SECTION --}}


<!-- FOOTER-->
</div>
@include('partials.footer')
</div>
@endsection
