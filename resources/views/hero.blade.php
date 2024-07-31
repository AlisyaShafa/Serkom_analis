@extends('admin_layout.admin_header')

@section('isi')

    <header class="shadow bg-indigo-50" >
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold tracking-tight text-indigo-900 text-center">Data Pelanggan</h1>
        </div>
    </header>
    <main class="bg-indigo-50">
        <div>
            <form class="max-w-md mx-auto " action="/hero/search" method="GET">
                <label for="search" class="mb-2 text-sm font-medium text-indigo-900 sr-only "></label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search" name="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search" required />
                    <button type="submit"
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-indigo-900 rounded-e-lg border border-indigo-950 hover:bg-indigo-950 focus:ring-4 focus:outline-none focus:ring-slate-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </form>
        </div>


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
