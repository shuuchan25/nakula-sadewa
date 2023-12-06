@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Paket Wisata</h3>
                </div>
                <div class="d-flex gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/attractions/{{ $attraction->slug }}'">Kembali</button>
                    @can('admin-atraksi')
                        <button type="button" class="second-button"
                            onclick="location.href='/admin/attractions/{{ $attraction->slug }}/packages/{{ $attractionPackage->slug }}/edit'">Edit</button>
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
                            <h5>Nama Paket</h5>
                            <p>{{ $attractionPackage->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>Rp{{ number_format($attractionPackage->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6  ps-md-4 ">
                        <div class="pb-3">
                            <h5>Video</h5>
                            <div class="ratio ratio-16x9 video-wrapper">
                                <iframe src="{{ $attractionPackage->video }}" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="">
                        <p>
                            {!! $attractionPackage->description !!}
                        </p>
                    </div>
                </div>
                <div class="w-100 border-top pt-3">
                    <div class="">
                        <h5>
                            Gambar
                        </h5>
                        <div class="image-list pt-3 w-100 d-md-flex gap-2">
                            {{-- Hero Image --}}
                            <div class="image-card">
                                <img src="{{ Storage::url($attractionPackage->image) }}" alt="">
                            </div>
                            {{-- Gallery Image --}}
                            {{-- <div class=""> --}}
                            @foreach ($attractionPackage->images as $image)
                                <div class="image-card">
                                    <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                </div>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
