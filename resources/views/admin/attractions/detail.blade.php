@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Destinasi Wisata</h3>
                </div>
                <div class="d-flex gap-md-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button"
                        onclick="location.href='/admin/attractions'">Kembali</button>
                    @can('admin-atraksi')
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/attractions/{{ $attraction->slug }}/edit'">Edit</button>
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
                    <div class="col-12 col-md-6 ">
                        <div class="pb-3">
                            <h5>Nama Wisata</h5>
                            <p>{{ $attraction->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($attraction->category)->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($attraction->subCategory)->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>{{ $attraction->price }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Jam Operasional</h5>
                            <p>{{ $attraction->operational_hour }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  ps-md-4 ">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $attraction->address }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <a href="{{ $attraction->map }}" style="word-break: break-all;">{{ $attraction->map }}</a>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $attraction->contact }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Video</h5>
                            <a href="{{ $attraction->video }}" style="word-break: break-all;">{{ $attraction->video }}</a>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="">
                        <p>
                            {!! $attraction->description !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-wrapper mt-5">
                <div class="w-100">

                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        <div class="pt-3 w-100 d-flex gap-2">
                            {{-- Hero Image --}}
                            <div class="image-list pe-4 me-2 border-end ">

                                <div class="image-card">
                                    <img src="{{ Storage::url($attraction->image) }}" alt="">
                                </div>
                            </div>
                            {{-- Gallery Image --}}
                            <div class="image-list">
                                @foreach ($attraction->images as $image)
                                    <div class="image-card">
                                        <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
