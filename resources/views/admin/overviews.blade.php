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
            <div class="content-wrapper">
                <div class="row w-100">
                    <div class="col-lg-3 pe-5 text-center">
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $accessData['accessCountsThisMonthDaily'] }}</h1>
                                {{-- @foreach ($accessData['monthlyCounts'] as $month => $count)
                                    Bulan {{ $month }}: {{ $count }} akses
                                @endforeach --}}
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <h6 class="m-0">Akses hari ini</h6>
                            </div>
                        </div>
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $accessData['accessCountsThisMonth'] }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <h6 class="m-0">Akses Bulan ini</h6>
                            </div>
                        </div>
                        <div class="px-4 ">
                            <div class="">
                                <h1>{{ $accessData['accessCountsThisYear'] }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <h6 class="m-0">Akses Tahun ini</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <canvas id="myChart" height="400px"></canvas>
                    </div>
                </div>
            </div>
            <div class="content-wrapper mt-4">
                <div class="row w-100 total-data align-items-start">
                    <div class="col-lg-4">
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $attractionData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M288 896h448q32 0 32 32t-32 32H288q-32 0-32-32t32-32z" />
                                    <path fill="currentColor"
                                        d="M800 416a288 288 0 1 0-576 0c0 118.144 94.528 272.128 288 456.576C705.472 688.128 800 534.144 800 416zM512 960C277.312 746.688 160 565.312 160 416a352 352 0 0 1 704 0c0 149.312-117.312 330.688-352 544z" />
                                    <path fill="currentColor"
                                        d="M512 512a96 96 0 1 0 0-192 96 96 0 0 0 0 192zm0 64a160 160 0 1 1 0-320 160 160 0 0 1 0 320z" />
                                </svg>
                                <h6 class="m-0">Data Atraksi</h6>
                            </div>
                        </div>
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $hotelData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2729 14.7351C21.6859 14.7661 21.9949 15.1271 21.9639 15.5401L21.7739 18.0491C21.6169 20.1191 19.8699 21.7401 17.7949 21.7401H6.19494C4.11994 21.7401 2.37294 20.1191 2.21594 18.0491L2.02594 15.5401C1.99494 15.1271 2.30494 14.7661 2.71794 14.7351C3.13294 14.7201 3.49094 15.0131 3.52294 15.4271L3.71194 17.9351C3.80994 19.2271 4.89994 20.2401 6.19494 20.2401H17.7949C19.0899 20.2401 20.1809 19.2271 20.2779 17.9351L20.4679 15.4271C20.4999 15.0131 20.8669 14.7191 21.2729 14.7351ZM13.2851 2C14.7881 2 16.0332 3.12626 16.2207 4.57903L18.1902 4.5799C20.2862 4.5799 21.9902 6.2889 21.9902 8.3909V11.8299C21.9902 12.0969 21.8482 12.3429 21.6192 12.4769C19.1509 13.9224 16.0242 14.7655 12.7448 14.878L12.7451 16.6766C12.7451 17.0906 12.4091 17.4266 11.9951 17.4266C11.5811 17.4266 11.2451 17.0906 11.2451 16.6766L11.2445 14.8782C7.96843 14.7668 4.8414 13.9235 2.37124 12.4769C2.14124 12.3429 2.00024 12.0969 2.00024 11.8299V8.3809C2.00024 6.2849 3.70924 4.5799 5.81024 4.5799L7.76955 4.57903C7.95709 3.12626 9.20221 2 10.7051 2H13.2851ZM18.1902 6.0799H5.81024C4.53624 6.0799 3.50024 7.1119 3.50024 8.3809V11.3929C5.87396 12.6827 8.86648 13.3895 11.9812 13.3909L11.9951 13.3896L12.0062 13.39L12.4824 13.385C15.4282 13.3149 18.2383 12.616 20.4902 11.3929V8.3909C20.4902 7.1159 19.4592 6.0799 18.1902 6.0799ZM13.2851 3.5H10.7051C10.0318 3.5 9.4634 3.95827 9.29549 4.57928H14.6948C14.5269 3.95827 13.9585 3.5 13.2851 3.5Z"
                                        fill="currentColor" />
                                </svg>
                                <h6 class="m-0">Data Akomodasi</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="">
                                <h1>{{ $shopData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.2729 14.7351C21.6859 14.7661 21.9949 15.1271 21.9639 15.5401L21.7739 18.0491C21.6169 20.1191 19.8699 21.7401 17.7949 21.7401H6.19494C4.11994 21.7401 2.37294 20.1191 2.21594 18.0491L2.02594 15.5401C1.99494 15.1271 2.30494 14.7661 2.71794 14.7351C3.13294 14.7201 3.49094 15.0131 3.52294 15.4271L3.71194 17.9351C3.80994 19.2271 4.89994 20.2401 6.19494 20.2401H17.7949C19.0899 20.2401 20.1809 19.2271 20.2779 17.9351L20.4679 15.4271C20.4999 15.0131 20.8669 14.7191 21.2729 14.7351ZM13.2851 2C14.7881 2 16.0332 3.12626 16.2207 4.57903L18.1902 4.5799C20.2862 4.5799 21.9902 6.2889 21.9902 8.3909V11.8299C21.9902 12.0969 21.8482 12.3429 21.6192 12.4769C19.1509 13.9224 16.0242 14.7655 12.7448 14.878L12.7451 16.6766C12.7451 17.0906 12.4091 17.4266 11.9951 17.4266C11.5811 17.4266 11.2451 17.0906 11.2451 16.6766L11.2445 14.8782C7.96843 14.7668 4.8414 13.9235 2.37124 12.4769C2.14124 12.3429 2.00024 12.0969 2.00024 11.8299V8.3809C2.00024 6.2849 3.70924 4.5799 5.81024 4.5799L7.76955 4.57903C7.95709 3.12626 9.20221 2 10.7051 2H13.2851ZM18.1902 6.0799H5.81024C4.53624 6.0799 3.50024 7.1119 3.50024 8.3809V11.3929C5.87396 12.6827 8.86648 13.3895 11.9812 13.3909L11.9951 13.3896L12.0062 13.39L12.4824 13.385C15.4282 13.3149 18.2383 12.616 20.4902 11.3929V8.3909C20.4902 7.1159 19.4592 6.0799 18.1902 6.0799ZM13.2851 3.5H10.7051C10.0318 3.5 9.4634 3.95827 9.29549 4.57928H14.6948C14.5269 3.95827 13.9585 3.5 13.2851 3.5Z"
                                        fill="currentColor" />
                                </svg>
                                <h6 class="m-0">Data Pusat Oleh-Oleh</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="px-4 pt-md-0 pt-5 pb-5">
                            <div class="">
                                <h1>{{ $culinaryData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" viewBox="0 -4.83 52 52" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group_49" data-name="Group 49" transform="translate(-788.946 -1785.428)">
                                        <path id="Path_131" data-name="Path 131"
                                            d="M814.946,1793.095a24,24,0,0,0-24,24h48A24,24,0,0,0,814.946,1793.095Z"
                                            fill="transparent" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="4" />
                                        <line id="Line_51" data-name="Line 51" x2="48"
                                            transform="translate(790.946 1825.761)" fill="#ffffff" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
                                        <line id="Line_52" data-name="Line 52" y2="5.667"
                                            transform="translate(814.946 1787.428)" fill="#ffffff" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
                                    </g>
                                </svg>
                                <h6 class="m-0">Data Wisata Kuliner</h6>
                            </div>
                        </div>
                        <div class="px-4 pb-5">
                            <div class="">
                                <h1>{{ $travelData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.9436 1.25H12.0564C13.8942 1.24998 15.3498 1.24997 16.489 1.40314C17.6614 1.56076 18.6104 1.89288 19.3588 2.64124C20.1071 3.38961 20.4392 4.33856 20.5969 5.51098C20.6996 6.27504 20.7334 7.18144 20.7445 8.25H21C21.9665 8.25 22.75 9.0335 22.75 10V11C22.75 11.5508 22.4907 12.0695 22.05 12.4L20.7475 13.3768C20.7402 14.6093 20.7113 15.6375 20.5969 16.489C20.4392 17.6614 20.1071 18.6104 19.3588 19.3588C19.1689 19.5486 18.9661 19.7117 18.75 19.852V21C18.75 21.9665 17.9665 22.75 17 22.75H15.5C14.5335 22.75 13.75 21.9665 13.75 21V20.7445C13.2253 20.75 12.6616 20.75 12.0564 20.75H11.9436C11.3384 20.75 10.7747 20.75 10.25 20.7445V21C10.25 21.9665 9.4665 22.75 8.5 22.75H7C6.0335 22.75 5.25 21.9665 5.25 21V19.852C5.03392 19.7117 4.83112 19.5486 4.64124 19.3588C3.89288 18.6104 3.56076 17.6614 3.40313 16.489C3.28866 15.6375 3.25975 14.6093 3.25246 13.3768L1.95 12.4C1.50934 12.0695 1.25 11.5508 1.25 11V10C1.25 9.0335 2.0335 8.25 3 8.25H3.25546C3.26659 7.18144 3.30041 6.27504 3.40313 5.51098C3.56076 4.33856 3.89288 3.38961 4.64124 2.64124C5.38961 1.89288 6.33855 1.56076 7.51098 1.40314C8.65019 1.24997 10.1058 1.24998 11.9436 1.25ZM3.25 9.75H3C2.86193 9.75 2.75 9.86193 2.75 10V11C2.75 11.0787 2.78705 11.1528 2.85 11.2L3.25 11.5L3.25 9.94359C3.25 9.87858 3.25 9.81405 3.25 9.75ZM4.75573 13.75C4.76662 14.7836 4.79821 15.6082 4.88976 16.2892C5.02502 17.2952 5.27869 17.8749 5.7019 18.2981C6.12511 18.7213 6.70476 18.975 7.71085 19.1102C8.73851 19.2484 10.0932 19.25 12 19.25C13.9068 19.25 15.2615 19.2484 16.2892 19.1102C17.2952 18.975 17.8749 18.7213 18.2981 18.2981C18.7213 17.8749 18.975 17.2952 19.1102 16.2892C19.2018 15.6082 19.2334 14.7836 19.2443 13.75H4.75573ZM19.25 12.25H4.75002C4.75 12.1677 4.75 12.0844 4.75 12V10C4.75 8.1173 4.75155 6.77287 4.88458 5.75H19.1154C19.2484 6.77287 19.25 8.1173 19.25 10V12C19.25 12.0844 19.25 12.1677 19.25 12.25ZM20.75 11.5L21.15 11.2C21.213 11.1528 21.25 11.0787 21.25 11V10C21.25 9.86193 21.1381 9.75 21 9.75H20.75C20.75 9.81405 20.75 9.87858 20.75 9.94359V11.5ZM18.701 4.25C18.5882 4.03672 18.4548 3.85859 18.2981 3.7019C17.8749 3.27869 17.2952 3.02502 16.2892 2.88976C15.2615 2.75159 13.9068 2.75 12 2.75C10.0932 2.75 8.73851 2.75159 7.71085 2.88976C6.70476 3.02502 6.12511 3.27869 5.7019 3.7019C5.54522 3.85859 5.41177 4.03672 5.29896 4.25H18.701ZM6.75 20.4605V21C6.75 21.1381 6.86193 21.25 7 21.25H8.5C8.63807 21.25 8.75 21.1381 8.75 21V20.7042C8.30066 20.6815 7.88845 20.6476 7.51098 20.5969C7.24599 20.5612 6.99242 20.5167 6.75 20.4605ZM15.25 20.7042V21C15.25 21.1381 15.3619 21.25 15.5 21.25H17C17.1381 21.25 17.25 21.1381 17.25 21V20.4605C17.0076 20.5167 16.754 20.5612 16.489 20.5969C16.1116 20.6476 15.6993 20.6815 15.25 20.7042ZM6.25 16C6.25 15.5858 6.58579 15.25 7 15.25H8.5C8.91421 15.25 9.25 15.5858 9.25 16C9.25 16.4142 8.91421 16.75 8.5 16.75H7C6.58579 16.75 6.25 16.4142 6.25 16ZM14.75 16C14.75 15.5858 15.0858 15.25 15.5 15.25H17C17.4142 15.25 17.75 15.5858 17.75 16C17.75 16.4142 17.4142 16.75 17 16.75H15.5C15.0858 16.75 14.75 16.4142 14.75 16Z"
                                        fill="currentColor" />
                                </svg>
                                <h6 class="m-0">Data Biro Perjalanan</h6>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="px-4 pb-5 pt-md-0 pt-5">
                            <div class="">
                                <h1>{{ $userData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.59176 13.957C12.8508 13.957 17.1838 14.324 17.1838 17.499C17.1838 20.8435 12.1349 21.0442 9.96916 21.0562L9.18286 21.0562C6.87369 21.0443 1.99976 20.8447 1.99976 17.519C1.99976 14.1707 7.04865 13.9698 9.21435 13.9578L9.47455 13.957C9.5151 13.957 9.5542 13.957 9.59176 13.957ZM9.59176 15.457C6.81276 15.457 3.49976 15.814 3.49976 17.519C3.49976 18.871 5.54976 19.557 9.59176 19.557C13.6338 19.557 15.6838 18.864 15.6838 17.499C15.6838 16.144 13.6338 15.457 9.59176 15.457ZM18.7065 13.4899C21.4125 13.8949 21.9795 15.1479 21.9795 16.1269C21.9795 16.8559 21.6645 17.8429 20.1615 18.4119C20.0745 18.4449 19.9845 18.4609 19.8955 18.4609C19.5925 18.4609 19.3075 18.2759 19.1945 17.9769C19.0475 17.5899 19.2425 17.1559 19.6295 17.0099C20.4795 16.6879 20.4795 16.2949 20.4795 16.1269C20.4795 15.5599 19.8085 15.1719 18.4855 14.9749C18.0755 14.9129 17.7925 14.5309 17.8535 14.1219C17.9155 13.7119 18.3045 13.4369 18.7065 13.4899ZM9.59176 2C12.4228 2 14.7268 4.304 14.7268 7.135C14.7328 8.499 14.2038 9.787 13.2398 10.757C12.2778 11.728 10.9928 12.265 9.62576 12.27H9.59176C6.75976 12.27 4.45576 9.966 4.45576 7.135C4.45576 4.304 6.75976 2 9.59176 2ZM16.6794 3.1238C18.6444 3.4458 20.0704 5.1268 20.0704 7.1198C20.0664 9.1248 18.5694 10.8468 16.5874 11.1248C16.5524 11.1298 16.5174 11.1318 16.4824 11.1318C16.1144 11.1318 15.7934 10.8608 15.7404 10.4858C15.6834 10.0758 15.9684 9.6958 16.3784 9.6388C17.6264 9.4638 18.5684 8.3808 18.5704 7.1188C18.5704 5.8648 17.6724 4.8068 16.4374 4.6048C16.0284 4.5368 15.7514 4.1518 15.8184 3.7428C15.8854 3.3338 16.2724 3.0588 16.6794 3.1238ZM9.59176 3.5C7.58676 3.5 5.95576 5.131 5.95576 7.135C5.95576 9.139 7.58676 10.77 9.59176 10.77H9.62276C10.5868 10.766 11.4948 10.387 12.1758 9.7C12.8578 9.015 13.2308 8.104 13.2268 7.138C13.2268 5.131 11.5958 3.5 9.59176 3.5Z"
                                        fill="currentColor" />
                                </svg>
                                <h6 class="m-0">Data User</h6>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="">
                                <h1>{{ $eventData }}</h1>
                            </div>
                            <div class="d-flex gap-2 align-items-center justify-content-center pt-3 border-top">
                                <svg width="22" viewBox="0 0 20 20" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>time / 27 - time, calendar, time, date, event, planner, shedule, task icon
                                    </title>
                                    <g id="Free-Icons" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g transform="translate(-303.000000, -748.000000)" id="Group"
                                            stroke="currentColor" stroke-width="2">
                                            <g transform="translate(301.000000, 746.000000)" id="Shape">
                                                <circle cx="15.5" cy="15.5" r="5.5">


                                                </circle>
                                                <polyline points="15.5 13.3440934 15.5 15.5 17 17">

                                                </polyline>
                                                <line x1="17" y1="3" x2="17" y2="5">

                                                </line>
                                                <line x1="7" y1="3" x2="7" y2="5">

                                                </line>
                                                <path
                                                    d="M8.03064542,21 C7.42550126,21 6.51778501,21 5.30749668,21 C4.50512981,21 4.2141722,20.9218311 3.92083887,20.7750461 C3.62750553,20.6282612 3.39729582,20.4128603 3.24041943,20.1383964 C3.08354305,19.8639324 3,19.5916914 3,18.8409388 L3,7.15906122 C3,6.4083086 3.08354305,6.13606756 3.24041943,5.86160362 C3.39729582,5.58713968 3.62750553,5.37173878 3.92083887,5.22495386 C4.2141722,5.07816894 4.50512981,5 5.30749668,5 L18.6925033,5 C19.4948702,5 19.7858278,5.07816894 20.0791611,5.22495386 C20.3724945,5.37173878 20.6027042,5.58713968 20.7595806,5.86160362 C20.9164569,6.13606756 21,7.24671889 21,7.99747152">

                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <h6 class="m-0">Data Events</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        {{-- Bar chart Script --}}
        <script>
            let access_dates = {!! json_encode(
                $access_counts->pluck('date')->map(function ($date) {
                    return \Carbon\Carbon::parse($date)->format('d-m-Y');
                }),
            ) !!};

            let access_counts = {!! json_encode($access_counts->pluck('access_count')) !!};


            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: access_dates,
                    datasets: [{
                        label: "Web Access",
                        labelsColor: '#fcb600',
                        backgroundColor: '#fcb600',
                        data: access_counts,
                        borderWidth: 1,
                        color: '#fcb600',
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
                                color: '#fcb600',
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
                                color: "#fcb600",
                                precision: 0,
                            },
                        },
                    }
                }
            });
        </script>
    </section>
@endsection
