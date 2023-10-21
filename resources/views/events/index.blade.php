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

            <!--SEARCH-->
            <div class="listevent" mt-3>
                <div class="tab-content pt-4 pb-5">
                    <div class="container search-all">
                        <h4 class="title-heading">Temukan Event Menarik!</h4>
                        <form action="/events" method="GET">
                            @csrf
                            <div class="searchbar d-flex mt-3 w-100 justify-content-center">
                                <div class="searchinput" style="width: 75%">
                                    <button>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
                                                    <h5 style="font-size: 19px">{{ $event->title }}</h5>
                                                </div>
                                                <div class="cardlist-body-detail">
                                                    <div class="cardlist-lokasi d-flex">
                                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.4167C3.25 5.62281 7.17493 1.75 12 1.75C16.8251 1.75 20.75 5.62281 20.75 10.4167C20.75 13.3982 19.0113 16.3409 17.1686 18.4829C16.236 19.5669 15.2463 20.482 14.3733 21.1328C13.9374 21.4577 13.5186 21.7258 13.1405 21.9162C12.786 22.0947 12.3812 22.25 12 22.25C11.6188 22.25 11.214 22.0947 10.8595 21.9162C10.4814 21.7258 10.0626 21.4577 9.62674 21.1328C8.75371 20.482 7.76395 19.5669 6.83144 18.4829C4.98872 16.3409 3.25 13.3982 3.25 10.4167ZM12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10C15 11.6569 13.6569 13 12 13Z" fill="#32393a"/>
                                                        </svg>
                                                        <p class="lokasi" style="font-size: 13px; margin-bottom: 0; padding-top: 2px">{{ $event->place }}</p>
                                                    </div>
                                                    <p class="date" style="font-size: 11px">
                                                        {{ $event->date }}</p>
                                                </div>
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
