@extends('guest_layout.guest_navbar')

@section('isi')
    <section class="bg-gray-50 ">
        <div class="flex flex-col items-center justify-center px-6 py-6 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                <img class="mx-auto h-14 w-auto" src="{{ asset('img/Lightning_listrik.png') }}" alt="logo">
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/autentikasi" method="post">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="Masukkan Email" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                            </div>
                        </div>
                        <button type="submit"text-center
                            class="w-full bg-indigo-600 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <body class="h-full bg-cyan-300">
        <div class="flex min-h-full flex-col justify-center px-6 py-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <a class="text-2xl flex font-extrabold text-amber-300 underline decoration-wavy justify-center">LISTRIK<span
                        class="text-red-600">JETREK</span></a>
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your
                    account</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="/autentikasi" method="post">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                            in</button>
                    </div>
                </form>

            </div>
        </div> --}}
    </body>

    </html>
@endsection
{{-- <html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.8" />
    <title>SIGN IN FORM</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="main-box">
            <h1>Log In</hi>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="email" id="email" name="email" required />
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="password" id="password" name="password" required />
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
        </div>
    </div>
</body>

</html> --}}
