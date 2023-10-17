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
                        <h1>Kalender Event</h1>
                    </div>
                </div>
            </section>

            <!--MENU BAR-->
            @include('partials.menubar')
            {{-- end MENUBAR --}}

            <!--SEARCH-->
            <div class="listevent" mt-3>
                <div class="tab-content pt-4 pb-5">
                    <div class="container search-all">
                        <h4 class="title-heading">Temukan Event Menarik!</h4>
                        <form action="/events" method="GET">
                            @csrf
                            <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                                <div class="searchinput" style="width: 70%">
                                    <input name="search" class="form-control me-2" type="search"
                                        placeholder="Cari event" aria-label="Search">
                                </div>
                                <div class="sortinput justify-content-center">
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
                        <div class="row row-cols-1 row-cols-md-4 g-3 mt-4">
                            @if ($events->count() > 0)
                                @foreach ($events as $event)
                                    <div class="col">
                                        <div class="cardlist-detail">
                                            <div class="content-img">
                                                <img src="{{ Storage::url($event->image) }}" class="card-img-top"
                                                    alt="gambar">
                                            </div>
                                            <div class="cardlist-body">
                                                <div class="cardlist-title">
                                                    <h5>{{ $event->title }}</h5>
                                                </div>
                                                <div class="cardlist-lokasi">
                                                    <p class="lokasi">{{ $event->place }}</p>
                                                </div>
                                                <p class="date" style="font-weight: bold; font-size: 11px">
                                                    {{ $event->date }}</p>
                                            </div>
                                            <div class="card-btn d-flex justify-content-center">
                                                <button onclick="window.location='/events/{{ $event->slug }}'"
                                                    class="detail-button">Lihat Detail</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="pt-5">
                                    <p>Nothing event found.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                {{-- end TABS ROUNDED --}}
                <div style="clear: both;"></div>

        </div>
        @include('partials.footer')
    </div>
@endsection
