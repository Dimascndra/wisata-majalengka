<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Majalengka</title>
    <!-- CSS lokal -->
    <link rel="stylesheet" href="css/style.css">
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
        <!-- Halaman grafik -->
        <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 pt-24">
            <div class="mx-auto max-w-2xl px-4 lg:px-12">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Grafik
                        Pengunjung Wisata</h2>
                </div>
                <figure class="highcharts-figure">
                    <div id="grafik"></div>
                </figure>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- JS Flowbite dalam bentuk cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!-- CDN Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- JS lokal -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // inisialisasi variabel dari controller
            const categories = <?php echo json_encode($categories); ?>;
            const chart = <?php echo json_encode($chart); ?>;

            Highcharts.chart('grafik', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Jumlah Pengunjung Wisata'
                },
                subtitle: {
                    text: 'Jumlah pengunjung anak dan dewasa'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    categories: categories,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah (orang)'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y}'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:1f} orang</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                series: chart.series
            });
        });
    </script>
</body>

</html>
