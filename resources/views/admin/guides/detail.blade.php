@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Event</h3>
                </div>
                <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/events'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="overflow-x-auto w-100">
                    <table id="items" class="">
                        <tr class="bg-[#F6F6F6] text-sm ">
                            <th class="col-one">Judul</th>
                            <th class="col-three">Tempat</th>
                            <th class="col-three">Tanggal</th>
                        </tr>
                        <tr class="table-item">
                            <td class="">
                                <div class="first-column">
                                        <p class="first-p">{{ $event->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="">{{ $event->place }}</td>
                            <td class="">{{ $event->date }}</td>
                            <td class="">
                                <img src="" alt="" style="width: 200px; border-radius: 8px;">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="content-wrapper mt-5">
                <div class="w-100">
                    <div class="article-image">
                        <img src="{{ Storage::url($event->image) }}" alt="">
                    </div>
                </div>
                <div class="w-100">
                    <div class="pt-4">
                        <h5 class="mb-0">
                            Deskripsi
                        </h5>
                        <div class="pt-1">
                            <p>{!! $event->desc !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
