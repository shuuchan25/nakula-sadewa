@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')
<section class="kalender-event">
    <div class="container w-100 mb-5">
        <button>
            <a href="../#"><img src="../assets/icons/back-arrow.svg" alt="back"></a>
        </button>

        <div class="card-kalkulator">
            <div class="row kalkulator-content">
                <div class="col-2 kalkulator-img">
                    <img src="../assets/pict/destinasi.jpg" alt="">
                </div>
                <div class="col-6 kalkulator-items">
                    <h6>Hotel Queen</h6>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')


@endsection
