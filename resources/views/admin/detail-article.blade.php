@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Destinasi Wisata</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='{{ route('article.index') }}'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="overflow-x-auto w-100">
                    <table id="items" class="">
                        <tr class="bg-[#F6F6F6] text-sm ">
                            <th class="col-one">Judul</th>
                            <th class="col-three">Author</th>
                            <th class="col-three">Image</th>
                        </tr>
                        <tr class="table-item">
                            <td class="">
                                <div class="first-column">
                                        <p class="first-p">{{ $article->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="">{{ $article->author }}</td>
                            <td class="">
                                <img src="{{ Storage::url($article->image) }}" alt="" style="width: 200px; border-radius: 8px;">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="content-wrapper mt-5">
                <div class="w-100">
                    <div class="pt-4">
                        <h5 class="mb-0">
                            Deskripsi
                        </h5>
                        <div class="pt-4">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere facilis quas ea fugit
                                mollitia ullam obcaecati quasi, quidem nesciunt quis quae, necessitatibus ratione dolorum
                                dignissimos aperiam accusamus amet velit magnam tenetur optio laudantium, quo expedita. Quae
                                fugiat, modi quam rem pariatur excepturi iusto molestias facere soluta. Sequi praesentium
                                nobis molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla vel nostrum
                                maiores iste ab, accusamus numquam labore laudantium sint sequi cumque id dignissimos harum
                                fugiat placeat voluptates quisquam tempore, aliquam quia quae qui! Ipsam, dolores! Obcaecati
                                dolores molestiae dolorem. Pariatur corporis, sapiente sint iure dolorem quaerat praesentium
                                deleniti nulla maiores!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
