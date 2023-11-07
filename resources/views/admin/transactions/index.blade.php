@extends('admin.partials.master')
{{-- @dd($transactions) --}}
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-block d-sm-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Transaksi</h3>
                </div>
                {{-- <div class="">
                    <button type="button" class="primary-button" onclick="location.href='/admin/articles/create'">Tambah Artikel</button>
                </div> --}}
            </div>

            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/admin/transactions" method="GET" id="search-form" class="w-100">
                    @csrf
                    <div class="item-filters gap-3">
                        <div class="search">
                            <i class="">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2944 2.55566C17.6644 2.55566 22.0324 6.92366 22.0324 12.2937C22.0324 14.8272 21.0601 17.1379 19.4691 18.8722L22.5998 21.9964C22.8928 22.2894 22.8938 22.7634 22.6008 23.0564C22.4548 23.2044 22.2618 23.2774 22.0698 23.2774C21.8788 23.2774 21.6868 23.2044 21.5398 23.0584L18.3713 19.8987C16.7045 21.2335 14.5911 22.0327 12.2944 22.0327C6.92442 22.0327 2.55542 17.6637 2.55542 12.2937C2.55542 6.92366 6.92442 2.55566 12.2944 2.55566ZM12.2944 4.05566C7.75142 4.05566 4.05542 7.75066 4.05542 12.2937C4.05542 16.8367 7.75142 20.5327 12.2944 20.5327C16.8364 20.5327 20.5324 16.8367 20.5324 12.2937C20.5324 7.75066 16.8364 4.05566 12.2944 4.05566Z"
                                        fill="currentColor" />
                                </svg>
                            </i>
                            <input type="text" name="search" class="" id="search-input"
                                placeholder="Cari transaksi">
                        </div>
                        <div class="input-group-append">
                            <button class="search-button search-button-none" type="submit">Cari</button>
                        </div>
                    </div>
                </form>

                <div class="overflow-x-auto w-100">
                    @if ($transactions->count() > 0)
                        <table class="" id="table-container">
                            <tr class="bg-[#F6F6F6] text-sm ">
                                <th class="col-one">ID Transaksi</th>
                                <th class="col-five">Tanggal</th>
                                <th class="col-three">Total</th>
                                <th class="col-five">Aksi</th>
                            </tr>
                            @foreach ($transactions as $transaction)
                                <tr class="table-item">
                                    <td class="">
                                        <div class="first-column">
                                            <p class="first-p">{{ $transaction->id }}</p>
                                        </div>
                                    </td>
                                    <td class="">{{ date('d-m-Y', strtotime($transaction->created_at)) }}</td>
                                    <td class="">Rp{{ number_format($transaction->total, 0, ',', '.') }}</td>
                                    <td class="">
                                        <div class="action-buttons">
                                            <button class=""
                                                onclick="location.href='/admin/transactions/{{ $transaction->id }}'">
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
                                            {{-- <form action="/admin" method="POST"
                                        onsubmit="return confirm('Apakah anda yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('delete')
                                        <button class="delete-button" type="submit">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.8615 11.064C24.3571 11.1048 24.7267 11.538 24.6871 12.0336C24.6799 12.1152 24.0295 20.1684 23.6551 23.5464C23.4223 25.6428 22.0375 26.9184 19.9471 26.9568C18.3475 26.9844 16.8043 27 15.2959 27C13.6699 27 12.0847 26.982 10.5163 26.9496C8.50987 26.91 7.12147 25.6092 6.89467 23.5548C6.51667 20.1468 5.86987 12.114 5.86387 12.0336C5.82307 11.538 6.19267 11.1036 6.68827 11.064C7.17667 11.0508 7.61827 11.394 7.65787 11.8884C7.6617 11.9405 7.92612 15.2208 8.21427 18.4665L8.27214 19.1142C8.41727 20.7274 8.56438 22.2776 8.68387 23.3568C8.81227 24.5244 9.44227 25.1268 10.5535 25.1496C13.5535 25.2132 16.6147 25.2168 19.9147 25.1568C21.0955 25.134 21.7339 24.5436 21.8659 23.3484C22.2379 19.9956 22.8859 11.97 22.8931 11.8884C22.9327 11.394 23.3707 11.0484 23.8615 11.064ZM17.8144 3.00037C18.916 3.00037 19.8844 3.74317 20.1688 4.80757L20.4736 6.32077C20.5721 6.81682 21.0074 7.17908 21.5115 7.18703L25.4496 7.18717C25.9464 7.18717 26.3496 7.59037 26.3496 8.08717C26.3496 8.58397 25.9464 8.98717 25.4496 8.98717L21.5467 8.98699C21.5406 8.98711 21.5345 8.98717 21.5284 8.98717L21.4992 8.98597L9.04989 8.98702C9.04022 8.98712 9.03053 8.98717 9.02083 8.98717L9.00235 8.98597L5.09995 8.98717C4.60315 8.98717 4.19995 8.58397 4.19995 8.08717C4.19995 7.59037 4.60315 7.18717 5.09995 7.18717L9.03715 7.18597L9.15838 7.17829C9.60992 7.11971 9.98519 6.77677 10.0768 6.32077L10.3684 4.86157C10.6648 3.74317 11.6332 3.00037 12.7348 3.00037H17.8144ZM17.8144 4.80037H12.7348C12.4468 4.80037 12.1936 4.99357 12.1204 5.27077L11.8408 6.67477C11.8053 6.8526 11.7536 7.02398 11.6873 7.18749H18.8623C18.796 7.02398 18.7441 6.8526 18.7084 6.67477L18.4168 5.21557C18.3556 4.99357 18.1024 4.80037 17.8144 4.80037Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </button>
                                    </form> --}}
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
            </div>

            {{-- <div class="pagination d-flex justify-content-center pt-4">
            {{ $articles->links('admin.partials.custom_pagination') }}
        </div> --}}
    </section>
@endsection

@section('script-body')
    <script>
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var query = $(this).val();
                if (query.length >= 2) {
                    $.ajax({
                        url: '/admin/articles', // Gunakan rute yang sama dengan halaman index
                        method: 'GET',
                        data: {
                            search: query
                        },
                        success: function(data) {
                            $('#table-container').html(
                                data
                            ); // Menampilkan hasil pencarian di div dengan id "table-container"
                        }
                    });
                } else {
                    // Tampilkan konten asli jika kotak pencarian kosong
                    $.ajax({
                        url: '/admin/articles',
                        method: 'GET',
                        success: function(data) {
                            $('#table-container').html(data);
                        }
                    });
                }
            });
        });
    </script>
@endsection
