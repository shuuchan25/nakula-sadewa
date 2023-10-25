@extends('partials.master')
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content">
    <!--HERO-->
    <section class="hero-image">
        <img src="{{ asset('assets/pict/destinasi.jpg') }}" alt="hero rumah makan">
        <div class="hero-content">
            <div class="my-auto d-flex justify-content-center">
                <h1>Berita dan Artikel</h1>
            </div>
        </div>
    </section>

<!--SEARCH-->
    <div class="listevent" mt-3>
        <div class="tab-content pt-4 pb-5">
            <div class="container search-all">
                <h4 class="title-heading">Temukan Berita dan Artikel Menarik!</h4>
                <form action="/articles" method="GET">
                    @csrf
                    <div class="searchbar d-flex mt-3 w-100 justify-content-center" style="gap: 10px">
                        <div class="searchinput" style="width: 100%">
                            <button>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <input name="search" class="form-control me-2" type="search" placeholder="Cari berita dan artikel" aria-label="Search" value="{{ request('search') }}">
                        </div>
                        <div class="buttonsearch">
                            <button class="small-button" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- end search --}}

            <!-- CARD Event-->
            <div class="container listevent mt-3">
                <div class="row row-cols-1 row-cols-md-5 g-3 mt-4">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                            <div class="col">
                                <div class="cardlist-detail">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                            alt="gambar">
                                    </div>
                                    <div class="cardlist-body">
                                        <div class="cardlist-title-berita">
                                            <h5 style="font-size: 19px">{{ $article->title }} Lorem ipsum dolor sit amet lorem ipsum dolor</h5>
                                        </div>
                                        <div class="cardlist-body-detail">
                                            <p class="date" style="font-size: 14px">
                                                {{ $article->published_at }}</p>
                                        </div>
                                    </div>
                                    <div class="card-btn d-flex justify-content-center">
                                        <button onclick="window.location='/articles/{{ $article->slug }}'"
                                            class="detail-button">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="pt-5">
                            <p>Nothing article found.</p>
                        </div>
                    @endif
                </div>
            </div>
            {{-- <div class="container listevent mt-3">
                <div class="row row-cols-1 row-cols-md-4 g-3 mt-4">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)
                            <div class="col">
                                <div class="cardlist-detail">
                                    <div class="content-img">
                                        <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                            alt="gambar">
                                    </div>
                                    <div class="cardlist-body">
                                        <div class="cardlist-title">
                                            <h5>{{ $article->title }}</h5>
                                        </div>
                                        <p class="date" style="font-weight: bold; font-size: 11px">
                                            {{ $article->published_at }}</p>
                                    </div>
                                    <div class="card-btn d-flex justify-content-center">
                                        <button onclick="window.location='/articles/{{ $article->slug }}'"
                                            class="detail-button">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="pt-5">
                            <p>Nothing article found.</p>
                        </div>
                    @endif
                </div> --}}
            </div>
        </div>
        {{--end TABS ROUNDED --}}
        <div style="clear: both;"></div>
    </div>
@include('partials.footer')
</div>
@endsection
