@extends('admin.partials.master')

@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')
        <div class="page-content">
            <div class="header d-flex align-items-center justify-content-between pb-lg-4 pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="mb-0">Detail Transaksi</h3>
                    <p>ID Transaksi 1 -- 20/10/2023</p>
                </div>
                <div class="">
                    <button type="button" class="primary-button"
                        onclick="location.href='/admin/transactions'">Kembali</button>
                </div>
            </div>

            <div class="content-wrapper">
                <div class="overflow-x-auto w-100">
                    <table class="" id="table-container">
                        <tr class="bg-[#F6F6F6] text-sm ">
                            <th class="col-one">Nama Item</th>
                            <th class="col-three">Kategori</th>
                            <th class="col-three">Kuantitas</th>
                            <th class="col-three">Jumlah Kamar</th>
                            <th class="col-three">Harga</th>
                            <th class="col-three">Sub Total</th>
                        </tr>
                        <tr class="table-item">
                            <td class="">
                                <div class="first-column">
                                    <p class="first-p">Makanan</p>
                                </div>
                            </td>
                            <td class="">Kuliner</td>
                            <td class="">2</td>
                            <td class="">1</td>
                            <td class="">Rp1.000.000</td>
                            <td class="">Rp1.000.000</td>
                        </tr>
                    </table>
                </div>

                <div class="pt-4">
                    <h5 class="mb-2">Total</h5>
                    <h4 class="mb-0">Rp2.000.000</h4>
                </div>
            </div>

        </div>
    </section>
@endsection
