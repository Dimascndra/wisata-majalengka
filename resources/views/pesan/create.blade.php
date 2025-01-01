<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Majalengka</title>
    <!-- CSS lokal -->
    <link rel="stylesheet" href="/css/style.css">
    {{-- Direktori untuk compile tailwindcss --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Kondisi JS untuk mengganti dari dark atau light mode dan sebaliknya -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <main>
        <!-- Halaman form Pemesanan -->
        <section class="bg-gray-50 dark:bg-gray-900 pt-24">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <div class="form_content bg-white border border-gray-300 dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h4 class="font-bold text-4xl text-gray-900 dark:text-white mb-8 text-center">Form Pemesanan</h4>
                    <form action="{{ route('pesanan.store') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        @csrf
                        <div class="mb-5">
                            <label for="nama" class="block font-semibold text-gray-900 dark:text-white mb-1">Nama
                                Lengkap</label>
                            <input type="text" id="nama" name="nama" value="{{ auth()->user()->name ?? '' }}"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2">
                            @error('nama')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="nomor_identitas"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">No Identitas</label>
                            <input type="number" id="nomor_identitas" name="nomor_identitas"
                                value="{{ auth()->user()->nomor_identitas ?? '' }}"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2">
                            @error('nomor_identitas')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="no_hp" class="block font-semibold text-gray-900 dark:text-white mb-1">No.
                                HP</label>
                            <input type="number" id="no_hp" name="no_hp"
                                value="{{ auth()->user()->no_hp ?? '' }}"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2">
                            @error('no_hp')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="tempat_wisata"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Nama Wisata</label>
                            <select id="tempat_wisata" name="tempat_wisata" onchange="hargaTiket()"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2">
                                <option selected="">Pilih wisata</option>
                                <option value="Hutan Pinus Argalingga"
                                    {{ request('tempat_wisata') == 'Hutan Pinus Argalingga' ? 'selected' : '' }}>Hutan
                                    Pinus Argalingga</option>
                                <option value="Curug Cipeteuy"
                                    {{ request('tempat_wisata') == 'Curug Cipeteuy' ? 'selected' : '' }}>Curug Cipeteuy
                                </option>
                                <option value="Telaga Nila"
                                    {{ request('tempat_wisata') == 'Telaga Nila' ? 'selected' : '' }}>Telaga Nila
                                </option>
                                <option value="Curug Muara Jaya"
                                    {{ request('tempat_wisata') == 'Curug Muara Jaya' ? 'selected' : '' }}>Curug Muara
                                    Jaya</option>
                                <option value="Bukit Kanaga Hill"
                                    {{ request('tempat_wisata') == 'Bukit Kanaga Hill' ? 'selected' : '' }}>Bukit
                                    Kanaga Hill</option>
                                <option value="Lembah Panyaweuyan"
                                    {{ request('tempat_wisata') == 'Lembah Panyaweuyan' ? 'selected' : '' }}>Lembah
                                    Panyaweuyan</option>
                            </select>
                            @error('tempat_wisata')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="tanggal_kunjungan"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Tanggal Kunjungan</label>
                            <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2">
                            @error('tanggal_kunjungan')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="pengunjung_dewasa"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Pengunjung
                                Dewasa</label>
                            <input type="number" id="pengunjung_dewasa" name="pengunjung_dewasa"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2"
                                onwheel="this.blur();">
                            @error('pengunjung_dewasa')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="pengunjung_anakanak"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Pengunjung
                                Anak-anak<br><span class="text-sm text-gray-900 dark:text-gray-500">Usia di bawah 12
                                    tahun</span></label>
                            <input type="number" id="pengunjung_anakanak" name="pengunjung_anakanak"
                                class="w-full rounded-md border border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none p-2"
                                onwheel="this.blur();">
                            @error('pengunjung_anakanak')
                                <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                    role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium">{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Harga Tiket</label>
                            <div class="flex items-center border border-gray-300 dark:border-gray-700 rounded-md">
                                <span class="text-gray-600 dark:text-white px-3">Rp.</span>
                                <input name="harga_tiket" id="harga_tiket"
                                    class="bg-transparent flex-1 rounded-md shadow-sm focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 p-2"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="total_bayar"
                                class="block font-semibold text-gray-900 dark:text-white mb-1">Total Bayar</label>
                            <div class="flex items-center border border-gray-300 dark:border-gray-700 rounded-md">
                                <span class="text-gray-600 dark:text-white px-3">Rp.</span>
                                <input name="total_bayar" id="total_bayar"
                                    class="bg-transparent flex-1 rounded-md shadow-sm focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 p-2"
                                    readonly>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="flex items-center">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                    required>
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya dan/atau
                                    rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang
                                    telah ditetapkan</label>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <button type="button" id="hitung"
                                class="px-4 py-2 bg-blue-500 rounded-md text-white text-sm font-bold">Hitung Total
                                Bayar</button>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 rounded-md text-white text-sm font-bold">Pesan
                                Tiket</button>
                            <a href=""
                                class="px-4 py-2 bg-blue-500 rounded-md text-white text-sm font-bold text-center">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="p-4 text-white md:p-8 lg:p-10 bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex justify-center items-center text-2xl font-semibold text-white mb-3">
                Pemesanan Tiket Wisata Majalengka
            </a>
            <span class="text-sm text-gray-500 sm:text-center">© 2025</span>
        </div>
    </footer>

    <!-- JS Flowbite dalam bentuk cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!-- CDN Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- JS lokal -->
    <script src="/js/main.js"></script>
    <script>
        // Fungsi untuk mengisi value harga tiket sesuai nama wisata yang dipilih
        function hargaTiket() {
            // variabel untuk memilih elemen berdasarkan atribut id
            const namaWisata = document.getElementById("tempat_wisata").value;
            const hargaTiket = document.getElementById("harga_tiket");

            // Cek nama wisata pada dropdown nama wisata yang dipilih
            if (namaWisata == "Hutan Pinus Argalingga") {
                hargaTiket.value = 15000;
            } else if (namaWisata == "Curug Cipeteuy") {
                hargaTiket.value = 10000;
            } else if (namaWisata == "Telaga Nila") {
                hargaTiket.value = 5000;
            } else if (namaWisata == "Curug Muara Jaya") {
                hargaTiket.value = 10000;
            } else if (namaWisata == "Bukit Kanaga Hill") {
                hargaTiket.value = 5000;
            } else if (namaWisata == "Lembah Panyaweuyan") {
                hargaTiket.value = 10000;
            }
        }

        // Jquery untuk menghitung secara live pada form input
        $("#hitung").click(function() {
            // parseInt untuk mengkonversi sebuah string menjadi angka(integer)
            var pengunjung_dewasa = parseInt($("#pengunjung_dewasa").val());
            var pengunjung_anak = parseInt($("#pengunjung_anakanak").val());
            var harga_tiket = parseInt($("#harga_tiket").val());
            // Variabel dan kondisional perhitungan
            var harga_pengunjung_biasa = pengunjung_dewasa * harga_tiket;
            if (pengunjung_anak > 0) {
                var potongan = harga_tiket * 0.5;
                var potongan_harga_anak = pengunjung_anak * potongan;
                var total_harga_anak = pengunjung_anak * harga_tiket - potongan_harga_anak;
                // Menghitung total bayar
                var total_bayar = harga_pengunjung_biasa + total_harga_anak;
            } else {
                // Menghitung total bayar tanpa pengunjung anak
                var total_bayar = harga_pengunjung_biasa + pengunjung_anak;
            }
            // Mencetak hasil operasi perhitungan yang diambil variabel total_bayar dengan mengklik tombol hitung total bayar
            $("#total_bayar").val(total_bayar);
        });
    </script>
</body>

</html>
