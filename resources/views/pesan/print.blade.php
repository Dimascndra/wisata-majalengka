<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Pemesanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                overflow: hidden;
            }

            .printableArea {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .printableArea * {
                visibility: visible;
            }
        }
    </style>
    <script>
        window.onload = function() {
            window.print();
            window.onafterprint = function() {
                window.close();
            };
        };
    </script>
</head>

<body>
    <div class="printableArea">
        <div class="p-6 bg-light shadow-md rounded-lg" style="width: 100%; height: auto;">
            <h1 class="text-2xl font-bold mb-4 text-dark text-center">Invoice Pemesanan</h1>
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-dark">Detail Pelanggan</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-semibold">Nama Lengkap: <span>{{ $pesanan->nama }}</span></li>
                            <li class="font-semibold">Nomor Identitas: <span>{{ $pesanan->nomor_identitas }}</span></li>
                            <li class="font-semibold">No. HP: <span>{{ $pesanan->no_hp }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-dark">Detail Pesanan</h2>
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-semibold">Tempat Wisata: <span>{{ $pesanan->tempat_wisata }}</span></li>
                            <li class="font-semibold">Pengunjung Dewasa: <span>{{ $pesanan->pengunjung_dewasa }}
                                    orang</span></li>
                            <li class="font-semibold">Pengunjung Anak-anak: <span>{{ $pesanan->pengunjung_anakanak }}
                                    orang</span></li>
                            <li class="font-semibold">Harga Tiket: <span>Rp {{ $pesanan->harga_tiket }}</span></li>
                            <li class="font-semibold">Total Bayar: <span>Rp {{ $pesanan->total_bayar }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
