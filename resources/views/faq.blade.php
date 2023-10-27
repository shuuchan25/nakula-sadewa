@extends('partials.master')
@section('content')


<div class="page-content">
    {{-- Get partials --}}
    @include('partials.header')

        <div class="bd-content">
            <!--HERO-->
            <section class="hero-image">
                <img src="../assets/pict/hero-wisata.jpg" alt="">
                <div class="hero-content">
                    <div class="my-auto d-flex justify-content-center">
                        <h1 class="mb-3">Pertanyaan</h1>
                    </div>
                </div>
            </section>

            {{-- CONTENT --}}
            <section class="pertanyaan">
                <div class="container daftar-pertanyaan">
                    <div class="container mt-5 mb-3">
                        <form action="/faq" method="GET" id="search-form" class="d-flex" role="search">
                            @csrf
                            <div class="search-all w-100">
                                {{-- search --}}
                                <div class="searchbar d-flex w-100 justify-content-center">
                                    <div class="searchinput" style="width: 100%">
                                        <button>
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11" cy="11" r="8" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.5 16.958L21.5 21.958" stroke="#63666A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                        <input name="search" class="form-control me-2" type="search" placeholder="Cari Pertanyaan" aria-label="Search" value="{{ request('search') }}">
                                    </div>
                                    <div class="buttonsearch">
                                        <button class="small-button" type="submit">Cari</button>
                                    </div>
                                </div>
                                {{-- end search --}}
                            </div>
                        </form>
                    </div>
                    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                        @if ($faqs->count() > 0)
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne{{ $faq->slug }}" aria-expanded="false"
                                            aria-controls="flush-collapseOne{{ $faq->slug }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne{{ $faq->slug }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">{!! $faq->answer !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="pt-5">
                                <p>Nothing data found.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            {{-- END CONTENT --}}
        </div>
    @include('partials.footer')
</div>
@endsection
