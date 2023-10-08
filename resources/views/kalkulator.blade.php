@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')
<section class="kalkulator">
    <div class="container w-100 mb-5">
        <button class="back-btn">
            <a href="../#">
                <svg width="25" height="25" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.1287 18.9992H2M2 18.9992L17.4218 2M2 18.9992L17.4218 35.9983" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </button>
        <div class="kalkulator-wrap-card mt-3 mb-3">
            <div class="row kalkulator-card">
                <div class="col-2 kalkulator-header">
                    <img src="../assets/pict/hero-homepage.png" alt="">
                </div>
                <div class="col-6 kalkulator-content">
                    <h2>Hotel Queen</h2>
                    <div class="items-body">
                        <div class=" items">
                            <p>Suit Room</p>
                            <p>Regular Room</p>
                            <p>Ballroom</p>
                        </div>
                        <div class="quantitiy">
                            <p>1</p>
                            <p>1</p>
                            <p>1</p>
                        </div>
                        <div class="price">
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col summary-content">
                    <div class="summary">
                        <div class="x-button">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
                                    <path d="M24.375 0H5.625C2.51769 0 0 2.51769 0 5.625V24.375C0 27.4823 2.51769 30 5.625 30H24.375C27.4823 30 30 27.4823 30 24.375V5.625C30 2.51769 27.4823 0 24.375 0ZM21.6692 20.07L20.0677 21.6704C19.7746 21.9646 19.2946 21.9646 19.0015 21.6704L15 17.6688L10.9996 21.6692C10.7054 21.9635 10.2265 21.9635 9.93231 21.6669L8.33077 20.07C8.03885 19.7746 8.03885 19.2981 8.33077 19.0015L12.3323 15.0012L8.33192 11.0008C8.03885 10.7054 8.03885 10.2254 8.33192 9.93346L9.93346 8.33192C10.2277 8.03539 10.7077 8.03539 11.0008 8.33192L15 12.3335L19.0015 8.33192C19.2958 8.03539 19.7758 8.03539 20.0677 8.33192L21.6692 9.93115C21.9623 10.2254 21.9623 10.7054 21.6704 11.0008L17.6688 15.0012L21.6704 19.0015C21.9612 19.2981 21.9612 19.7746 21.6692 20.07Z" fill="#FF0000"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row total-price">
                <h5>Rp 3.000.000</h5>
            </div>
        </div>

        <div class="kalkulator-wrap-card mt-3 mb-3">
            <div class="row kalkulator-card">
                <div class="col-2 kalkulator-header">
                    <img src="../assets/pict/hero-desawisata.png" alt="">
                </div>
                <div class="col-6 kalkulator-content">
                    <h2>Hotel Queen</h2>
                    <div class="items-body">
                        <div class=" items">
                            <p>Suit Room  Lorem ipsum dolor sit amet.</p>
                            <p>Regular</p>
                            <p>Ballroom</p>
                        </div>
                        <div class="quantitiy">
                            <p>1</p>
                            <p>1</p>
                            <p>1</p>
                        </div>
                        <div class="price">
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                            <p>Rp 1.000.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 kalkulator-items">
                    <h6>Hotel Queen</h6>
                    <p>Nama Kamar</p>
                    <p>500.000/Room</p>
                </div>
                <div class="col-4">

                </div>
            </div>
            <div class="row total-price">
                <h5>Rp 3.000.000</h5>
            </div>
        </div>

        <div class="calculate-button w-100 d-flex justify-content-center mt-5">
            <button type="detail" class="detail-button"><a href="">Kalkulasi</a></button>
        </div>
        <div class="total-summary ">
            <div class="total-summary-body mx-auto mt-3">
                <h5>Total</h5>
                <h6>Rp 6.000.000</h6>
            </div>

        </div>
    </div>
</section>

@include('partials.footer')


@endsection
