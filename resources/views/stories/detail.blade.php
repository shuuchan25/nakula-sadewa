@extends('partials.master')
@section('content')


<div class="page-content">
{{-- Get partials --}}
@include('partials.header')

<div class="bd-content">
    {{-- HERO SECTION --}}
    <div class="container">
        <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/">Beranda</a></li>
            <li class="breadcrumb-item aktif" aria-current="page">{{ $story->title }}</li>
            </ul>

            {{-- hero --}}
            <div class="detail row">
                <div class="banner cerita-artikel col-md-12">
                    <img style="filter: none" src="{{ Storage::url($story->image) }}" alt="Cerita Wisatawan"/>
                    <div class="content">
                        <a href="/#" class="btn btn-back-balik">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- CONTENT --}}
        <section class="newest mt-5 mb-5 pb-5">
            <div class="container">
                <div class="berita-terkini">
                    <div class="author">
                        <h6 style="font-size: 12px; text-align: left" >By {{ $story->author }}</h6>
                    </div>
                    <div class="judul-berita mt-3">
                        <h4 style="font-weight: 600">{{ $story->title }}</h4>
                        <p style="font-size: 14px" >{{ \Carbon\Carbon::parse($story->updated_at)->format('d M Y') }}</p>
                    </div>
                    <div class="berita-teks pt-3 pb-2">
                        {!! $story->content !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
{{-- END CONTENT --}}
@include('partials.footer')

</div>

@endsection
