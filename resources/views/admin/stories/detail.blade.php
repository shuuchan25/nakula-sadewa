@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Cerita</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/stories'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="w-100">
                    <img src="{{ Storage::url($story->image) }}" alt="" style="width: 100%; border-radius: 8px;">
                </div>
                <div class="">
                    <p class="mb-1">{{ $story->published_at }}</p>
                    <h1 class="mb-1">{{ $story->title }}</h1>
                    <p class="">Ditulis oleh {{ $story->author }}</p>
                </div>
                <div class="w-100">
                        <div class="">
                            <p class="">
                                {!! $story->content !!}
                            </p>
                        </div>
                </div>
            </div>

        </div>
    </section>
@endsection


