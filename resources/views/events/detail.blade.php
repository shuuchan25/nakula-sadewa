@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
    <section class="kalender-event">
        <div class="container w-100 mb-5">
            <button>
                <a href="../#"><img src="../assets/icons/back-arrow.svg" alt="back"></a>
            </button>
            <div class="judul-event mt-3">
                <h3>{{ $event->title }}</h3>
            </div>
            <div class="body-event">
                <div class="col-6 poster-event mt-3">
                    <img src="{{ Storage::url($event->image) }}" alt="">
                </div>
                <div class="body-cerita mt-4">
                    <div class="content-cerita w-100">
                        <div class="author">
                            <h6>By Admin</h6>
                            <small>{{ $event->date }}</small>
                        </div>
                        <div class="cerita-user mt-2 mb-5">
                            <p>{!! $event->desc !!}</p>
                        </div>
                    </div>
                    <div class="info-wrapper p-2">
                        <div class="event-content">
                            <h5 class="mt-2 mx-2">Informasi</h5>
                            <div class="mt-3 mx-2 content-wrapper">
                                <div class="htm-info">
                                    <h6>HTM</h6>
                                    <p>Rp{{ number_format($event->price, 0, ',', '.') }}/Orang</p>
                                </div>
                                <div class="info-lokasi">
                                    <h6>Lokasi</h6>
                                    <p>{{ $event->place }}</p>
                                </div>
                                <div class="info-kontak">
                                    <h6>Kontak</h6>
                                    <p>{{ $event->contact }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <div class="container mx-auto">
            <div class="row mt-5 mb-5 justify-content-center">
                @foreach ($event->images as $image)
                <img src="{{ asset('storage/' . $image->other_image) }}" alt="">
               @endforeach
            </div>
        </div>
    </section>
    <section class="maps">
        <div class="container">
            <div class="w-100 mt-5 mb-5">
                <h5>Lokasi/Peta</h5>
                <iframe src="{{ $event->map }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
            </div>
        </div>
    </section>
</div>
@include('partials.footer')
</div>

@endsection
