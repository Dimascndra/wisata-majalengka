<?php

namespace App\Http\Controllers;

use App\Models\Grafik;
use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function index()
    {
        // variabel pembantu untuk memanggil fungsi dari model
        // hutan pinus limpakuwus
        $jmlAnakHPL = new Grafik();
        $jmlDewasaHPL = new Grafik();
        // curug bayan
        $jmlAnakCB = new Grafik();
        $jmlDewasaCB = new Grafik();
        // telaga kumpe
        $jmlAnakTK = new Grafik();
        $jmlDewasaTK = new Grafik();
        // curug jenggala
        $jmlAnakCJ = new Grafik();
        $jmlDewasaCJ = new Grafik();
        // bukit agaran
        $jmlAnakBA = new Grafik();
        $jmlDewasaBA = new Grafik();
        // pagubugan melung
        $jmlAnakPM = new Grafik();
        $jmlDewasaPM = new Grafik();

        // data daftar wisata
        $categories = ['Hutan Argalingga', 'Curug Cipeteuy', 'Telaga Nila', 'Curug Muara Jaya', 'Bukit Kanaga Hill', 'Lembah Panyaweuyan'];

        // data grafik
        $chart = [
            'series' => [
                [
                    'colorByPoint' => true,
                    'name' => 'jumlah',
                    'data' => [
                        ($jmlAnakHPL->jumlahAnakHutanPinus() + $jmlDewasaHPL->jumlahDewasaHutanPinus()),
                        ($jmlAnakCB->jumlahAnakCurugCipeteuy() + $jmlDewasaCB->jumlahDewasaCurugCipeteuy()),
                        ($jmlAnakTK->jumlahAnakTelagaNila() + $jmlDewasaTK->jumlahDewasaTelagaNila()),
                        ($jmlAnakCJ->jumlahAnakCurugMuaraJaya() + $jmlDewasaCJ->jumlahDewasaCurugMuaraJaya()),
                        ($jmlAnakBA->jumlahAnakBukitKanagaHill() + $jmlDewasaBA->jumlahDewasaBukitKanagaHill()),
                        ($jmlAnakPM->jumlahAnakLembahPanyaweuyan() + $jmlDewasaPM->jumlahDewasaLembahPanyaweuyan())
                    ]
                ]
            ]
        ];

        return view(('grafik'), compact('chart', 'categories'));
    }
}
