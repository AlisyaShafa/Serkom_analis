@extends('admin_layout.admin_header')

@section('isi')
<section class="bg-indigo-50">
    <div class="flex min-h-full flex-col justify-center px-6 py-20 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-indigo-900 sm:p-6 md:p-8 :bg-gray-800 ">
                <h1 class="text-center text-3xl font-extrabold tracking-tight text-indigo-900">FORM REGISTRASI
                    PELANGGAN
                </h1>
                <form class="space-y-6" action="/registrasiuser" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-indigo-900 ">Nama
                            Lengkap</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-indigo-900 ">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="telepon" class="block mb-2 text-sm font-medium text-indigo-900 ">Nomor
                            Telepon</label>
                        <input type="number" id="telepon" name="telepon"
                            class="bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-indigo-900 ">Alamat</label>
                        <input type="text" id="alamat" name="alamat"
                            class="bg-gray-50 border border-gray-300 text-indigo-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required />
                    </div>
                    <input type="hidden" name="no_meteran">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Submit</button>
                </form>
            </div>
        </div>
    </div>

</section>
    {{-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 ">
        
    </div> --}}
@endsection

{{-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 ">
    <form class="space-y-6" action="#">
        <h5 class="text-xl font-medium text-gray-900 ">Sign in to our platform</h5>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@company.com" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
        </div>
        <div class="flex items-start">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Login to your account</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</div> --}}
