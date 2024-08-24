<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-indigo-300 sticky top-0">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="mx-auto h-8 w-auto" src="{{ asset('img/Lightning_listrik.png') }}" alt="logo">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/hero"
                                    class="{{ request()->is('/hero') ? 'bg-cyan-300 text-black' : ' text-indigo-900
                                     hover:bg-indigo-900 hover:text-white' }} rounded-lg px-3 py-2 text-sm font-bold"
                                    aria-current="page">Dashboard</a>
                                <a href="/registrasiuser"
                                    class="{{ request()->is('/registrasiuser') ? 'bg-cyan-300 text-black' : 'rounded-md text-indigo-900
                                     hover:bg-indigo-900 hover:text-white' }} px-3 py-2 text-sm font-bold">Registrasi
                                    Pelanggan</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Log out -->
                            <div class="relative ml-3">
                                <div>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button
                                            class="relative flex max-w-xs items-center bg-light hover:bg-black-700 hover:text-white"><i
                                                data-feather="user"></i>Log out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/hero" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-bold text-white"
                        aria-current="page">Dashboard</a>
                    <a href="/registrasiuser"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:bg-black-700 hover:text-white">Registrasi
                        Pelanggan</a>
                    <a href="/logout"
                        class="block rounded-md px-3 py-2 text-base font-medium text-black-300 hover:bg-black-700 hover:text-white">Keluar</a>
                </div>
            </div>
        </nav>

        <div class="bg-slate-300 shadow">
            @yield('isi')
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>
