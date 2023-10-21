@extends('partials.master')
{{-- @dd($attractionsByCategory) --}}
{{-- @dd($categories) --}}
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
<section class="atraksi">
    <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero destinasi">
        <div class="hero-content">
            <div class="my-auto d-flex justify-content-center">
                <h1>Atraksi</h1>
            </div>
        </div>
    </section>

    {{-- MENUBAR --}}
    @include('partials.menubar')
    {{-- end MENUBAR --}}

    {{-- MENU KATEGORI --}}
    <div class="wisata mt-5">
        <div class="tabs rounded">
            <ul class="nav nav-tabs border-0 justify-content-center gap-2">
                @php
                    $activeCategory = request('category_id', $categories->first()->id);
                @endphp

                @foreach($categories as $category)
                    <li class="nav-item">
                        <form action="/attractions" method="GET">
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            @php
                                if (request('category_id') == $category->id) {
                                    $activeButtonClicked = true;
                                }
                            @endphp
                            <button type="submit" class="nav-link {{ ($activeCategory == $category->id) ? 'active' : '' }} link" data-bs-toggle="tab" href="#{{$category->name}}"><h4>{{ $category->name }}</h4></button>
                        </form>
                    </li>
                @endforeach
            </ul>


    <!-- Tab panes  -->
            <div class="bg-section pt-4 pb-5">
                <div class="tab-pane active" id="alam">
                    {{-- pills kategori --}}
                    <div class="pills-kategori p-0">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Bahari</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ekowisata</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="pill" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Petualangan</a>
                            </li>
                        </ul>
                        {{-- tab content pills --}}
                        <div class="tab-content" id="myTabContent">
                            <form action="/attractions" method="GET" id="search-form" class="w-100">
                                @csrf
                                <div class="container search-all">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <!-- Isi Tab KTEGORI 1 di sini -->
                                        {{-- search --}}
                                        <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                                            <div class="searchinput" style="width: 100%">
                                                <button>
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </button>
                                                <input name="search" class="form-control me-2" type="search" placeholder="Cari Atraksi" aria-label="Search" value="{{ request('search') }}">
                                            </div>
                                            <div class="buttonsearch">
                                                <button class="small-button" type="submit">Cari</button>
                                            </div>
                                        </div>
                                        {{-- end search --}}
                                    </div>
                                </div> {{-- end container search --}}
                            </form>

                            {{-- CARD --}}
                            @if($attractions->count() > 0)
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-4 g-3 mt-3">
                                        @foreach ($attractions as $attraction)
                                            <div class="col">
                                                <div class="card-2">
                                                    <div class="content-img">
                                                        <img src="{{ asset('storage/' . $attraction->image) }}" class="card-img-top" alt="gambar">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5>{{ $attraction->name }}</h5>
                                                    </div>
                                                    <div class="card-btn d-flex justify-content-center">
                                                        <button onclick="window.location='/attractions/{{ $attraction->slug }}'" class="detail-button">Lihat Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <p class="d-flex justify-content-center align-item-center mt-5">Belum ada yang tersedia.</p>
                            @endif {{-- end CARD --}}

                            {{-- kategori kedua --}}
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Isi Tab KATEGORI 2 di sini -->
                                <p>nada</p>
                            </div>

                            {{-- kategori ketiga --}}
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <!-- Isi Tab KATEGORI 3 di sini -->
                            </div>
                        </div> {{-- end tab content pills --}}
                    </div> {{-- end piils kategori --}}
                </div> {{--end tab pane --}}
            </div>{{--end BG Section --}}
        </div>{{--end TABS ROUNDED --}}
    </div>{{--end CLASS WISATA --}}
</section>

</div>
@include('partials.footer')
</div>
@endsection











