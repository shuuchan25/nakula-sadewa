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
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="/shops">Kuliner</a></li>
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="/shops">Rumah Makan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Detail</li>
                    </ul>

                <!-- HERO-->
                    <div class="resto-img col-md-12 relative mb-3">
                        <img src="{{ Storage::url($shop->image) }}" alt="Rumah Makan" />
                        <div class="content">
                            <div class="button-back">
                                <button onclick="window.location='/shops/{{ $shop->slug }}'" class="btn-back">
                                    <svg width="20" height="25" viewBox="0 0 36 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763"
                                            stroke="black" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class=>
                                <h1 class="heading">{{ $shop->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEARCH MENU MAKAN -->
            <div class="container mt-3">
                <form action="/shops/{{ $shop->slug }}/gifts" method="GET">
                    <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                        <div class="searchinput" style="width: 70%">
                            <input name="search" class="form-control me-2" type="search" placeholder="Cari Menu Makan" aria-label="Search" value="{{ request('search') }}">
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

            <!-- CARDLIST MENU MAKAN -->
            <div class="restaurant container mt-3">
                @if($gifts->count() > 0)
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                        @foreach($gifts as $gift)
                            <div class="col">
                                <div class="card-3">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($gift->image) }}" class="card-img-top" alt="gambar">
                                    </div>
                                    <div class="card-body">
                                        <div class="judul-kuliner">
                                            <h5>{{ $gift->name }}</h5>
                                        </div>
                                        <div class="deskripsi-kuliner">
                                            <p>{!! $gift->description !!}</p>
                                        </div>
                                        <div class="harga-kuliner">
                                            <p>Rp{{ number_format($gift->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="group-btn-rm d-flex mx-auto">
                                        <div class="input-btn">
                                            <span class="minus">-</span>
                                            <span class="num">1</span>
                                            <span class="plus">+</span>
                                        </div>
                                        <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card-3">
                                <div class="content-img">
                                    <img src="{{ asset('assets/pict/hero-wisata.jpg') }}" class="card-img-top" alt="gambar">
                                </div>
                                <div class="card-body">
                                    <div class="judul-kuliner">
                                        <h5>Nama Menu</h5>
                                    </div>
                                    <div class="deskripsi-kuliner">
                                        <p>Deskripsi Menu</p>
                                    </div>
                                    <div class="harga-kuliner">
                                        <p>Harga Menu</p>
                                    </div>
                                </div>
                                <div class="group-btn-rm d-flex mx-auto">
                                    <div class="input-btn">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div>
                                    <button onclick="window.location='detailrumahmakan'" class="button-tambah">Tambahkan</button>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <div class="btn-lihat mt-3 pb-5 d-flex justify-content-center">
                        <button onclick="window.location='detailmenu'" class="lihat-button">Lihat Semua</button>
                    </div>
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data yang tersedia.</p>
                @endif
                </div>

            </div>

        </div>
        <!-- FOOTER -->
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