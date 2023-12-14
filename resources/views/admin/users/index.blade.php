@extends('admin.partials.master')
@section('content')
    <section class="page-section">
        @include('admin.partials.sidebar')

        <div class="page-content">
            <div class="header d-block d-md-flex align-items-center justify-content-between pb-2">
                <div class="">
                    <p class="">Hai Admin,</p>
                    <h3 class="">Manajemen User</h3>
                </div>
                <div class="">
                    @can('superadmin')
                        <button type="button" class="primary-button" onclick="location.href='/admin/users/create'">Tambah
                            User</button>
                    @endcan
                </div>
            </div>
            <div class="content-wrapper">
                @if (session('success'))
                    <div id="alert-success" class="alert alert-success w-100">
                        {{ session('success') }}
                    </div>
                @endif
                @can('superadmin')
                    <form action="/admin/users" method="GET" id="search-form" class="w-100">
                        <div class="item-filters ">
                            <div class="search w-100">
                                <i class="">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2944 2.55566C17.6644 2.55566 22.0324 6.92366 22.0324 12.2937C22.0324 14.8272 21.0601 17.1379 19.4691 18.8722L22.5998 21.9964C22.8928 22.2894 22.8938 22.7634 22.6008 23.0564C22.4548 23.2044 22.2618 23.2774 22.0698 23.2774C21.8788 23.2774 21.6868 23.2044 21.5398 23.0584L18.3713 19.8987C16.7045 21.2335 14.5911 22.0327 12.2944 22.0327C6.92442 22.0327 2.55542 17.6637 2.55542 12.2937C2.55542 6.92366 6.92442 2.55566 12.2944 2.55566ZM12.2944 4.05566C7.75142 4.05566 4.05542 7.75066 4.05542 12.2937C4.05542 16.8367 7.75142 20.5327 12.2944 20.5327C16.8364 20.5327 20.5324 16.8367 20.5324 12.2937C20.5324 7.75066 16.8364 4.05566 12.2944 4.05566Z"
                                            fill="currentColor" />
                                    </svg>
                                </i>
                                <input type="text" name="search" class="" id="search-input" placeholder="Cari User..."
                                    value="{{ request('search') }}">
                            </div>
                            <div class="d-flex flex-column flex-md-row w-100 gap-lg-3 gap-2">
                                <div class="select-box w-100">
                                    <select name="role_id" id="roles-select">
                                        <option value="">Roles</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                {{ request('role_id') == $role->id ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group-append">
                                    <button class="search-button search-button-none" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endcan
                <div class="overflow-x-auto w-100">
                    <table id="items" class="">
                        <tr class="bg-[#F6F6F6] text-sm ">
                            <th class="col-one">Nama</th>
                            <th class="col-three">Email</th>
                            <th class="col-five">Aksi</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr class="table-item">
                                <td class="">
                                    <div class="first-column">
                                        <div class="member-photo">
                                            @if ($user->image)
                                                <img src="{{ Storage::url($user->image) }}" class="object-fit-cover"
                                                    style="width: 250px; height: 250px" alt="" id=''>
                                            @else
                                                <img src="{{ asset('assets/pict/pp1.png') }}" alt="">
                                            @endif
                                        </div>
                                        <div class="">
                                            <p class="first-p">{{ $user->name }}</p>
                                            <p class="second-p">{{ $user->role->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="">{{ $user->email }}</td>
                                <td class="">
                                    <div class="action-buttons">
                                        @if ($user->id === auth()->user()->id || Gate::allows('superadmin'))
                                            <button class=""
                                                onclick="location.href='/admin/users/{{ $user->username }}/edit'">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.3905 3.04405C14.8873 3.04405 15.2905 3.44725 15.2905 3.94405C15.2905 4.44085 14.8873 4.84405 14.3905 4.84405H9.90372C6.80292 4.84405 4.80012 6.96805 4.80012 10.2548V20.2316C4.80012 23.5184 6.80292 25.6425 9.90372 25.6425H20.4925C23.5933 25.6425 25.5973 23.5184 25.5973 20.2316V15.398C25.5973 14.9012 26.0005 14.498 26.4973 14.498C26.9941 14.498 27.3973 14.9012 27.3973 15.398V20.2316C27.3973 24.5444 24.6217 27.4424 20.4925 27.4424H9.90372C5.77452 27.4424 3.00012 24.5444 3.00012 20.2316V10.2548C3.00012 5.94205 5.77452 3.04405 9.90372 3.04405H14.3905ZM24.842 4.09837L26.3024 5.55877C27.014 6.26917 27.4052 7.21357 27.404 8.21917C27.404 9.22477 27.0128 10.168 26.3024 10.8772L17.2916 19.888C16.6304 20.5492 15.7496 20.914 14.8136 20.914H10.3184C10.076 20.914 9.84324 20.8156 9.67404 20.6416C9.50484 20.4688 9.41244 20.2348 9.41844 19.9912L9.53124 15.4564C9.55404 14.554 9.91764 13.7056 10.556 13.066H10.5572L19.5248 4.09837C20.9912 2.63437 23.3756 2.63437 24.842 4.09837ZM18.7861 7.38157L11.8292 14.3392C11.5184 14.65 11.342 15.0628 11.3312 15.5008L11.2412 19.114H14.8136C15.2696 19.114 15.6968 18.9376 16.0196 18.6148L23.0185 11.614L18.7861 7.38157ZM20.7968 5.37157L20.0581 6.10837L24.2905 10.342L25.0304 9.60397C25.4 9.23437 25.604 8.74237 25.604 8.21917C25.604 7.69477 25.4 7.20157 25.0304 6.83197L23.57 5.37157C22.8056 4.60957 21.5624 4.60957 20.7968 5.37157Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        @endif
                                        {{-- <button class="" data-bs-toggle="modal" data-bs-target="#sendPassModal">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M20.2008 3C24.2676 3 27 5.8536 27 10.0992V19.9008C27 24.1464 24.2676 27 20.1984 27H9.7968C5.7312 27 3 24.1464 3 19.9008V10.0992C3 5.8536 5.7312 3 9.7968 3H20.2008ZM20.2008 4.8H9.7968C6.762 4.8 4.8 6.8796 4.8 10.0992V19.9008C4.8 23.1204 6.762 25.2 9.7968 25.2H20.1984C23.2368 25.2 25.2 23.1204 25.2 19.9008V10.0992C25.2 6.8796 23.2368 4.8 20.2008 4.8ZM11.2042 11.8781C12.6145 11.8791 13.8065 12.816 14.1939 14.0987L21.0116 14.0994C21.5084 14.0994 21.9116 14.5026 21.9116 14.9994V17.223C21.9116 17.7198 21.5084 18.123 21.0116 18.123C20.5148 18.123 20.1116 17.7198 20.1116 17.223V15.8994L18.5172 15.8988L18.5178 17.223C18.5178 17.7198 18.1146 18.123 17.6178 18.123C17.121 18.123 16.7178 17.7198 16.7178 17.223L16.7172 15.8988L14.1945 15.9C13.8073 17.1841 12.6134 18.1229 11.2042 18.1229C9.48216 18.1229 8.08176 16.7213 8.08176 15.0005C8.08176 13.2785 9.48216 11.8781 11.2042 11.8781ZM11.2066 13.6781C10.4746 13.6781 9.88176 14.2709 9.88176 15.0005C9.88176 15.7301 10.4746 16.3229 11.2042 16.3229C11.9326 16.3229 12.5266 15.7301 12.5266 15.0005C12.5266 14.2721 11.9338 13.6793 11.2066 13.6781Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button> --}}
                                        @can('superadmin')
                                            <form action="/admin/users/{{ $user->username }}" method="POST"
                                                onsubmit="return confirm('Apakah anda yakin ingin menghapus user ini?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="delete-button" data-bs-toggle="modal"
                                                    data-bs-target="#removeModal">
                                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M23.8615 11.064C24.3571 11.1048 24.7267 11.538 24.6871 12.0336C24.6799 12.1152 24.0295 20.1684 23.6551 23.5464C23.4223 25.6428 22.0375 26.9184 19.9471 26.9568C18.3475 26.9844 16.8043 27 15.2959 27C13.6699 27 12.0847 26.982 10.5163 26.9496C8.50987 26.91 7.12147 25.6092 6.89467 23.5548C6.51667 20.1468 5.86987 12.114 5.86387 12.0336C5.82307 11.538 6.19267 11.1036 6.68827 11.064C7.17667 11.0508 7.61827 11.394 7.65787 11.8884C7.6617 11.9405 7.92612 15.2208 8.21427 18.4665L8.27214 19.1142C8.41727 20.7274 8.56438 22.2776 8.68387 23.3568C8.81227 24.5244 9.44227 25.1268 10.5535 25.1496C13.5535 25.2132 16.6147 25.2168 19.9147 25.1568C21.0955 25.134 21.7339 24.5436 21.8659 23.3484C22.2379 19.9956 22.8859 11.97 22.8931 11.8884C22.9327 11.394 23.3707 11.0484 23.8615 11.064ZM17.8144 3.00037C18.916 3.00037 19.8844 3.74317 20.1688 4.80757L20.4736 6.32077C20.5721 6.81682 21.0074 7.17908 21.5115 7.18703L25.4496 7.18717C25.9464 7.18717 26.3496 7.59037 26.3496 8.08717C26.3496 8.58397 25.9464 8.98717 25.4496 8.98717L21.5467 8.98699C21.5406 8.98711 21.5345 8.98717 21.5284 8.98717L21.4992 8.98597L9.04989 8.98702C9.04022 8.98712 9.03053 8.98717 9.02083 8.98717L9.00235 8.98597L5.09995 8.98717C4.60315 8.98717 4.19995 8.58397 4.19995 8.08717C4.19995 7.59037 4.60315 7.18717 5.09995 7.18717L9.03715 7.18597L9.15838 7.17829C9.60992 7.11971 9.98519 6.77677 10.0768 6.32077L10.3684 4.86157C10.6648 3.74317 11.6332 3.00037 12.7348 3.00037H17.8144ZM17.8144 4.80037H12.7348C12.4468 4.80037 12.1936 4.99357 12.1204 5.27077L11.8408 6.67477C11.8053 6.8526 11.7536 7.02398 11.6873 7.18749H18.8623C18.796 7.02398 18.7441 6.8526 18.7084 6.67477L18.4168 5.21557C18.3556 4.99357 18.1024 4.80037 17.8144 4.80037Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="pagination d-flex justify-content-center pt-4">
                {{ $users->links('admin.partials.custom_pagination') }}
            </div>
        </div>
    </section>
@endsection
