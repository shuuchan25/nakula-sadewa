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
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/#">Beranda</a></li>
            <li class="breadcrumb-item"><a style="text-decoration:none" href="/articles">Artikel</a></li>
            <li class="breadcrumb-item aktif" aria-current="page">{{ $article->title }}</li>
            </ul>

            {{-- hero --}}
            <div class="detail row">
                <div class="banner col-md-12">
                    <img style="filter: none" src="{{ Storage::url($article->image) }}" alt="Berita Terkini"/>
                    <div class="content">
                        <div class="button-balik">
                            <button onclick="window.location='/articles?slug={{ $article->slug }}'" class="btn-back ">
                                <svg width="25" height="25" viewBox="0 0 36 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        {{-- <div class="my-auto d-flex justify-content-center">
                            <h1 class="heading">Berita Terkini</h1>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- CONTENT --}}
        <section class="newest mt-5 mb-5 pb-5">
            <div class="container">
                <div class="berita-terkini">
                    <div class="author">
                        <h6 style="font-size: 12px; text-align: left" >By {{ $article->author }}</h6>
                    </div>
                    <div class="judul-berita mt-3">
                        <h4 style="font-weight: 600">{{ $article->title }}</h4>
                        <p style="font-size: 14px" >{{ $article->published_at }}</p>
                    </div>
                    <div class="berita-teks pt-3 pb-2">
                        {!! $article->content !!}
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
