@extends('guest_layout.guest_navbar')

@section('isi')
    <div class="flex justify-around py-5 bg-indigo-50">
        {{-- Data Pelanggan --}}
        <div class="rounded-lg bg-indigo-300 shadow-2xl p-6 w-2/5">
            <div class="px-4 sm:px-0">
                <h3 class="text-xl leading-7 text-black font-bold text-center">Data Pelanggan</h3>
            </div>
            <div class="mt-6">
                <dl class="grid grid-cols-2 gap-x-4 gap-y-4 ml-16">
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-black">Nama Lengkap</dt>
                        <dd class="mt-1 text-sm leading-6 text-black">{{ $detailpembayaran->name }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-black">Email</dt>
                        <dd class="mt-1 text-sm leading-6 text-black">{{ $detailpembayaran->email }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-black">Nomor Meteran</dt>
                        <dd class="mt-1 text-sm leading-6 text-black">{{ $detailpembayaran->no_meteran }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-black">Nomor Telepon</dt>
                        <dd class="mt-1 text-sm leading-6 text-black">{{ $detailpembayaran->telepon }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-black">Alamat</dt>
                        <dd class="mt-1 text-sm leading-6 text-black">{{ $detailpembayaran->alamat }}</dd>
                    </div>
                </dl>
            </div>
        </div>

        {{-- Data Tagihan --}}
        <div class="rounded-lg bg-indigo-50 shadow-2xl p-6 w-2/5 ml-8 text-center">
            <div class="px-4 sm:px-0">
                <h3 class="text-xl leading-5 text-indigo-900 font-bold">Data Tagihan</h3>
            </div>
            <div class="mt-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-4">
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-indigo-900">Jumlah Meteran</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700">{{ $pembayaran->jumlah_meteran }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-indigo-900">Tanggal</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700">{{ $pembayaran->created_at }}</dd>
                    </div>
                    <div class="col-span-1">
                        <dt class="text-sm font-semibold leading-6 text-indigo-900">Total Pembayaran</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700">{{ $pembayaran->price }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8">
        <div id="snap-container">
            <button id="pay-button"
                class="bg-indigo-300 text-black hover:bg-indigo-900 hover:text-white px-4 py-2 rounded">Bayar</button>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    window.location.href = "{{ route('payment.success') }}";
                },
            });
        };
    </script>
@endsection
