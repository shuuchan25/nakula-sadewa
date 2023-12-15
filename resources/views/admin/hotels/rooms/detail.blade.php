@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Kamar</h3>
                </div>
                <div class="d-flex gap-sm-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button"
                        onclick="location.href='/admin/hotels/{{ $hotel->slug }}'">Kembali</button>
                    @can('admin-akomodasi')
                        <button type="button" class="second-button"
                            onclick="location.href='/admin/hotels/{{ $hotel->slug }}/rooms/{{ $hotelRoom->slug }}/edit'">Edit</button>
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
                            <h5>Nama Kamar</h5>
                            <p>{{ $hotelRoom->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>Rp{{ number_format($hotelRoom->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pb-3">
                            <h5>Kapasitas</h5>
                            <p>{{ $hotelRoom->capacity }} Orang</p>
                        </div>
                    </div>
                </div>
                <div class="py-3 w-100 border-bottom">
                    <h5 class="mb-2">
                        Deskripsi
                    </h5>
                    <div class="">
                        {!! $hotelRoom->description !!}
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-100">

                        <div class="">
                            <h5>
                                Gambar
                            </h5>
                            <div class="image-list pt-2 w-100 d-md-flex gap-2">
                                {{-- <div class=""> --}}
                                @foreach ($hotelRoom->images as $image)
                                    <div class="image-card">
                                        <img src="{{ asset('storage/' . $image->image) }}" alt="Image">
                                    </div>
                                @endforeach
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
