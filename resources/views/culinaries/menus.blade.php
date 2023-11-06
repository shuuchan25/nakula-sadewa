@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        @include('sweetalert::alert')
        <div class="bd-content">
            {{-- BREADCRUMB --}}
            <div class="container">
                <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Kuliner</a></li>
                        <li class="breadcrumb-item"><a style="text-decoration:none" href="/culinaries">Rumah Makan</a></li>
                        <li class="breadcrumb-item" aria-current="page">Menu</li>
                    </ul>

                    <!-- HERO-->
                    <div class="rumahmakan row">
                        <div class="resto-img banner col-md-12 position-relative mb-3">
                            <img src="{{ Storage::url($culinary->image) }}" alt="Rumah Makan" />
                            <a href="/culinaries" class="btn btn-back-balik">
                                <i class="fa fa-arrow-left"></i></a>
                            <div class="konten-kuliner">
                                <div class="my-auto d-flex justify-content-center">
                                    <h1 class="heading">{{ $culinary->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEARCH MENU MAKAN -->
            <div class="container mt-3">
                <form action="/culinaries/{{ $culinary->slug }}/menus" method="GET">
                    @csrf
                    <div class="container search-all p-0">
                        <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                            <div class="searchinput" style="width: 80%">
                                <button>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <input name="search" class="form-control me-2" type="search" placeholder="Cari Menu Makan"
                                    aria-label="Search" value="{{ request('search') }}">
                            </div>
                            <div class="sortinput justify-content-center">
                                <select name="menu_category_id" class="form-select" aria-label="Default select example">
                                    <option value="">Kategori Menu</option>
                                    @foreach ($menuCategories as $menuCategory)
                                        <option value="{{ $menuCategory->id }}"
                                            {{ request('menu_category_id') == $menuCategory->id ? 'selected' : '' }}>
                                            {{ $menuCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="buttonsearch">
                                <button class="small-button" type="submit">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- CARDLIST MENU MAKAN -->
            <div class="restaurant container">
                @if ($culinaryMenus->count() > 0)
                    <div class="row row-cols-1 row-cols-md-5 g-3 mt-3 mb-5">
                        @foreach ($culinaryMenus as $menu)
                            <div class="col">
                                <div class="card-3">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($menu->image) }}" class="card-img-top" alt="gambar">
                                    </div>
                                    <div class="card-body">
                                        <div class="judul-kuliner">
                                            <h5>{{ $menu->name }}</h5>
                                        </div>
                                        <div class="deskripsi-kuliner">
                                            <p>{!! $menu->description !!}</p>
                                        </div>
                                        <div class="harga-kuliner">
                                            <p>Rp{{ number_format($menu->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <form action="/culinaries/{{ $culinary->slug }}/menus" method="POST">
                                        @csrf
                                        <input type="hidden" name="item_id" value="{{ $menu->id }}">
                                        <input type="hidden" name="session_id" value="{{ session()->getId() }}">
                                        <input type="hidden" name="price" value="{{ $menu->price }}">
                                        <input type="hidden" name="slug" value="{{ $culinary->slug }}">
                                        <div class="group-btn-rm d-flex mx-auto">
                                            <input type="hidden" name="quantity" id="quantityInput{{ $menu->id }}">
                                            <div class="input-btn">
                                                <span class="minus" data-itemid="{{ $menu->id }}">-</span>
                                                <span class="num" id="quantityValue{{ $menu->id }}">1</span>
                                                <span class="plus" data-itemid="{{ $menu->id }}">+</span>
                                            </div>
                                            <button type="submit" class="button-tambah">Tambahkan</button>
                                        </div>
                                    </form>
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
                        </div> --}}

                    </div>
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data yang tersedia.</p>
                @endif
            </div>
            <div class="pagination d-flex justify-content-center pt-4">
                {{ $culinaryMenus->links('partials.custom_pagination') }}
            </div>

        </div>

    </div>
    <!-- FOOTER -->
    @include('partials.footer')
    </div>
    <script>
        const plusButtons = document.querySelectorAll(".plus");
        const minusButtons = document.querySelectorAll(".minus");

        plusButtons.forEach(plusButton => {
            plusButton.addEventListener("click", function() {
                const itemId = this.getAttribute("data-itemid");
                updateQuantity(itemId, 1);
            });
        });

        minusButtons.forEach(minusButton => {
            minusButton.addEventListener("click", function() {
                const itemId = this.getAttribute("data-itemid");
                updateQuantity(itemId, -1);
            });
        });

        function updateQuantity(itemId, increment) {
            const quantityValue = document.getElementById(`quantityValue${itemId}`);
            const quantityInput = document.getElementById(`quantityInput${itemId}`);

            let a = parseInt(quantityValue.innerText, 10) + increment;

            if (a > 0 && a < 10) {
                quantityValue.innerText = a;
                quantityInput.value = a;
            }
        }
    </script>
@endsection

{{-- @section('script-body')
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
@endsection --}}
