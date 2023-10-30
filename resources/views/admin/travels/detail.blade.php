@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Detail Biro Perjalanan</h3>
                </div>
                <div class="d-flex gap-md-3 gap-2 flex-wrap align-items-center justify-content-end">
                    <button type="button" class="primary-button" onclick="location.href='/admin/travels'">Kembali</button>
                    @can('admin-biro')
                    <button type="button" class="second-button"
                        onclick="location.href='/admin/travels/{{ $travel->slug }}/edit'">Edit</button>
                    @endcan
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="col-12 col-md-6">
                        <div class="pb-3">
                            <h5>Nama Biro Perjalanan</h5>
                            <p>{{ $travel->name }}</p>
                        </div>
                        <div class="pb-3">
                            <h5>Alamat</h5>
                            <p>{{ $travel->address }}</p>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pb-3">
                            <h5>Contact</h5>
                            <p>{{ $travel->contact }}</p>
                        </div>
                    </div>
                </div>
                <div class="pt-3 border-bottom w-100">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-3">
                        <p>
                            {!! $travel->description !!}
                        </p>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-100">
                        <div class="">
                            <h5>
                                Gambar
                            </h5>
                            <div class="image-list pt-3 w-100 d-md-flex gap-2">
                                {{-- Hero Image --}}
                                    <div class="image-card">
                                        <img src="{{ Storage::url($travel->image) }}" alt="">
                                    </div>
                                {{-- Gallery Image --}}
                                {{-- <div class=""> --}}
                                    @foreach ($travel->images as $image)
                                        <div class="image-card">
                                            <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                                        </div>
                                    @endforeach
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2 pt-5">
                <div class="">
                    <h3 class="mb-0">Daftar Paket</h3>
                </div>
                @can('admin-biro')
                <button type="button" class="second-button"
                    onclick="location.href='/admin/travels/{{ $travel->slug }}/travel-menus/create'">Tambah Paket</button>
                @endcan
            </div>

            @if ($travelMenus->count() > 0)
            @foreach ($travelMenus as $travelMenu)
            <div class="content-wrapper p-4 mb-4">
                <div class="image-list pt-3 w-100 d-md-flex gap-2">
                    {{-- Hero Image --}}
                        <div class="image-card">
                            <img src="{{ Storage::url($travelMenu->image) }}" alt="">
                        </div>
                    {{-- Gallery Image --}}
                    {{-- <div class=""> --}}
                        @foreach ($travelMenu->images as $image)
                            <div class="image-card">
                                <img src="{{ asset('storage/' . $image->other_image) }}" alt="Image">
                            </div>
                        @endforeach
                    {{-- </div> --}}
                </div>
                <div class=" w-100 d-flex align-items-start justify-content-between border-bottom">
                    <div class="">
                    <h4>{{ $travelMenu->name }}</h4>
                        <p>Rp.{{ $travelMenu->price }}</p>
                        <div class="">
                            <p>
                                {!! $travelMenu->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer w-100 mt-2">
                    @can('admin-biro')
                    <button type="button" class="btn cancel-btn mb-0" onclick="location.href='/admin/travels/{{ $travel->slug }}/travel-menus/{{ $travelMenu->slug }}/edit'">Edit</button>
                    <form action="/admin/travels/{{ $travel->slug }}/travel-menus/{{ $travelMenu->slug }}" method="POST"
                        onsubmit="return confirm('Apakah anda yakin ingin menghapus item ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete-btn mb-0 me-0">Hapus</button>
                    </form>
                    @endcan
                </div>
            </div>
            @endforeach
        @else
            <div class="pt-5">
                <p>Tidak ada data paket.</p>
            </div>
        @endif
        </div>


        </div>
    </section>
@endsection
