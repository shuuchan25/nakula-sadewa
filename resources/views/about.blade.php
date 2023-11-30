@extends('partials.master')
@section('content')
    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        <div class="bd-content">
            {{-- HERO SECTION --}}
            <section class="hero-tentang">
                <div class="tentang-wrapper">
                    <div class="hero-item">
                        @if ($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt=""
                                class="my-auto mx-auto">
                        @else
                            <img src="../assets/pict/tentang.jpg" alt="" class="img-fluid my-auto mx-auto">
                        @endif

                        <div class="tentang-caption">
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
                        </div>
                    </div>
                </div>
            </section>
            {{-- END HERO SECTION --}}

            {{-- ABOUT --}}
            <section class="about  mt-5 mb-5 pb-5" id="about">
                <div class="container">
                    <div class="tentang-nasa">
                        <div class="about-teks">
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
