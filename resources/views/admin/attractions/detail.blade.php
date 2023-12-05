@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Destinasi Wisata</h3>
                </div>
                <div class="d-flex gap-md-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/attractions'">Kembali</button>
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
                            <h5>Kontak</h5>
                            <p>{{ $attraction->contact }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Video</h5>
                            <div class="ratio ratio-16x9 w-50">
                                <iframe src="{{ $attraction->video }}" title="YouTube video player" frameborder="0"
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
                            {!! $attraction->description !!}
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
                                <img src="{{ Storage::url($attraction->image) }}" alt="">
                            </div>
                            {{-- Gallery Image --}}
                            {{-- <div class=""> --}}
                            @foreach ($attraction->images as $image)
                                <div class="image-card">
                                    <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                </div>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <section class="maps w-100 mt-3 border-top pt-3">
                    <div class="">
                        <div class="w-100">
                            <h5>Lokasi/Peta</h5>
                            <iframe src="{{ $attraction->map }}" width="100%" height="300" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                class="rounded-4"></iframe>
                        </div>
                    </div>
                </section>
            </div>

            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2 pt-5">
                <div class="">
                    <h3 class="mb-0">Daftar Paket</h3>
                </div>
                @can('admin-atraksi')
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/attractions/{{ $attraction->slug }}/packages/create'">Tambah Paket</button>
                @endcan
            </div>

            @if ($attractionPackages->count() > 0)
                @foreach ($attractionPackages as $attractionPackage)
                    <div class="content-wrapper p-4 mb-4">
                        <div class="image-list pt-3 w-100 d-md-flex gap-2">
                            {{-- Hero Image --}}
                            <div class="image-card-2">
                                <img src="{{ Storage::url($attractionPackage->image) }}" alt="">
                            </div>
                            {{-- Gallery Image --}}
                            {{-- <div class=""> --}}
                            @foreach ($attractionPackage->images as $image)
                                <div class="image-card-2">
                                    <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                </div>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                        <div class=" w-100 d-flex align-items-start justify-content-between border-bottom">
                            <div class="">
                                <h4>{{ $attractionPackage->name }}</h4>
                                <p>Rp{{ number_format($attractionPackage->price, 0, ',', '.') }}</p>
                                <div class="">
                                    <p>
                                        {!! $attractionPackage->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer w-100 mt-2">
                            @can('admin-atraksi')
                                <button type="button" class="btn cancel-btn mb-0"
                                    onclick="location.href='/admin/attractions/{{ $attraction->slug }}/packages/{{ $attractionPackage->slug }}/edit'">Edit</button>
                                <form action="/admin/attractions/{{ $attraction->slug }}/packages/{{ $attractionPackage->slug }}"
                                    method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus item ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn delete-btn mb-0 me-0">Hapus</button>
                                </form>
                            @endcan
                        </div>
                    </div>
                @endforeach
            @else
                <div class="pt-5">
                    <p>Tidak ada data paket.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
