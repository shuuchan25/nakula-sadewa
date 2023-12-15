@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-sm-flex align-items-center justify-content-between pb-lg-3 pb-2">
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
                            <h5>Kontak</h5>
                            <p>{{ $travel->contact }}</p>
                        </div>
                    </div>
                </div>
                <div class="py-3 border-bottom w-100">
                    <h5 class="mb-0">
                        Deskripsi
                    </h5>
                    <div class="pt-3">
                        {!! $travel->description !!}
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

            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('errors'))
                    <div id="alert-success" class="alert alert-danger w-100">
                        {{ session('errors') }}
                    </div>
                @endif

                @can('superadmin')
                    <div class="overflow-x-auto w-100">
                        @if ($travelMenus->count() > 0)
                            <table id="table-container" class="">
                                <tr class="bg-[#F6F6F6] text-sm ">
                                    <th class="col-one">Nama Paket</th>
                                    <th class="col-three">Harga</th>
                                    <th class="col-three">Gambar</th>
                                    <th class="col-five">Aksi</th>
                                </tr>
                                @foreach ($travelMenus as $travelMenu)
                                    <tr class="table-item">
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $travelMenu->name }}</p>
                                            </div>
                                        </td>
                                        <td class="">Rp{{ number_format($travelMenu->price, 0, ',', '.') }}</td>
                                        <td class="">{{ Storage::url($travelMenu->image) }}</td>
                                        <td class="">
                                            <div class="action-buttons">
                                                <button class=""
                                                    onclick="location.href='/admin/travels/{{ $travelMenu->slug }}'">
                                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path
                                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <div class="pt-5">
                                <p>Tidak ada data yang ditemukan.</p>
                            </div>
                        @endif
                    </div>
                @endcan

                @can('admin-biro')
                    <div class="overflow-x-auto w-100">
                        @if ($travelMenus->count() > 0)
                            <table id="table-container" class="">
                                <tr class="bg-[#F6F6F6] text-sm ">
                                    <th class="col-one">Nama Paket</th>
                                    <th class="col-three">Harga</th>
                                    <th class="col-three">Gambar</th>
                                    <th class="col-five">Aksi</th>
                                </tr>
                                @foreach ($travelMenus as $travelMenu)
                                    <tr class="table-item">
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $travelMenu->name }}</p>
                                            </div>
                                        </td>
                                        <td class="">Rp{{ number_format($travelMenu->price, 0, ',', '.') }}</td>
                                        <td class="">
                                            <div class="image-card-2">
                                                <img src="{{ Storage::url($travelMenu->image) }}" alt="">
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="action-buttons">
                                                <button class=""
                                                    onclick="location.href='/admin/travels/{{ $travel->slug }}/travel-menus/{{ $travelMenu->slug }}'">
                                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9 4.45962C9.91153 4.16968 10.9104 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C3.75612 8.07914 4.32973 7.43025 5 6.82137"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path
                                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                            stroke="currentColor" stroke-width="1.5" />
                                                    </svg>
                                                </button>
                                                {{-- @can('admin-atraksi') --}}
                                                <button class=""
                                                    onclick="location.href='/admin/travels/{{ $travel->slug }}/travel-menus/{{ $travelMenu->slug }}/edit'">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M14.3905 3.04405C14.8873 3.04405 15.2905 3.44725 15.2905 3.94405C15.2905 4.44085 14.8873 4.84405 14.3905 4.84405H9.90372C6.80292 4.84405 4.80012 6.96805 4.80012 10.2548V20.2316C4.80012 23.5184 6.80292 25.6425 9.90372 25.6425H20.4925C23.5933 25.6425 25.5973 23.5184 25.5973 20.2316V15.398C25.5973 14.9012 26.0005 14.498 26.4973 14.498C26.9941 14.498 27.3973 14.9012 27.3973 15.398V20.2316C27.3973 24.5444 24.6217 27.4424 20.4925 27.4424H9.90372C5.77452 27.4424 3.00012 24.5444 3.00012 20.2316V10.2548C3.00012 5.94205 5.77452 3.04405 9.90372 3.04405H14.3905ZM24.842 4.09837L26.3024 5.55877C27.014 6.26917 27.4052 7.21357 27.404 8.21917C27.404 9.22477 27.0128 10.168 26.3024 10.8772L17.2916 19.888C16.6304 20.5492 15.7496 20.914 14.8136 20.914H10.3184C10.076 20.914 9.84324 20.8156 9.67404 20.6416C9.50484 20.4688 9.41244 20.2348 9.41844 19.9912L9.53124 15.4564C9.55404 14.554 9.91764 13.7056 10.556 13.066H10.5572L19.5248 4.09837C20.9912 2.63437 23.3756 2.63437 24.842 4.09837ZM18.7861 7.38157L11.8292 14.3392C11.5184 14.65 11.342 15.0628 11.3312 15.5008L11.2412 19.114H14.8136C15.2696 19.114 15.6968 18.9376 16.0196 18.6148L23.0185 11.614L18.7861 7.38157ZM20.7968 5.37157L20.0581 6.10837L24.2905 10.342L25.0304 9.60397C25.4 9.23437 25.604 8.74237 25.604 8.21917C25.604 7.69477 25.4 7.20157 25.0304 6.83197L23.57 5.37157C22.8056 4.60957 21.5624 4.60957 20.7968 5.37157Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                                <form
                                                    action="/admin/travels/{{ $travel->slug }}/travel-menus/{{ $travelMenu->slug }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="delete-button" type="submit">
                                                        <svg width="30" height="30" viewBox="0 0 30 30"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M23.8615 11.064C24.3571 11.1048 24.7267 11.538 24.6871 12.0336C24.6799 12.1152 24.0295 20.1684 23.6551 23.5464C23.4223 25.6428 22.0375 26.9184 19.9471 26.9568C18.3475 26.9844 16.8043 27 15.2959 27C13.6699 27 12.0847 26.982 10.5163 26.9496C8.50987 26.91 7.12147 25.6092 6.89467 23.5548C6.51667 20.1468 5.86987 12.114 5.86387 12.0336C5.82307 11.538 6.19267 11.1036 6.68827 11.064C7.17667 11.0508 7.61827 11.394 7.65787 11.8884C7.6617 11.9405 7.92612 15.2208 8.21427 18.4665L8.27214 19.1142C8.41727 20.7274 8.56438 22.2776 8.68387 23.3568C8.81227 24.5244 9.44227 25.1268 10.5535 25.1496C13.5535 25.2132 16.6147 25.2168 19.9147 25.1568C21.0955 25.134 21.7339 24.5436 21.8659 23.3484C22.2379 19.9956 22.8859 11.97 22.8931 11.8884C22.9327 11.394 23.3707 11.0484 23.8615 11.064ZM17.8144 3.00037C18.916 3.00037 19.8844 3.74317 20.1688 4.80757L20.4736 6.32077C20.5721 6.81682 21.0074 7.17908 21.5115 7.18703L25.4496 7.18717C25.9464 7.18717 26.3496 7.59037 26.3496 8.08717C26.3496 8.58397 25.9464 8.98717 25.4496 8.98717L21.5467 8.98699C21.5406 8.98711 21.5345 8.98717 21.5284 8.98717L21.4992 8.98597L9.04989 8.98702C9.04022 8.98712 9.03053 8.98717 9.02083 8.98717L9.00235 8.98597L5.09995 8.98717C4.60315 8.98717 4.19995 8.58397 4.19995 8.08717C4.19995 7.59037 4.60315 7.18717 5.09995 7.18717L9.03715 7.18597L9.15838 7.17829C9.60992 7.11971 9.98519 6.77677 10.0768 6.32077L10.3684 4.86157C10.6648 3.74317 11.6332 3.00037 12.7348 3.00037H17.8144ZM17.8144 4.80037H12.7348C12.4468 4.80037 12.1936 4.99357 12.1204 5.27077L11.8408 6.67477C11.8053 6.8526 11.7536 7.02398 11.6873 7.18749H18.8623C18.796 7.02398 18.7441 6.8526 18.7084 6.67477L18.4168 5.21557C18.3556 4.99357 18.1024 4.80037 17.8144 4.80037Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                {{-- @endcan --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <div class="pt-5 text-center">
                                <p>Tidak ada data yang ditemukan.</p>
                            </div>
                        @endif
                    </div>
                @endcan
            </div>

        </div>


        </div>
    </section>
@endsection
