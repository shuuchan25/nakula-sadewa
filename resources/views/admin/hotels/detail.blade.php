@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Penginapan & Kamar</h3>
                </div>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/hotels'">Kembali</button>
                    <button type="button" class="second-button" onclick="location.href='/admin/hotels/{{ $hotel->slug }}/edit'">Edit</button>
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col border-end">
                        <div class="pb-3">
                            <h5>Nama Penginapan</h5>
                            <p>{{ $hotel->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($hotel->category)->name }}</p>
                        </div>
                    </div>
                    <div class="col ps-4 ">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $hotel->address }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <p>{{ $hotel->map }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $hotel->contact }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 border-bottom">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-4">
                        <p>
                            {!! $hotel->description !!}
                        </p>
                    </div>
                </div>
                <div class="content-wrapper mt-5">
                    <div class="w-100">
    
                        <div class="">
                            <h5>
                                Gambar
                            </h5>
                            <div class="image-list pt-4">
                                <ul class="d:flex">
                                    {{-- Hero Image --}}
                                    <li class="pe-4 me-2 border-end">
                                        <div class="image-card">
                                            <img src="{{ Storage::url($hotel->image) }}" alt="">
                                                alt="">
                                        </div>
                                    </li>
                                    {{-- Gallery Image --}}
                                    @foreach ($hotel->images as $image)
                                        <li>
                                            <div class="image-card">
                                                <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header d-flex align-items-center justify-content-between pb-lg-2 pb-2 pt-5">
                <div class="">
                    <h3 class="">Detail Kamar</h3>
                </div>
            </div>

            @foreach ($hotelRooms as $hotelRoom)
            <div class="content-wrapper p-4 mb-4">
                <div class="image-list">
                    @foreach ($hotelRoom->images as $image)
                        <div class="image-card">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Image">
                        </div>
                    @endforeach
                </div>
                <div class=" w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="">
                    <h4>{{ $hotelRoom->name }} <span class="fs-6 ms-2">{{ $hotelRoom->capacity }} orang</span></h4>
                        <p>Rp. {{ $hotelRoom->price }},- /Kamar</p>

                        <div class="pt-1">
                            <p>
                                {!! $hotelRoom->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer w-100 mt-2">
                    <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/hotels/room/{{ $hotel->slug }}/{{ $hotelRoom->slug }}/edit'">Edit</button>
                    <button type="button" class="btn delete-btn mb-0 me-0">Hapus</button>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
