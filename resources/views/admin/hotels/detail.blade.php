@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Akomodasi & Kamar</h3>
                </div>
                <div class="d-flex gap-sm-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/hotels'">Kembali</button>
                    @can('admin-akomodasi')
                        <button type="button" class="second-button"
                            onclick="location.href='/admin/hotels/{{ $hotel->slug }}/edit'">Edit</button>
                    @endcan
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col-12 col-md-6">
                        <div class="pb-3">
                            <h5>Nama Akomodasi</h5>
                            <p>{{ $hotel->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($hotel->category)->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $hotel->contact }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $hotel->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 w-100 border-bottom">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="">
                        <p>
                            {!! $hotel->description !!}
                        </p>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-100">

                        <div class="">
                            <h5>
                                Gambar
                            </h5>
                            <div class="image-list pt-3 w-100 d-md-flex gap-2">
                                {{-- Hero Image --}}
                                <div class="image-card">
                                    <img src="{{ Storage::url($hotel->image) }}" alt="">
                                </div>
                                {{-- Gallery Image --}}
                                {{-- <div class=""> --}}
                                @foreach ($hotel->images as $image)
                                    <div class="image-card">
                                        <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                    </div>
                                @endforeach
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <section class="maps w-100 mt-3">
                    <div class="">
                        <div class="w-100">
                            <h5>Lokasi/Peta</h5>
                            <iframe src="{{ $hotel->map }}" width="100%" height="300" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                class="rounded-4"></iframe>
                        </div>
                    </div>
                </section>
            </div>

            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2 pt-5">
                <div class="">
                    <h3 class="mb-0">Detail Kamar</h3>
                </div>
                @can('admin-akomodasi')
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/hotels/{{ $hotel->slug }}/rooms/create'">Tambah Kamar</button>
                @endcan
            </div>

            @if ($hotelRooms->count() > 0)
                @foreach ($hotelRooms as $hotelRoom)
                    <div class="content-wrapper p-4 mb-4">
                        <div class="image-list pt-3 w-100 d-md-flex gap-2">
                            @foreach ($hotelRoom->images as $image)
                                <div class="image-card-2">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="Image">
                                </div>
                            @endforeach
                        </div>
                        <div class=" w-100 d-flex align-items-start justify-content-between border-bottom">
                            <div class="">
                                <h4>{{ $hotelRoom->name }} <span class="fs-6 ms-2">{{ $hotelRoom->capacity }} orang</span>
                                </h4>
                                <p>Rp{{ number_format($hotelRoom->price / 1000, 3, '.', '.') }}</p>
                                <div class="">
                                    <p>
                                        {!! $hotelRoom->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @can('admin-akomodasi')
                            <div class="modal-footer w-100 mt-2">
                                <button type="button" class="btn cancel-btn mb-0"
                                    onclick="location.href='/admin/hotels/{{ $hotel->slug }}/rooms/{{ $hotelRoom->slug }}/edit'">Edit</button>
                                <form action="/admin/hotels/{{ $hotel->slug }}/rooms/{{ $hotelRoom->slug }}" method="POST"
                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn delete-btn mb-0 me-0">Hapus</button>
                                </form>
                            </div>
                        @endcan
                    </div>
                @endforeach
            @else
                <div class="pt-5">
                    <p>Tidak ada data kamar.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
