@extends('layouts.master')
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
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt placeat quis provident nemo minima ratione tempore corporis magni in consequatur exercitationem impedit suscipit obcaecati aliquid optio similique, commodi est expedita quisquam fugiat illo. Ipsum sit, dolor, laborum tenetur et sint aut minima libero enim, sequi cum quis voluptates? Nulla rem quibusdam, a fugiat tempore atque ex cupiditate nostrum incidunt dolorum quae minima accusantium natus numquam eligendi laborum neque eveniet recusandae officia possimus eaque odit quaerat? Veritatis optio quo, laboriosam a exercitationem dolorem distinctio fugiat at quas quidem quos commodi facilis ipsum similique voluptates et, magni aliquid! Fugiat ipsam fuga illum sint animi magnam deserunt assumenda laudantium maxime, repudiandae molestiae architecto, molestias ea dicta voluptatem nam quos! Non ab nobis rem quae exercitationem repellendus eius totam quas inventore veniam! Minima quaerat perferendis et, in voluptatum, aliquam accusamus, facilis ducimus aliquid maiores porro fuga? Assumenda molestiae distinctio quidem et dignissimos veniam modi sint dicta? Ad reprehenderit magni atque aspernatur tenetur excepturi dolores</p>
                    </div>
                </div>
                <div class="info-event p-2">
                    <h4>Informasi</h4>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')


@endsection
