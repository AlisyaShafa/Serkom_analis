@extends('admin_layout.admin_header')

@section('isi')
    <section class="bg-indigo-50">
        <div class="flex min-h-full flex-col justify-center px- py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-indigo-900 sm:p-6 md:p-8 :bg-gray-800 ">
                    <h1 class="text-center text-3xl font-extrabold tracking-tight text-indigo-900">EDIT DATA PELANGGAN
                    </h1>
                    <form class="max-w-sm mx-auto" action="{{ route('updatedata', $DataPelanggan->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-5 mt-8">
                            <label for="name" class="block mb-2 text-sm font-medium text-indigo-900 ">Nama
                                Lengkap</label>
                            <input type="text" id="name" name="name" value="{{ $DataPelanggan->name }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-indigo-900 ">Email</label>
                            <input type="email" id="email" name="email" value="{{ $DataPelanggan->email }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                        </div>
                        <div class="mb-5">
                            <label for="telepon" class="block mb-2 text-sm font-medium text-indigo-900 ">Nomor
                                Telepon</label>
                            <input type="number" id="telepon" name="telepon" value="{{ $DataPelanggan->telepon }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                        </div>
                        <div class="mb-5">
                            <label for="alamat" class="block mb-2 text-sm font-medium text-indigo-900 ">Alamat</label>
                            <input type="text" id="alamat" name="alamat" value="{{ $DataPelanggan->alamat }}"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                required />
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
