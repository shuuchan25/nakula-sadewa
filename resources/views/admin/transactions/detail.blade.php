@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="mb-0">Detail Transaksi</h3>
                    <p>ID Transaksi {{ $transaction->id }} -- {{ date('d-m-Y', strtotime($transaction->created_at)) }}</p>
                </div>
                <div class="">
                    <button type="button" class="primary-button"
                        onclick="location.href='/admin/transactions'">Kembali</button>
                </div>
            </div>

            <div class="content-wrapper overflow-x-auto">
                <div class="overflow-x-auto w-100">
                    @if ($detailTransactions->count() > 0)
                        <table class="" id="table-container">
                            <tr class="bg-[#F6F6F6] text-sm ">
                                <th class="col-one">Nama Item</th>
                                <th class="col-three">Kategori</th>
                                <th class="col-three">Jumlah Item</th>
                                <th class="col-three">Jumlah Malam</th>
                                <th class="col-three">Harga</th>
                                <th class="col-three">Sub Total</th>
                            </tr>
                            @foreach ($allItems as $item)
                                <tr class="table-item">
                                    @if ($item['category'] === 'Attraction')
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $item['name'] }}</p>
                                            </div>
                                        </td>
                                    @endif
                                    @if ($item['category'] === 'Hotel')
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $item['name'] }} - {{ $item['room'] }}</p>
                                            </div>
                                        </td>
                                    @endif
                                    @if ($item['category'] === 'Culinary')
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $item['name'] }} - {{ $item['menu'] }}</p>
                                            </div>
                                        </td>
                                    @endif
                                    @if ($item['category'] === 'Travel')
                                        <td class="">
                                            <div class="first-column">
                                                <p class="first-p">{{ $item['name'] }}</p>
                                            </div>
                                        </td>
                                    @endif
                                    <td class="">{{ $item['category'] }}</td>
                                    <td class="">{{ $item['quantity'] }}</td>
                                    <td class="">{{ $item['sub_quantity'] }}</td>
                                    <td class="">Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                                    <td class="">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <div class="pt-5">
                            <p>Tidak ada data yang ditemukan.</p>
                        </div>
                    @endif
                </div>

                <div class="pt-4">
                    <h5 class="mb-2">Total</h5>
                    <h4 class="mb-0">Rp{{ number_format($transaction->total, 0, ',', '.') }}</h4>
                </div>
            </div>

        </div>
    </section>
@endsection
