@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Desa Wisata</h3>
                </div>
                <div class="d-flex gap-3 align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/desa-wisata'">Kembali</button>
                    <button type="button" class="second-button" onclick="location.href='/admin/desa-wisata/{{ $desaWisataItem->slug }}/edit'">Edit</button>
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between">
                    <div class="col border-end border-bottom">
                        <div class="pb-3">
                            <h5>Nama Wisata</h5>
                            <p>{{ $desaWisataItem->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ optional($desaWisataItem->category)->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>{{ $desaWisataItem->price }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Jam Operasional</h5>
                            <p>{{ $desaWisataItem->operational_hour }}</p>
                        </div>
                    </div>
                    <div class="col ps-4 border-bottom">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $desaWisataItem->address }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <p>{{ $desaWisataItem->map }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $desaWisataItem->contact }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Video</h5>
                            <p>{{ $desaWisataItem->video }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-4">
                        <p>
                            {!! $desaWisataItem->description !!}
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
                        <div class="image-list pt-4">
                            <ul class="d:flex">
                                {{-- Hero Image --}}
                                <li class="pe-4 me-2 border-end">
                                    <div class="image-card">
                                        <img src="{{ Storage::url($desaWisataItem->image) }}" alt="">
                                            alt="">
                                    </div>
                                </li>
                                {{-- Gallery Image --}}
                                @foreach ($desaWisataItem->images as $image)
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
    </section>
@endsection
