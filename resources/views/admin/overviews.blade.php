@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hi Admin,</p>
                    <h3 class="">Overviews</h3>
                </div>
            </div>
            {{-- <div class="chart-wrapper">
                <div class="pb-lg-4 pb-md-2">
                    <p>Visitor on December</p>
                </div>
                <div class="row align-items-start">
                    <div class="page-views col-lg-2 d-md-none d-none gap-4 gap-md-0 d-lg-block">
                        <h1>17</h1>
                    </div>
                </div>
            </div> --}}
            <div class="content-wrapper">
                <div class="row w-100  total-data align-items-start">
                    <div class="col-lg-4">
                            <div class="px-4  pb-5">
                                <div class="">
                                    <h1>100</h1>
                                </div>
                                <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                    <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                                    <h6 class="m-0">Desa Wisata</h6>
                                </div>
                            </div>
                            <div class="px-4">
                                <div class="">
                                    <h1>{{ $hotelData }}</h1>
                                </div>
                                <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                    <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                                    <h6 class="m-0">Penginapan</h6>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="px-4  pb-5">
                            <div class="">
                                <h1>100</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                                <h6 class="m-0">Wisata Kuliner</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="">
                                <h1>100</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                                <h6 class="m-0">Biro Perjalanan</h6>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                    <div class="px-4 pb-5">
                        <div class="">
                            <h1>100</h1>
                        </div>
                        <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                            <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                            <h6 class="m-0">Destinasi Wisata</h6>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="">
                            <h1>100</h1>
                        </div>
                        <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                            <svg width="24"  viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z"/><path fill="currentColor" d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z"/><path fill="currentColor" d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z"/></svg>
                            <h6 class="m-0">Events</h6>
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
