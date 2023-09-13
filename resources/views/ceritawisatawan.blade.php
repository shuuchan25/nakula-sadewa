@extends('layouts.master')
@section('content')

{{-- Get partials --}}
@include('user.partials.header')
<section class="cerita">
    <div class="container w-100 mb-5">
        <button>
            <a href="../#"><img src="../assets/icons/back-arrow.svg" alt="back"></a>
        </button>
        <div class="nama-wisatawan mt-3">
            <h3>Cholis Hock Mudjainab</h3>
        </div>
        <div class="gambar-wisatawan mt-3" style="position: relative">
            <img src="../assets/pict/hero-homepage.png" alt="">
        </div>
        <div class="body-cerita mt-4">
            <div class="content-cerita">
                <div class="author">
                    <h6>By Admin</h6>
                    <small>7 Agustus 2023</small>
                </div>
                <div class="cerita-user mt-4 mb-5">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt placeat quis provident nemo minima ratione tempore corporis magni in consequatur exercitationem impedit suscipit obcaecati aliquid optio similique, commodi est expedita quisquam fugiat illo. Ipsum sit, dolor, laborum tenetur et sint aut minima libero enim, sequi cum quis voluptates? Nulla rem quibusdam, a fugiat tempore atque ex cupiditate nostrum incidunt dolorum quae minima accusantium natus numquam eligendi laborum neque eveniet recusandae officia possimus eaque odit quaerat? Veritatis optio quo, laboriosam a exercitationem dolorem distinctio fugiat at quas quidem quos commodi facilis ipsum similique voluptates et, magni aliquid! Fugiat ipsam fuga illum sint animi magnam deserunt assumenda laudantium maxime, repudiandae molestiae architecto, molestias ea dicta voluptatem nam quos! Non ab nobis rem quae exercitationem repellendus eius totam quas inventore veniam! Minima quaerat perferendis et, in voluptatum, aliquam accusamus, facilis ducimus aliquid maiores porro fuga? Assumenda molestiae distinctio quidem et dignissimos veniam modi sint dicta? Ad reprehenderit magni atque aspernatur tenetur excepturi dolores, optio minima a delectus sapiente veniam repellendus natus quod similique. Quam, possimus! Minus corporis deleniti dignissimos voluptatibus expedita ratione molestias doloribus temporibus repellat cum repellendus sunt reprehenderit provident quas quo eaque, omnis dolores est possimus rem porro! Hic, repellat aut!</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('user.partials.footer')


@endsection
