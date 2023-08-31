@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Your curriculum</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" data-bs-toggle="modal"
                        data-bs-target="#addCurriculumModal">Add
                        File</button>
                </div>
            </div>
            <div class="chart-wrapper">
                <div class="pb-lg-4 pb-md-2">
                    <p>Visitor on December</p>
                </div>
                <div class="row align-items-start">
                    <div class="page-views col-lg-2 d-md-none d-none gap-4 gap-md-0 d-lg-block">
                        <h1>17</h1>
                        <div class="d-flex align-items-center py-3 border-0 border-bottom">
                            <div class="heart-icon">
                                <img src="assets/icons/Heart.png" alt="">
                            </div>
                            <p>Page views per day</p>
                        </div>
                        <div class="d-none d-lg-flex gap-2 align-items-center py-3">
                            <img src="assets/icons/line-graph.svg" alt="">
                            {{-- <canvas id="curveLineChart"></canvas> --}}
                            <div class="d-flex">
                                <div class="mini-arrow">
                                    <img src="assets/icons/Arrow - Down 2.svg" alt="">
                                </div>
                                <p>3%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10">
                        {{-- Chart Box --}}
                        <div class="chart-box ">
                            <div class="w-100 d-flex justify-content-end align-items-center">
                                <div class="">
                                    <div class="select-box">
                                        <div class="select-box__current " tabindex="1">
                                            <div class="select-box__value"><input class="select-box__input" type="radio"
                                                    id="0" value="1" name="year" checked="checked" />
                                                <p onclick="selectfocus(this);" class="select-box__input-text">Year</p>
                                            </div>
                                            <div class="select-box__value"><input class="select-box__input" type="radio"
                                                    id="2021" value="2" name="year" />
                                                <p onclick="selectfocus(this);" class="select-box__input-text">2021</p>
                                            </div>
                                            <div class="select-box__value"><input class="select-box__input" type="radio"
                                                    id="2022" value="3" name="year" />
                                                <p onclick="selectfocus(this);" class="select-box__input-text">2022</p>
                                            </div>
                                            <div class="select-box__value"><input class="select-box__input" type="radio"
                                                    id="2023" value="4" name="year" />
                                                <p onclick="selectfocus(this);" class="select-box__input-text">2023</p>
                                            </div>
                                            <svg class="select-box__icon" width="26" height="26" viewBox="0 0 26 26"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.19076 8.82034C5.46689 8.54421 5.89898 8.5191 6.20347 8.74503L6.2907 8.82034L13 15.5293L19.7093 8.82034C19.9854 8.54421 20.4175 8.5191 20.722 8.74503L20.8092 8.82034C21.0853 9.09646 21.1105 9.52856 20.8845 9.83305L20.8092 9.92028L13.55 17.1795C13.2738 17.4557 12.8417 17.4808 12.5373 17.2548L12.45 17.1795L5.19076 9.92028C4.88702 9.61654 4.88702 9.12408 5.19076 8.82034Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </div>
                                        <ul class="select-box__list">
                                            <li><label class="select-box__option" for="2021"
                                                    aria-hidden="aria-hidden">2021
                                            </li>
                                            <li><label class="select-box__option" for="2022"
                                                    aria-hidden="aria-hidden">2022
                                            </li>
                                            <li><label class="select-box__option" for="2023"
                                                    aria-hidden="aria-hidden">2023
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <canvas id="myChart" class="pt-2" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="">
                    <p class="mb-0">Your intern member now</p>
                </div>
                <div class="row w-100 career-items align-items-start">
                    <div class="col-lg-6">
                        <div class="career-item d-block d-sm-flex ">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/iic_karir__backend.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Backend Developer</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir__frontend.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Frontend Developer</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir__mobile.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Mobile Developer</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir__ui.png" alt="">
                                </div>
                                <div class="">
                                    <h6>UI/UX Designer</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir_analyze.png" alt="">
                                </div>
                                <div class="">
                                    <h6>System Analist</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir_management.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Management </h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir_media.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Media & Ads</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                        <div class="career-item d-block d-sm-flex">
                            <div class="career-title d-flex align-items-center">
                                <div class="career-icon">
                                    <img src="assets/icons/ic_karir_illustration.png" alt="">
                                </div>
                                <div class="">
                                    <h6>Icon & Illustration</h6>
                                    <p>Member</p>
                                </div>
                            </div>
                            <div class="career-member">
                                <p class="">3 Orang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('script-body')
    {{-- Bar chart Script --}}
    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des", ],
                datasets: [{
                    label: "Page Views",
                    labelsColor: '#fff',
                    backgroundColor: '#F0F0F0',
                    data: [12, 203, 200, 28, 100, 200, 299, 300, 203, 200, 28, 100],
                    borderWidth: 1,
                    color: '#fff',
                    borderRadius: 4,
                    barThickness: 16,
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                scales: {
                    x: {
                        grid: {
                            drawOnChartArea: false,
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            color: 'white',
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawOnChartArea: false,
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            color: "white",
                        },
                    },
                }
            }
        });
    </script>
@endsection
