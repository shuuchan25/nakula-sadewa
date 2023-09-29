@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Event</h3>
                </div>
                <div class="d-flex gap-sm-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/events'">Kembali</button>
                    <button type="button" class="second-button" onclick="location.href='/admin/events/{{ $event->slug }}/edit'">Edit</button>
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="detail-data row w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col-12 col-md-6 ">
                        <div class="pb-3">
                            <h5>Nama Event</h5>
                            <p>{{ $event->title }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Kontak</h5>
                            <p>{{ $event->contact }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Tanggal</h5>
                            <p>{{ $event->date }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ps-md-4 ">
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $event->place }}</p>
                        </div>
                        <div class="pb-md-3 pb-4">
                            <h5>Link Map</h5>
                           <a href="{{ $event->map }}" style="word-break: break-all;">{{ $event->map }}</a>
                        </div>
                        <div class="pb-3">
                            <h5>HTM</h5>
                            <p>{{ $event->price }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 w-100 border-bottom">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="">
                        <p>
                            {!! $event->desc !!}
                        </p>
                    </div>
                </div>
                <div class="pt-3">
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
                                            <img src="{{ Storage::url($event->image) }}" alt="">
                                                alt="">
                                        </div>
                                    </li>
                                    {{-- Gallery Image --}}
                                    @foreach ($event->images as $image)
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
        </div>
    </section>
@endsection
