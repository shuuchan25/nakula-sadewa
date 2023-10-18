@extends('partials.master')
{{-- @dd($allItems) --}}
@section('content')

<div class="page-content">
{{-- Get partials --}}
@include('partials.header')
<div class="bd-content kalkulator">
    <div class="container w-100 mb-5 mt-5 pt-5">
        <div class="button-back-kalkulator d-flex my-auto">
            <button class="back-btn">
                <a href="../#">
                    <svg width="25" height="25" viewBox="0 0 36 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M34.1287 18.9992H2M2 18.9992L17.4218 2M2 18.9992L17.4218 35.9983" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </button>
        <h5>Kalkulator</h5></div>

        @if(count($allItems) > 0)
        @foreach($allItems as $item)
            <div class="kalkulator-wrap-card mt-3 mb-3" id="itemKalkulator1">
                <div class="row kalkulator-card">
                    <div class="col-2 kalkulator-header">
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                    </div>
                    <div class="col-9 kalkulator-content">
                        <h2>{{ $item['name'] }}</h2>
                        <table class="items-body">
                            <tbody>
                                <tr>
                                    {{-- <td class="menu-items">Product 1</td> --}}
                                    <td class="menu-items">{{ $item['quantity'] }}</td>
                                    <td class="menu-items">Rp{{ number_format($item['price'], 0, ',', '.') }} / item</td>
                                </tr>
                                {{-- <tr>
                                    <td class="menu-items">Product 2</td>
                                    <td class="menu-items">1</td>
                                    <td class="menu-items">Rp 1.000.000</td>
                                </tr>
                                <tr>
                                    <td class="menu-items">Product 3</td>
                                    <td class="menu-items">1</td>
                                    <td class="menu-items">Rp 1.000.000</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col summary-content">
                        <div class="x-button">
                            <button onclick="deleteElement('itemKalkulator1')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
                                    <path d="M24.375 0H5.625C2.51769 0 0 2.51769 0 5.625V24.375C0 27.4823 2.51769 30 5.625 30H24.375C27.4823 30 30 27.4823 30 24.375V5.625C30 2.51769 27.4823 0 24.375 0ZM21.6692 20.07L20.0677 21.6704C19.7746 21.9646 19.2946 21.9646 19.0015 21.6704L15 17.6688L10.9996 21.6692C10.7054 21.9635 10.2265 21.9635 9.93231 21.6669L8.33077 20.07C8.03885 19.7746 8.03885 19.2981 8.33077 19.0015L12.3323 15.0012L8.33192 11.0008C8.03885 10.7054 8.03885 10.2254 8.33192 9.93346L9.93346 8.33192C10.2277 8.03539 10.7077 8.03539 11.0008 8.33192L15 12.3335L19.0015 8.33192C19.2958 8.03539 19.7758 8.03539 20.0677 8.33192L21.6692 9.93115C21.9623 10.2254 21.9623 10.7054 21.6704 11.0008L17.6688 15.0012L21.6704 19.0015C21.9612 19.2981 21.9612 19.7746 21.6692 20.07Z" fill="#FF0000"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row total-price">
                    <h5 class="subtotal-amount">Rp{{ number_format($item['subtotal'], 0, ',', '.') }}</h5>
                </div>
            </div>
        @endforeach
        @else
            <p class="d-flex justify-content-center align-item-center mt-5">Belum ada yang tersedia.</p>
        @endif

        {{-- <div class="kalkulator-wrap-card mt-3 mb-3" id="itemKalkulator2">
            <div class="row kalkulator-card">
                <div class="col-2 kalkulator-header">
                    <img src="../assets/pict/hero-desawisata.png" alt="">
                </div>
                <div class="col-9 kalkulator-content">
                    <h2>Hotel Queen</h2>
                    <table class="items-body">
                        <tbody>
                            <tr>
                                <td class="menu-items">Suit room lorem ipsum dolor sit amet</td>
                                <td class="menu-items">1</td>
                                <td class="menu-items">Rp 1.000.000</td>
                            </tr>
                            <tr>
                                <td class="menu-items">Product 2</td>
                                <td class="menu-items">1</td>
                                <td class="menu-items">Rp 1.000.000</td>
                            </tr>
                            <tr>
                                <td class="menu-items">Product 3</td>
                                <td class="menu-items">1</td>
                                <td class="menu-items">Rp 1.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col summary-content">
                    <div class="x-button">
                        <button onclick="deleteElement('itemKalkulator2')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
                                <path d="M24.375 0H5.625C2.51769 0 0 2.51769 0 5.625V24.375C0 27.4823 2.51769 30 5.625 30H24.375C27.4823 30 30 27.4823 30 24.375V5.625C30 2.51769 27.4823 0 24.375 0ZM21.6692 20.07L20.0677 21.6704C19.7746 21.9646 19.2946 21.9646 19.0015 21.6704L15 17.6688L10.9996 21.6692C10.7054 21.9635 10.2265 21.9635 9.93231 21.6669L8.33077 20.07C8.03885 19.7746 8.03885 19.2981 8.33077 19.0015L12.3323 15.0012L8.33192 11.0008C8.03885 10.7054 8.03885 10.2254 8.33192 9.93346L9.93346 8.33192C10.2277 8.03539 10.7077 8.03539 11.0008 8.33192L15 12.3335L19.0015 8.33192C19.2958 8.03539 19.7758 8.03539 20.0677 8.33192L21.6692 9.93115C21.9623 10.2254 21.9623 10.7054 21.6704 11.0008L17.6688 15.0012L21.6704 19.0015C21.9612 19.2981 21.9612 19.7746 21.6692 20.07Z" fill="#FF0000"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row total-price">
                <h5>Rp 3.000.000</h5>
            </div>
        </div> --}}

        <div class="menu d-flex w-100 mt-5">
            <div class="menu-calc-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="/attractions">
                            <svg fill="#AC0B05" width="50" height="50" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier"></g><g id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"><title></title><polygon points="10.96 17.68 7 9.76 1.38 21 22.55 21 16 6.58 10.96 17.68"></polygon><circle cx="11" cy="6" r="3"></circle></g></svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Atraksi</p>
            </div>
            <div class="menu-calc-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="/hotels">
                            <svg fill="#FCB600" width="50" height="50" viewBox="0 -4.91 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 113.05" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M0,100.07h14.72V1.57c0-0.86,0.71-1.57,1.57-1.57h49.86c0.86,0,1.57,0.71,1.57,1.57V38.5h44.12 c0.86,0,1.57,0.71,1.57,1.57v59.99h9.47v12.99H0V100.07L0,100.07z M27.32,14.82h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36 c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V15.39C26.75,15.08,27.01,14.82,27.32,14.82L27.32,14.82z M44.6,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V76.87 C44.03,76.55,44.29,76.3,44.6,76.3L44.6,76.3z M27.32,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C26.75,76.55,27.01,76.3,27.32,76.3L27.32,76.3z M44.6,55.8h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V56.38 C44.03,56.06,44.29,55.8,44.6,55.8L44.6,55.8z M27.32,55.8h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V56.38C26.75,56.06,27.01,55.8,27.32,55.8L27.32,55.8z M44.6,35.31h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V35.88 C44.03,35.57,44.29,35.31,44.6,35.31L44.6,35.31z M27.32,35.31h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V35.88C26.75,35.57,27.01,35.31,27.32,35.31L27.32,35.31z M44.6,14.82h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V15.39 C44.03,15.08,44.29,14.82,44.6,14.82L44.6,14.82z M23.17,7.32h35.92c0.62,0,1.13,0.61,1.13,1.35v85.87c0,0.74-0.51,1.35-1.13,1.35 H23.17c-0.62,0-1.13-0.61-1.13-1.35V8.67C22.04,7.93,22.55,7.32,23.17,7.32L23.17,7.32z M72.61,53.43h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54 C72.04,53.69,72.3,53.43,72.61,53.43L72.61,53.43z M89.89,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C89.32,76.55,89.58,76.3,89.89,76.3L89.89,76.3z M72.61,76.3h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87 C72.04,76.55,72.3,76.3,72.61,76.3L72.61,76.3z M89.89,53.43h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54C89.32,53.69,89.58,53.43,89.89,53.43L89.89,53.43z M68.86,45.82h35.92 c0.62,0,1.13,0.61,1.13,1.35v47.37c0,0.74-0.51,1.35-1.13,1.35H68.86c-0.62,0-1.13-0.61-1.13-1.35V47.17 C67.73,46.43,68.24,45.82,68.86,45.82L68.86,45.82z"></path> </g> </g></svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Akomodasi</p>
            </div>
            <div class="menu-calc-1">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="/culinaries">
                            <svg fill="#AC0B05" height="50" width="50" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32.762 32.762" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="b193_chinese_bowl"> <path d="M6.305,15.604l-4.617,1.764c0.045,0.344,0.108,0.486,0.183,0.816l5.184-2.348C6.916,15.797,6.436,15.643,6.305,15.604z"></path> <path d="M32.325,12.534c0-1.193-1.273-2.271-3.417-3.107l-0.527,0.199c2.228,0.791,3.594,1.811,3.594,2.908 c0,2.445-6.812,4.516-14.873,4.516c-2.418,0-4.721-0.189-6.762-0.512l-8.237,2.715c1.739,5.602,7.802,9.744,14.999,9.744 c8.547,0,15.501-5.846,15.501-13.035c0-0.844-0.097-2.373-0.286-3.271C32.32,12.635,32.325,12.584,32.325,12.534z"></path> <path d="M3.941,14.707c-0.928-0.584-1.716-1.498-1.716-2.174c0-2.449,6.812-4.52,14.876-4.52c0.312,0,0.622,0.006,0.929,0.01 l0.749-0.334c-0.551-0.02-1.11-0.027-1.678-0.027c-8.54,0-15.229,2.139-15.229,4.871c0,0.068,0.005,0.105,0.016,0.125 c-0.153,0.708-0.246,2.274-0.277,3.139L3.941,14.707z"></path> <polygon points="29.514,3.766 0,16.951 30.188,5.393 "></polygon> <polygon points="32.762,6.885 32.087,5.258 2.572,18.448 "></polygon> </g> <g id="Capa_1_266_"> </g> </g> </g></svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Kuliner</p>
            </div>
            <div class="menu-calc-2">
                <div class="menu-button w-100 ">
                    <button class="katalog-button">
                        <a href="/travels">
                            <svg fill="#FCB600" height="50" width="50" version="1.1" id="Layer_1" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-330 131 299 299" xml:space="preserve" stroke="#000000" stroke-width="0.0029900000000000005"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Page 1</title> <desc>Created with Sketch.</desc> <g> <path d="M-60.4,366.1h-120.7h-120.7c-2.9,0-5.2,0.2-5.2,10.5c0,10.3,2.4,10.3,5.2,10.3h15.8v18.3c0,2.9,2.4,5.2,5.2,5.2h31.3 c2.9,0,5.2-2.3,5.2-5.2v-18.3h63.1h63.2v18.3c0,2.9,2.3,5.2,5.2,5.2h31.3c2.9,0,5.3-2.3,5.3-5.2v-18.3h15.7c2.9,0,5.2,0.2,5.2-10.3 C-55.1,366.1-57.5,366.1-60.4,366.1z"></path> <path d="M-301.9,357.2h241.2c2.9,0,5.3-2.4,5.3-5.2v-21c0-0.1,0-0.1,0-0.1c-0.2-44.5-2.4-61.7-31.7-68.3 c-3.2-77.6-20.5-77.6-94.1-77.6c-73.5,0-90.5,0-93.6,77.5c-30,6.5-32.1,23.7-32.2,68.4c0,0,0,0.1,0,0.1v21 C-307.2,354.9-304.8,357.2-301.9,357.2z M-181.4,300.2c45.6,0,55.4,0.1,54.8,10H-236C-236.4,300.2-226.9,300.2-181.4,300.2z M-233.9,320.9c-0.2-0.7-0.3-1.4-0.5-2h106c-0.2,0.6-0.3,1.2-0.5,1.8c-0.5,1.9-1,3.7-1.4,5.3h-102.3 C-233,324.4-233.4,322.7-233.9,320.9z M-144.6,341.5h-36.7h-36.7c-7.4,0-9.6,0-12-6.9h97.3C-135.2,341.2-137.3,341.5-144.6,341.5z M-97,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7,15.7-15.7,15.7c-8.7,0-15.7-7-15.7-15.7C-112.8,317.2-105.7,310.2-97,310.2z M-244.4,213.4c6.8-7.5,30.4-7.5,63-7.5c32.8,0,56.5,0,63.4,7.6c6,6.5,8.5,24.6,9.6,46.2c-17.7-1.3-41.3-1.3-72.7-1.3 c-31.4,0-55,0-72.7,1.3C-252.8,238.1-250.3,219.9-244.4,213.4z M-264.9,310.2c8.7,0,15.7,7,15.7,15.7c0,8.7-7.1,15.7-15.7,15.7 c-8.7,0-15.7-7-15.7-15.7C-280.6,317.2-273.6,310.2-264.9,310.2z"></path> </g> </g></svg>
                        </a>
                    </button>
                </div>
                <p style="text-align: center">Paket Wisata</p>
            </div>
        </div>

        {{-- <div class="calculate-button w-100 d-flex justify-content-center mt-5">
            <button type="button" id="calculateButton" class="detail-button">Kalkulasi</button>
        </div> --}}

        <div class="total-summary ">
            <div class="total-summary-body mx-auto mt-3">
                <h5>Total</h5>
                <h6 id="totalAmount">Rp 0</h6>
            </div>
        </div>
        <div class="calculate-toggler w-100 d-flex justify-content-center mt-2">
            <button type="detail" class="beranda-button"><a href="">Beranda</a></button>
            <button type="detail" class="cetak-button"><a href="">Cetak Hasil</a></button>
        </div>
    </div>
</div>

@include('partials.footer')
</div>

@endsection

{{-- Javascript --}}

@section('script-body')
<script>

function deleteElement(kalkulatorItemId) {
    var item = document.getElementById(kalkulatorItemId);
    if (item) {
        item.remove(); // Menghapus elemen dari DOM
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with the class subtotal-amount
    const subtotalElements = document.querySelectorAll('.subtotal-amount');
    
    // Calculate the total sum of subtotal values
    const totalSum = Array.from(subtotalElements).reduce((acc, subtotalElement) => {
        // Extract the numeric value from the inner text and add it to the accumulator
        const subtotalValue = parseInt(subtotalElement.innerText.replace(/\D/g, ''));
        return acc + subtotalValue;
    }, 0);

    // Display the total sum in the totalAmount element
    const totalAmountElement = document.getElementById('totalAmount');
    totalAmountElement.innerText = 'Rp' + totalSum.toLocaleString('id-ID');
});


</script>
@endsection

