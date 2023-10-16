@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            {{-- HERO SECTION --}}
            <section class="hero-wrapper">
                <div class="hero">
                    <div class="hero-item">
                        @if ($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt=""
                                class="img-fluid my-auto mx-auto">
                        @else
                            <img src="../assets/pict/hero-homepage.png" alt="" class="img-fluid my-auto mx-auto">
                        @endif
                    </div>
                </div>
                <div class="carousel-caption">
                    @php
                        $words = explode(' ', $about->slogan);
                    @endphp

                    @if (count($words) > 0)
                        <h5>{{ $words[0] }}</h5> <!-- Display the first word -->
                    @endif

                    @if (count($words) > 1)
                        @php
                            $remainingWords = array_slice($words, 1);
                            $remainingSlogan = implode(' ', $remainingWords);
                        @endphp
                        <h5>{{ $remainingSlogan }}</h5> <!-- Display the remaining words -->
                    @endif
                    <br>
                    {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                </div>
            </section>
            {{-- END HERO SECTION --}}

            {{-- ABOUT --}}
            <section class="about  mt-5 mb-5 pb-5" id="about">
                <div class="container">
                    <div class="tentang-trenggalek">
                        <div class="about-teks pt-3 pb-2">
                            <p>{!! $about->shortdesc !!}</p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- END ABOUT --}}
        </div>
        @include('partials.footer')
    </div>
@endsection
