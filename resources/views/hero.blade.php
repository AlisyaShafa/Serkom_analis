@extends('admin_layout.admin_header')

@section('isi')
    <header class="shadow bg-indigo-50">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-indigo-900 text-center">Tabel Data Pelanggan</h1>
        </div>
    </header>
    <main class="">
        <form action="/hero/search" method="GET">
            @csrf
            <div class="flex max-w-sm mx-auto mt-4">
                <input id="search" name="search"
                    class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    type="search" placeholder="Search">
                <button
                    class="inset-y-0 right-0 flex items-center px-4 text-gray-700 bg-gray-100 border border-gray-300 rounded-r-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.795 13.408l5.204 5.204a1 1 0 01-1.414 1.414l-5.204-5.204a7.5 7.5 0 111.414-1.414zM8.5 14A5.5 5.5 0 103 8.5 5.506 5.506 0 008.5 14z" />
                    </svg>
                </button>
            </div>
        </form>



        <div class="flex justify-center h-">
            <div class="w-full sm:w-10/12 lg:w-9/12">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow rounded-lg bg-gray-100">
                            <table class="min-w-full text-center text-sm font-light text-surface">
                                <thead class="border-b border-neutral-200 bg-indigo-900 font-medium text-white">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">No</th>
                                        <th scope="col" class="px-6 py-3">Nama</th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                        <th scope="col" class="px-6 py-3">Nomor Meteran</th>
                                        <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                                        <th scope="col" class="px-6 py-3">Alamat</th>
                                        <th scope="col" class="px-6 py-3">Status</th>
                                        <th scope="col" class="px-6 py-3"></th>
                                        <th scope="col" class="px-6 py-3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($DataPelanggan as $semuadata)
                                        <tr class="border-b border-gray-200">
                                            <td class="px-6 py-4">{{ $no++ }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->name }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->email }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->no_meteran }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->telepon }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->alamat }}</td>
                                            <td class="px-6 py-4">{{ $semuadata->status }}</td>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('ubahdata', $semuadata->id) }}"
                                                    class="font-medium text-blue-600 hover:underline">Edit</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <form method="POST" action="{{ route('hapusdata', $semuadata->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="font-medium text-blue-600 hover:underline">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <tr class="border-4">
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Nomor Meteran</th>
                    <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                </tr>
                @foreach ($DataPelanggan as $semuadata)
                    <tr class="border-4">
                        <td class="px-6 py-4">{{ $semuadata->id }}</td>
                        <td class="px-6 py-4">{{ $semuadata->name }}</td>
                        <td class="px-6 py-4">{{ $semuadata->email }}</td>
                        <td class="px-6 py-4">{{ $semuadata->no_meteran }}</td>
                        <td class="px-6 py-4">{{ $semuadata->telepon }}</td>
                        <td class="px-6 py-4">{{ $semuadata->alamat }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('ubahdata', $semuadata->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('hapusdata', $semuadata->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div> --}}



            {{-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div>
              @if (session()->has('Update'))
               <p>{{ session('Update') }}</p>
              @endif
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomer Meteran</th>
                        <th>Nomer Telepon</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($DataPelanggan as $semuadata)
                        <tr>
                            <td>{{ $semuadata->id }}</td>
                            <td>{{ $semuadata->name }}</td>
                            <td>{{ $semuadata->email }}</td>
                            <td>{{ $semuadata->no_meteran }}</td>
                            <td>{{ $semuadata->telepon }}</td>
                            <td>{{ $semuadata->alamat }}</td>
                            <td>
                                <a href="{{ route('ubahdata', $semuadata->id) }}">Ubah</a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('hapusdata', $semuadata->id) }}">
                                  @csrf
                                  @method('delete')
                                  <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div> --}}
    </main>
@endsection
