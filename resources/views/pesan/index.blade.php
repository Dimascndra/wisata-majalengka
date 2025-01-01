{{-- menghubungkan dengan file header --}}
@include('header')
<!-- Halaman Pesanan -->
<section class="bg-gray-50 dark:bg-gray-900 pt-24 pb-24">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Invoice
                Pemesanan</h2>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            @forelse ($pesanan as $pesan)
                <div class="p-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Nama Lengkap</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->nama }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Nomor Identitas</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->nomor_identitas }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">No. HP</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->no_hp }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Tempat Wisata</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->tempat_wisata }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Pengunjung Dewasa</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->pengunjung_dewasa }} orang</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Pengunjung
                                Anak-anak</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: {{ $pesan->pengunjung_anakanak }} orang
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Harga Tiket</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: Rp {{ $pesan->harga_tiket }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 items-center">
                        <div>
                            <label class="font-semibold text-gray-900 dark:text-white">Total Bayar</label>
                        </div>
                        <div>
                            <p class="text-gray-600 dark:text-white">: Rp {{ $pesan->total_bayar }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button onclick="printTicket({{ $pesan->id }})"
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg">
                            Print Invoice
                        </button>
                        <button onclick="deletePesanan({{ $pesan->id }})"
                            class="ml-2 px-4 py-2 bg-red-500 text-white rounded-lg">
                            Hapus Pesanan
                        </button>
                    </div>
                </div>
            @empty
                <div id="alert-border-2"
                    class="flex p-6 mb-6 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 "
                    role="alert">
                    <svg class="flex-shrink-0 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="ml-3 text-lg font-medium">
                        Data Pesanan Belum Tersedia
                    </div>
                    <button type="button"
                        class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-2 hover:bg-red-200 inline-flex h-10 w-10 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-2" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endforelse
        </div>
    </div>
</section>
<script>
    function printTicket(id) {
        window.open(`/print-invoice/${id}`, '_blank');
    }

    function deletePesanan(id) {
        if (confirm('Apakah Anda yakin ingin menghapus pesanan ini?')) {
            fetch(`/delete-pesanan/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => {
                    if (response.ok) {
                        location.reload();
                    } else {
                        alert('Gagal menghapus pesanan.');
                    }
                });
        }
    }
</script>

{{-- menghubungkan dengan file footer --}}
@include('footer')
