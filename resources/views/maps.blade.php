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
                                <svg width="20" height="25" viewBox="0 0 36 41" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.1287 20.3381H2M2 20.3381L17.4218 2M2 20.3381L17.4218 38.6763"
                                        stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </a>
                        <h1 class="heading">Peta Wisata</h1>
                    </div>
                    <div id="map" style="height: 600px;"></div>
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
