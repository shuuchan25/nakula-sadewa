@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            {{-- BREADCRUMB --}}
            <div class="container">
                <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="/shops">Pusat Oleh-Oleh</a></li>
                        <li class="breadcrumb-item"><a style="text-decoration:none"
                                href="/shops/{{ $shop->slug }}">{{ $shop->name }}</a></li>
                        <li class="breadcrumb-item" aria-current="page">Menu</li>
                    </ul>

                    <!-- HERO-->
                    <div class="detail row">
                        <div class="banner col-md-12 position-relative mb-3">
                            <img src="{{ Storage::url($shop->image) }}" alt="Pusat Oleh-Oleh" />
                            <a href="/shops" class="btn btn-back-balik">
                                <i class="fa fa-arrow-left"></i></a>
                            <div class="content">
                                <div class="heading">
                                    <h1>{{ $shop->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEARCH  -->
            <div class="container search-all mt-3">
                <form action="/shops/{{ $shop->slug }}/gifts" method="GET">
                    <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                        <div class="searchinput" style="width: 100%">
                            <button>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input name="search" class="form-control me-2" type="search"
                                placeholder="Cari Produk Oleh-Oleh" aria-label="Search" value="{{ request('search') }}">
                        </div>
                        {{-- <div class="sortinput justify-content-center">
                            <select name="menu_category_id" class="form-select" aria-label="Default select example">
                                <option value="" selected>Kategori Menu</option>
                                @foreach ($menuCategories as $menuCategory)
                                    <option value="{{ $menuCategory->id }}" {{ request('menu_category_id') == $menuCategory->id ? 'selected' : '' }}>{{ $menuCategory->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="buttonsearch">
                            <button class="small-button" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- CARDLIST -->
            <div class="restaurant container mt-3 mb-5">
                @if ($gifts->count() > 0)
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-3 mt-4">
                        @foreach ($gifts as $gift)
                            <div class="col">
                                <div class="card-card">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($gift->image) }}" class="card-img-top" alt="gambar">
                                    </div>
                                    <div class="card-body produk">
                                        <div class="judul">
                                            <h5>{{ $gift->name }}</h5>
                                        </div>
                                        <div class="description">
                                            <p class="teks-produk">{!! $gift->description !!}</p>
                                        </div>
                                        <div class="harga">
                                            <h6>Rp{{ number_format($gift->price, 0, ',', '.') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data yang tersedia.</p>
                @endif

                {{-- PAGINATION --}}
                <div class="pagination d-flex justify-content-center pt-4">
                    {{ $gifts->links('partials.custom_pagination') }}
                </div>
                {{-- END PAGINATION --}}
            </div>


            <!-- FOOTER -->
        </div>
        @include('partials.footer')
    </div>
@endsection

@section('script-body')
    <script>
        // Ambil semua elemen kartu produk
        const cardkuliner = document.querySelectorAll(".card-3");

        // Loop melalui setiap kartu produk dan tambahkan fungsionalitas
        cardkuliner.forEach((document) => {
            const plus = document.querySelector(".plus");
            const minus = document.querySelector(".minus");
            const num = document.querySelector(".num");

            let a = 1; // Jumlah awal produk

            plus.addEventListener("click", () => {
                a++;
                num.textContent = a;
            });

            minus.addEventListener("click", () => {
                if (a > 1) {
                    a--;
                    num.textContent = a;
                }
            });
        });
    </script>
@endsection
