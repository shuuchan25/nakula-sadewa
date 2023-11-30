@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Digital Map</h3>
                </div>
                <div class="d-flex gap-sm-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/maps'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="w-100">
                    <div id="map" style="height: 700px;"></div>
                </div>
            </div>
        </div>

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
    </section>
@endsection
