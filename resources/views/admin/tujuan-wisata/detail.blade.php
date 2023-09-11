@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Destinasi Wisata</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/tujuan-wisata'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="row-cols-2 w-100 d-flex align-items-start justify-content-between">
                    <div class="col border-end border-bottom">
                        <div class="pb-3">
                            <h5>Nama Wisata</h5>
                            <p>{{ $tujuanWisataItem->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kategori</h5>
                            <p>{{ $tujuanWisataItem->category->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Harga</h5>
                            <p>{{ $tujuanWisataItem->price }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Jam Operasional</h5>
                            <p>{{ $tujuanWisataItem->operational_hour }}</p>
                        </div>
                    </div>
                    <div class="col ps-4 border-bottom">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $tujuanWisataItem->address }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Map</h5>
                            <p>{{ $tujuanWisataItem->map }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $tujuanWisataItem->contact }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Link Video</h5>
                            <p>{{ $tujuanWisataItem->video }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-4">
                        <p>
                            {!! $tujuanWisataItem->description !!}
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
                            <ul>
                                {{-- Hero Image --}}
                                <li>
                                    <div class="image-card">
                                        <img src="{{ Storage::url($tujuanWisataItem->image) }}" alt="">
                                            alt="">
                                    </div>
                                </li>
                                {{-- Gallery Image --}}
                                <li>
                                    @foreach ($tujuanWisataItem->images as $image)
                                        <div class="image-card">
                                            <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
