@extends('partials.master')
@include('partials.header')

@section('content')
    <div class="page-content">
        <div class="bd-content">
            <section class="peta-wisata pt-5">
                <div class="container">
                    <div class="banner-peta col-md-12 relative mb-3">
                        <img src="../assets/pict/hero-wisata.jpg" alt="Desa Wisata" />
                        <a href="/">
                            <button class="btn button-back">
                                <i class="fa fa-arrow-left"></i>
                            </button>
                        </a>
                        <h1 class="heading">Peta & Panduan</h1>
                    </div>
                    <div class="row leaflet mt-2 mb-3 pb-3 pt-3">
                        <div class="leaflet-title">
                            <h5 style="text-align: center">Panduan Wisatawan</h5>
                        </div>
                        <div class="leaflet-content mx-auto d-flex">
                            <div class="leaflet-desc w-100 text-align-center">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error, in voluptatum nemo ea facilis rerum distinctio corrupti fugit consequatur fuga.</p>
                            </div>
                        </div>
                        <div class="leaflet-list">
                            @if ($leaflets->count() > 0)
                            <ul class="w-100">
                                @foreach ($leaflets as $leaflet)
                                <li onclick="window.open('{{ $leaflet->link }}', '_blank');" >
                                    <div class="leaflet-content-info d-flex ">
                                        <div class="w-100 leaflet-info">
                                            <a href="{{ $leaflet->link }}" target="_blank">{{ $leaflet->name }}</a>
                                        </div>
                                        <div class="leaflet-popup">
                                            <a href="{{ $leaflet->link }}" target="_blank">
                                                <svg fill="#000000" width="20px" height="30px" viewBox="0 0 36.00 36.00" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#000000" stroke-width="0.00036"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.576"></g><g id="SVGRepo_iconCarrier"> <title>pop-out-line</title> <path class="clr-i-outline clr-i-outline-path-1" d="M27,33H5a2,2,0,0,1-2-2V9A2,2,0,0,1,5,7H15V9H5V31H27V21h2V31A2,2,0,0,1,27,33Z"></path><path class="clr-i-outline clr-i-outline-path-2" d="M18,3a1,1,0,0,0,0,2H29.59L15.74,18.85a1,1,0,1,0,1.41,1.41L31,6.41V18a1,1,0,0,0,2,0V3Z"></path> <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect> </g></svg>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                            @else
                            <div class="pt-5">
                                <p>Nothing data found.</p>
                            </div>
                        @endif
                        </div>
                    </div>
                    <div class="peta-judul">
                        <h5>Peta Digital</h5>
                    </div>
                    <div id="map" style="height: 600px; margin-bottom: 30px"></div>
                </div>
            </section>
        </div>
    </div>
    @include('partials.footer')
    <script>
        var mapStyles = [{
            featureType: 'poi',
            elementType: 'labels.icon',
            stylers: [{
                visibility: 'off'
            }]
        }];

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {
                    lat: -8.076297437961918,
                    lng: 111.7064066598307
                },
                styles: mapStyles
            });



            // Data lokasi dari server atau sumber lain
            @if ($maps->count() > 0)
                var locations = [
                    @foreach ($maps as $map)
                        {
                            name: '{{ $map->name }}',
                            latitude: {{ $map->coordinate_x }},
                            longitude: {{ $map->coordinate_y }},
                            icon: {
                                url: '{{ asset('storage/' . optional($map->category)->image) }}',
                                scaledSize: new google.maps.Size(50, 50) // Tentukan ukuran yang diinginkan
                            }
                        },
                    @endforeach
                ];
            @else
                var locations = [];
            @endif

            locations.forEach(function(location) {
                var marker = new google.maps.Marker({
                    position: {
                        lat: location.latitude,
                        lng: location.longitude
                    },
                    map: map,
                    title: location.name,
                    icon: location.icon
                });

                // Menambahkan event listener untuk setiap marker
                marker.addListener('click', function() {
                    // Membuka Google Maps dengan koordinat yang ditunjukkan
                    var url = 'https://www.google.com/maps?q=' + location.latitude + ',' + location
                        .longitude;
                    window.open(url, '_blank'); // Membuka tautan di jendela baru
                });
            });

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXC7yQc9_ZH_eBCfLWH6qvLf3KpuMu68U&callback=initMap" async
        defer></script>
@endsection
