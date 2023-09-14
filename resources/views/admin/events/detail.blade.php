@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Event</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/events'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="w-100">
                    <img src="{{ Storage::url($event->image) }}" alt="" style="width: 100%; border-radius: 8px;">
                </div>
                <div class="">
                    <p class="mb-1">{{ $event->date }}</p>
                    <h1 class="mb-1">{{ $event->title }}</h1>
                    <p class="mb-0">Lokasi : {{ $event->place }}</p>
                </div>
                <div class="w-100">

                    <p class="">
                        {!! $event->desc !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
