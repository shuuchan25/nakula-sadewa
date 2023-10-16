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
                <h1>Berita Terkini</h1>
            </div>
        </div>
    </section>

   <!--SEARCH-->
   <div class="listevent" mt-3>
    <div class="tab-content pt-4 pb-5">
        <div class="container">
            <h4 class="title-heading">Temukan Berita Terbaru!</h4>
            <form action="/articles" method="GET">
                @csrf
                <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                    <div class="searchinput" style="width: 70%">
                        <input name="search" class="form-control me-2" type="search"
                            placeholder="Cari article" aria-label="Search">
                    </div>
                    {{-- <div class="sortinput justify-content-center">
                        <select class="form-select" name="selectedMonth" aria-label="Default select example">
                            <option value="" selected>Sort by month</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div> --}}
                    <div class="buttonsearch">
                        <button class="small-button" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- end search --}}
        <!-- CARD Event-->
        <div class="container listevent mt-3">
            @if ($articles->count() > 0)
            <div class="row row-cols-1 row-cols-md-4 g-3 mt-4">
                @foreach ($articles as $article)
                <div class="col">
                    <div class="cardlist-detail">
                        <div class="content-img">
                            <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="gambar">
                        </div>
                        <div class="cardlist-body">
                            <div class="cardlist-title">
                                <h5>{{ $article->title }}</h5>
                            </div>
                            <p class="date" style="font-weight: bold; font-size: 11px"> {{ $article->published_at }}</p>
                        </div>
                        <div class="card-btn d-flex justify-content-center">
                            <button onclick="window.location='/articles/{{ $article->slug }}'" class="detail-button">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @else
            <div class="pt-5">
                <p>Nothing news found.</p>
            </div>
        @endif
        </div>
    </div>
    {{--end TABS ROUNDED --}}
    <div style="clear: both;"></div>
</div>
@include('partials.footer')
</div>
@endsection
