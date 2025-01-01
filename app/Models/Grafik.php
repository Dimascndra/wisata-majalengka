<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Grafik extends Model
{
    // use HasFactory;

    // fungsi hitung jumlah pengunjung anak hutan pinus Argalingga
    public function jumlahAnakHutanPinus()
    {
        $hitungJumlahAnakHPL = DB::table('tikets')
            ->where('tempat_wisata', 'Hutan Pinus Argalingga')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakHPL;
    }

    // fungsi hitung jumlah pengunjung dewasa hutan pinus Argalingga
    public function jumlahDewasaHutanPinus()
    {
        $hitungJumlahDewasaHPL = DB::table('tikets')
            ->where('tempat_wisata', 'Hutan Pinus Argalingga')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaHPL;
    }

    // fungsi hitung jumlah pengunjung anak curug Cipeteuy
    public function jumlahAnakCurugCipeteuy()
    {
        $hitungJumlahAnakCB = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Cipeteuy')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakCB;
    }

    // fungsi hitung jumlah pengunjung dewasa curug Cipeteuy
    public function jumlahDewasaCurugCipeteuy()
    {
        $hitungJumlahDewasaCB = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Cipeteuy')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaCB;
    }

    // fungsi hitung jumlah pengunjung anak telaga nila
    public function jumlahAnakTelagaNila()
    {
        $hitungJumlahAnakTK = DB::table('tikets')
            ->where('tempat_wisata', 'Telaga Nila')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakTK;
    }

    // fungsi hitung jumlah pengunjung dewasa telaga nila
    public function jumlahDewasaTelagaNila()
    {
        $hitungJumlahDewasaTK = DB::table('tikets')
            ->where('tempat_wisata', 'Telaga Nila')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaTK;
    }

    // fungsi hitung jumlah pengunjung anak curug muara Jaya
    public function jumlahAnakCurugMuaraJaya()
    {
        $hitungJumlahAnakCJ = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Muara Jaya')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakCJ;
    }

    // fungsi hitung jumlah pengunjung dewasa curug muara Jaya
    public function jumlahDewasaCurugMuaraJaya()
    {
        $hitungJumlahDewasaCJ = DB::table('tikets')
            ->where('tempat_wisata', 'Curug Muara Jaya')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaCJ;
    }

    // fungsi hitung jumlah pengunjung anak bukit kanaga Hill
    public function jumlahAnakBukitKanagaHill()
    {
        $hitungJumlahAnakBA = DB::table('tikets')
            ->where('tempat_wisata', 'Bukit Kanaga Hill')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakBA;
    }

    // fungsi hitung jumlah pengunjung dewasa bukit kanaga Hill
    public function jumlahDewasaBukitKanagaHill()
    {
        $hitungJumlahDewasaBA = DB::table('tikets')
            ->where('tempat_wisata', 'Bukit Kanaga Hill')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaBA;
    }

    // fungsi hitung jumlah pengunjung anak lembah panyaweuyan
    public function jumlahAnakLembahPanyaweuyan()
    {
        $hitungJumlahAnakPM = DB::table('tikets')
            ->where('tempat_wisata', 'Lembah Panyaweuyan')
            ->sum('pengunjung_anakanak');
        return $hitungJumlahAnakPM;
    }

    // fungsi hitung jumlah pengunjung dewasa lembah panyaweuyan
    public function jumlahDewasaLembahPanyaweuyan()
    {
        $hitungJumlahDewasaPM = DB::table('tikets')
            ->where('tempat_wisata', 'Lembah Panyaweuyan')
            ->sum('pengunjung_dewasa');
        return $hitungJumlahDewasaPM;
    }
}
