@extends('partials.master')
@section('content')

{{-- Get partials --}}
@include('partials.header')
<section class="kalender-event">
    <div class="container w-100 mb-5">
        <button>
            <a href="../#"><img src="../assets/icons/back-arrow.svg" alt="back"></a>
        </button>
        <div class="judul-event mt-3">
            <h3>Red Island Gandrung Surf Sukses Ramaikan Pantai Pulau Mera dan Wisata Alam Lainnya</h3>
        </div>
        <div class="body-event">
            <div class="col-6 poster-event mt-3">
                <img src="../assets/pict/poster.jpg" alt="">
            </div>
            <div class="body-cerita mt-4">
                <div class="content-cerita w-100">
                    <div class="author">
                        <h6>By Admin</h6>
                        <small>7 Agustus 2023</small>
                    </div>
                    <div class="cerita-user mt-2 mb-5">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt placeat quis provident nemo minima ratione tempore corporis magni in consequatur exercitationem impedit suscipit obcaecati aliquid optio similique, commodi est expedita quisquam fugiat illo. Ipsum sit, dolor, laborum tenetur et sint aut minima libero enim, sequi cum quis voluptates? Nulla rem quibusdam, a fugiat tempore atque ex cupiditate nostrum incidunt dolorum quae minima accusantium natus numquam eligendi laborum neque eveniet recusandae officia possimus eaque odit quaerat? Veritatis optio quo, laboriosam a exercitationem dolorem distinctio fugiat at quas quidem quos commodi facilis ipsum similique voluptates et, magni aliquid! Fugiat ipsam fuga illum sint animi magnam deserunt assumenda laudantium maxime, repudiandae molestiae architecto, molestias ea dicta voluptatem nam quos! Non ab nobis rem quae exercitationem repellendus eius totam quas inventore veniam! Minima quaerat perferendis et, in voluptatum, aliquam accusamus, facilis</p>
                    </div>
                </div>
                <div class="info-wrapper p-2">
                    <div class="event-content">
                        <h5 class="mt-2 mx-2">Informasi</h5>
                        <div class="mt-3 mx-2 content-wrapper">
                            <div class="htm-info">
                                <h6>HTM</h6>
                                <p>Rp. 15.000/ Orang</p>
                            </div>
                            <div class="info-lokasi">
                                <h6>Lokasi</h6>
                                <p>Ds. Pandean, Trenggalek, Jawa Timur</p>
                            </div>
                            <div class="info-kontak">
                                <h6>Kontak</h6>
                                <p>081234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery" id="gallery">
    <div class="container mx-auto">
        <div class="row mt-5 mb-5 justify-content-center">
            <img src="../assets/pict/poster.jpg" alt="">
            <img src="../assets/pict/hero-deswisata.png" alt="">
            <img src="../assets/pict/hero-wisata.jpg" alt="">
            <img src="../assets/pict/destinasi.jpg" alt="">
            <img src="../assets/pict/poster.jpg" alt="">
            <img src="../assets/pict/hero-homepage.png" alt="">
            <img src="../assets/pict/hero-homepage.png" alt="">
            <img src="../assets/pict/hero-deswisata.png" alt="">
            <img src="../assets/pict/destinasi.jpg" alt="">
        </div>
    </div>
</section>
<section class="maps">
    <div class="container">
        <div class="w-100 mt-5 mb-5">
            <h5>Lokasi/Peta</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252760.8614731597!2d111.46970935265813!3d-8.163560318840469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791ad33bad6389%3A0x19f173f90f85d9be!2sTrenggalek%2C%20Kabupaten%20Trenggalek%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1694351083338!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-4"></iframe>
        </div>
    </div>
</section>

@include('partials.footer')


@endsection
