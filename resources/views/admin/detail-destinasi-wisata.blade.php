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
                    <button type="button" class="primary-button" onclick="location.href='destinasi-wisata'">Kembali</button>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="detail-table-container">
                    <div class="table-header">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                </tr>
                                <tr>
                                    <th>Jam Operasional</th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                </tr>
                                <tr>
                                    <th>Link Maps</th>
                                </tr>
                                <tr>
                                    <th>Kontak</th>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                </tr>
                                <tr>
                                    <th>Video</th>
                                </tr>
                                <tr>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-content">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Data 1</td>
                                </tr>
                                <tr>
                                    <td>Data 2</td>
                                </tr>
                                <tr>
                                    <td>Data 3</td>
                                </tr>
                                <tr>
                                    <td>Data 1</td>
                                </tr>
                                <tr>
                                    <td>Data 2</td>
                                </tr>
                                <tr>
                                    <td>Data 3</td>
                                </tr>
                                <tr>
                                    <td>Data 1</td>
                                </tr>
                                <tr>
                                    <td>Data 2</td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <img src="https://cdn.donmai.us/original/85/9f/__terakomari_gandezblood_hikikomari_kyuuketsuki_no_monmon_drawn_by_riichu__859f33ac38bc7f4b59a637e646250d5f.png" alt="" style="width: 100px">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
@endsection
