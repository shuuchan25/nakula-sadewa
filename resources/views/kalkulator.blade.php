@extends('partials.master')
{{-- @dd($allItems) --}}
@section('content')

    <div class="page-content">
        {{-- Get partials --}}
        @include('partials.header')
        @include('sweetalert::alert')
        <div class="bd-content kalkulator">
            <div class="container w-100 mb-5 mt-5 pt-5">
                <div class="button-back-kalkulator w-100 d-flex align-items-center gap-3">
                    <button class="back-btn" style="padding: 0">
                        <a href="../#">
                            <svg width="25" height="23" viewBox="0 0 36 38" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.1287 18.9992H2M2 18.9992L17.4218 2M2 18.9992L17.4218 35.9983" stroke="black"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </button>
                    <h5>Kalkulator</h5>
                </div>

                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100 mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if (count($allItems) > 0)
                    @foreach ($allItems as $item)
                        <div class="kalkulator-wrap-card mt-3 mb-3" id="itemKalkulator1">
                            <div class="row kalkulator-card">
                                <div class="col-3 kalkulator-header">
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="">
                                </div>
                                <div class="col-7 kalkulator-content">
                                    <h2>{{ $item['name'] }}</h2>
                                    <table class="items-body">
                                        <thead>
                                            @if ($item['category'] === 'Culinary' || $item['category'] === 'Package')
                                                <tr style="border-bottom: 1px solid black">
                                                    @if ($item['category'] === 'Culinary')
                                                        <td class="menu-items">Menu</td>
                                                    @elseif ($item['category'] === 'Package')
                                                        <td class="menu-items">Paket</td>
                                                    @endif
                                                    <td class="menu-items qty">Qty</td>
                                                    <td class="menu-items">Harga</td>
                                                </tr>
                                            @elseif ($item['category'] === 'Hotel')
                                                <tr style="border-bottom: 1px solid black">
                                                    <td class="menu-items">Kamar</td>
                                                    <td class="menu-items qty">Qty</td>
                                                    <td class="menu-items">Malam</td>
                                                    <td class="menu-items">Harga</td>
                                                </tr>
                                            @else
                                                <tr class="" style="border-bottom: 1px solid black">
                                                    <td class="qty">Qty</td>
                                                    <td>Harga</td>
                                                </tr>
                                            @endif

                                        </thead>
                                        <tbody>
                                            @if ($item['category'] === 'Attraction')
                                                <tr>
                                                    <td class="menu-items qty">{{ $item['quantity'] }} </td>
                                                    <td class="menu-items">
                                                        Rp{{ number_format($item['price'], 0, ',', '.') }}/item</td>
                                                </tr>
                                            @endif

                                            @if ($item['category'] === 'Travel')
                                                <tr>
                                                    <td class="menu-items qty">{{ $item['quantity'] }}</td>
                                                    <td class="menu-items">
                                                        Rp{{ number_format($item['price'], 0, ',', '.') }}/item</td>
                                                </tr>
                                            @endif

                                            @if ($item['category'] === 'Package')
                                                @foreach ($item['packages'] as $package)
                                                    <tr>
                                                        <td class="menu-items">{{ $package['package'] }}</td>
                                                        <td class="menu-items qty">{{ $package['quantity'] }}</td>
                                                        <td class="menu-items">
                                                            Rp{{ number_format($package['price'], 0, ',', '.') }}/item</td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                            @if ($item['category'] === 'Hotel')
                                                @foreach ($item['rooms'] as $room)
                                                    <tr>
                                                        <td class="menu-items">{{ $room['room'] }}</td>
                                                        <td class="menu-items qty">{{ $room['quantity'] }}</td>
                                                        <td class="menu-items">{{ $room['sub_quantity'] }} malam</td>
                                                        <td class="menu-items">
                                                            Rp{{ number_format($room['price'], 0, ',', '.') }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                            @if ($item['category'] === 'Culinary')
                                                @foreach ($item['menus'] as $menu)
                                                    <tr>
                                                        <td class="menu-items">{{ $menu['menu'] }}</td>
                                                        <td class="menu-items qty">{{ $menu['quantity'] }}</td>
                                                        <td class="menu-items">
                                                            Rp{{ number_format($menu['price'], 0, ',', '.') }}/item</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-2 summary-content">
                                    <div class="x-button">
                                        <form action="/kalkulator/{{ $item['slug'] }}" method="POST" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                                            <button type="submit" class="delete-item" data-id="{{ $item['id'] }}">
                                                <button onclick="confirmation(event)" href="{{ url('/kalkulator', $item['id']) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 30 30" fill="none">
                                                    <path
                                                        d="M24.375 0H5.625C2.51769 0 0 2.51769 0 5.625V24.375C0 27.4823 2.51769 30 5.625 30H24.375C27.4823 30 30 27.4823 30 24.375V5.625C30 2.51769 27.4823 0 24.375 0ZM21.6692 20.07L20.0677 21.6704C19.7746 21.9646 19.2946 21.9646 19.0015 21.6704L15 17.6688L10.9996 21.6692C10.7054 21.9635 10.2265 21.9635 9.93231 21.6669L8.33077 20.07C8.03885 19.7746 8.03885 19.2981 8.33077 19.0015L12.3323 15.0012L8.33192 11.0008C8.03885 10.7054 8.03885 10.2254 8.33192 9.93346L9.93346 8.33192C10.2277 8.03539 10.7077 8.03539 11.0008 8.33192L15 12.3335L19.0015 8.33192C19.2958 8.03539 19.7758 8.03539 20.0677 8.33192L21.6692 9.93115C21.9623 10.2254 21.9623 10.7054 21.6704 11.0008L17.6688 15.0012L21.6704 19.0015C21.9612 19.2981 21.9612 19.7746 21.6692 20.07Z"
                                                        fill="#FF0000" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="total-price">
                                        @if ($item['category'] === 'Attraction' || $item['category'] === 'Travel')
                                            <h5 class="subtotal-amount">
                                                Rp{{ number_format($item['subtotal'], 0, ',', '.') }}
                                            </h5>
                                        @endif

                                        @if ($item['category'] === 'Hotel' || $item['category'] === 'Culinary' || $item['category'] === 'Package')
                                            <h5 class="subtotal-amount">Rp{{ number_format($item['total'], 0, ',', '.') }}
                                            </h5>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="d-flex justify-content-center align-item-center mt-5">Belum ada data yang dipilih.</p>
                @endif

                <div class="menu d-flex w-100 mt-5">
                    <div class="menu-calc-1">
                        <div class="menu-button w-100 ">
                            <button class="katalog-button">
                                <a href="/attractions">
                                    <svg width="55px" height="55px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.2093 12.8396C19.2093 13.618 18.5846 14.2489 17.814 14.2489C17.0433 14.2489 16.4186 13.618 16.4186 12.8396C16.4186 12.0613 17.0433 11.4304 17.814 11.4304C18.5846 11.4304 19.2093 12.0613 19.2093 12.8396Z"
                                            fill="#fcb600" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M18.4475 3.07312C17.3881 2.74149 16.4186 3.58696 16.4186 4.62005V8.24569C15.1217 8.49768 13.614 8.64346 12 8.64346C10.386 8.64346 8.87826 8.49768 7.5814 8.24569V4.62005C7.5814 3.58696 6.61193 2.74149 5.55252 3.07312C4.57111 3.38033 3.7219 3.77027 3.10283 4.24246C2.49454 4.70643 2 5.33865 2 6.13148V18.0787C2 18.294 2.03738 18.4996 2.10405 18.6934C2.16388 18.8674 2.24729 19.0319 2.34845 19.1856C2.67187 19.677 3.18915 20.0798 3.7886 20.409C4.3967 20.7431 5.13903 21.0285 5.97267 21.2614C7.64058 21.7273 9.73668 22 12 22C13.9009 22 15.6816 21.8076 17.1889 21.4712C18.6818 21.138 19.9619 20.6512 20.8188 20.0262C21.0272 19.8742 21.2239 19.7036 21.3949 19.5146C21.7545 19.1171 22 18.638 22 18.0787V6.13148C22 5.33865 21.5055 4.70643 20.8972 4.24246C20.2781 3.77027 19.4289 3.38033 18.4475 3.07312ZM20.6047 8.22659C20.5778 8.24416 20.5507 8.26148 20.5235 8.27855C19.7014 8.7951 18.5721 9.20856 17.27 9.50563C15.7455 9.85343 13.9349 10.0527 12 10.0527C10.0651 10.0527 8.25452 9.85343 6.73 9.50563C5.4279 9.20856 4.29864 8.7951 3.47645 8.27855C3.44929 8.26148 3.42224 8.24416 3.39535 8.22659V17.3892L6.22606 14.7138L7.50233 13.6349C8.42995 12.8507 9.81971 12.8937 10.6944 13.7388L13.7838 16.7236C14.0393 16.9704 14.4553 17.0087 14.759 16.8025L14.9737 16.6567C16.0566 15.9214 17.5173 16.0043 18.5058 16.8637L20.4069 18.5168C20.5626 18.3291 20.6047 18.1795 20.6047 18.0787V8.22659Z"
                                            fill="#fcb600" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                        <p style="text-align: center">Atraksi</p>
                    </div>
                    <div class="menu-calc-2">
                        <div class="menu-button w-100 ">
                            <button class="katalog-button">
                                <a href="/hotels">
                                    <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 56 56"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M 5.2892 21.9935 L 10.9031 21.9935 L 10.9031 18.8154 C 10.9031 16.7507 12.0630 15.6372 14.1508 15.6372 L 22.3861 15.6372 C 24.4739 15.6372 25.6338 16.7507 25.6338 18.8154 L 25.6338 21.9935 L 30.6446 21.9935 L 30.6446 18.8154 C 30.6446 16.7507 31.8045 15.6372 34.0084 15.6372 L 41.7333 15.6372 C 43.9373 15.6372 45.0970 16.7507 45.0970 18.8154 L 45.0970 21.9935 L 50.7108 21.9935 L 50.7108 15.6604 C 50.7108 11.5544 48.5305 9.4665 44.5402 9.4665 L 11.4598 9.4665 C 7.4930 9.4665 5.2892 11.5544 5.2892 15.6604 Z M 0 44.8668 C 0 46.0035 .7423 46.7226 1.9022 46.7226 L 3.2013 46.7226 C 4.3380 46.7226 5.0803 46.0035 5.0803 44.8668 L 5.0803 41.5726 C 5.3355 41.6422 6.0779 41.6886 6.6114 41.6886 L 49.4118 41.6886 C 49.9454 41.6886 50.6647 41.6422 50.9198 41.5726 L 50.9198 44.8668 C 50.9198 46.0035 51.6619 46.7226 52.7988 46.7226 L 54.1210 46.7226 C 55.2579 46.7226 56 46.0035 56 44.8668 L 56 31.6670 C 56 27.4682 53.6573 25.1716 49.4118 25.1716 L 6.5883 25.1716 C 2.3430 25.1716 0 27.4682 0 31.6670 Z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                        <p style="text-align: center">Akomodasi</p>
                    </div>
                    <div class="menu-calc-1">
                        <div class="menu-button w-100 ">
                            <button class="katalog-button">
                                <a href="/culinaries">
                                    <svg fill="#fcb600" height="55px" width="55px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 512 512" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256.001,54.522c-26.043,0-47.691,19.333-51.578,44.304c15.723-3.156,31.979-4.663,48.619-4.663h5.917
                                                                        c16.639,0,32.896,1.452,48.62,4.608C303.692,73.801,282.043,54.522,256.001,54.522z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M258.959,119.931h-5.917c-121.767,0-221.215,98.636-221.215,220.404v41.132h0.001h448.346v-41.132
                                                                        C480.174,218.566,380.727,119.931,258.959,119.931z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M505.558,423.587c-1.951-1.75-4.252-3.365-6.795-4.21c-1.916,0.636-3.959,0.74-6.089,0.74H19.325
                                                                        c-2.13,0-4.173-0.103-6.089-0.74c-2.543,0.845-4.844,2.333-6.795,4.083C2.497,426.998,0,432.277,0,437.994
                                                                        c0,10.673,8.653,19.484,19.325,19.484h473.349c10.673,0,19.325-8.748,19.325-19.421C512,432.342,509.503,427.125,505.558,423.587z
                                                                        " />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </button>
                        </div>
                        <p style="text-align: center">Kuliner</p>
                    </div>
                    <div class="menu-calc-2">
                        <div class="menu-button w-100 ">
                            <button class="katalog-button">
                                <a href="/travels">
                                    <svg fill="#8f010a" width="55px" height="55px" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 5h2v14H4V5h2V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1zm3 0h1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V5zM3 5v14H2a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h1zm5-1v1h4V4H8z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                        <p style="text-align: center">Paket Wisata</p>
                    </div>
                </div>

                <form action="/kalkulator" method="POST">
                    @csrf
                    <div class="d-flex flex-column align-items-center w-100">
                        <div class="total-summary ">
                            <div class="total-summary-body mt-3">
                                <h4>Total</h4>
                                <input type="hidden" name="total" id="quantityInput">
                                <h5 id="totalAmount">Rp 0</h5>
                            </div>
                        </div>
                        <div class="email__input mt-3">
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Masukkan email anda" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="calculate-toggler gap-2 d-flex justify-content-center mt-2">
                        <button type="detail" class="beranda-button"><a href="/">Beranda</a></button>
                        <button type="submit" class="cetak-button">Cetak dan kirim</button>
                    </div>
                </form>
            </div>
        </div>

        @include('partials.footer')
    </div>
    @if (session()->has('message'))
        <script>
            setTimeout(function() {
                var transactionId = {{ session('transactionId') }};

                window.location.href = '/send/' + transactionId;
            }, 3000);
        </script>
    @endif
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

        document.addEventListener('DOMContentLoaded', function() {
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

            const quantityInputElement = document.getElementById('quantityInput');
            quantityInputElement.value = totalSum;
        });

        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting immediately

                    const itemId = this.querySelector('input[name="item_id"]').value;

                    swal({
                            title: "Apakah anda yakin?",
                            text: "Ketika dihapus, anda tidak akan dapat memulihkan item ini!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                // User confirmed, submit the form
                                this.submit();
                            } else {
                                // User cancelled the deletion
                                swal("Item aman!", {
                                    icon: "info",
                                });
                            }
                        });
                });
            });
        });
    </script>
@endsection
