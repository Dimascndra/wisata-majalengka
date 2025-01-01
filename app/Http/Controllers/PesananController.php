<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{   // fungsi untuk menampilkan halaman daftar pesanan
    public function index()
    {   // mengambil data dari database
        $pesanan = Tiket::all();
        // mengatur tampilan
        return view('pesan.index', compact('pesanan'));
    }

    // fungsi untuk menampilkan halaman form pemesanan
    public function create()
    {
        return view('pesan.create');
    }

    // fungsi untuk validasi fom pemesanan
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'user_id' => 'required',
            'nama' => 'required',
            'nomor_identitas' => 'required|min:16|max:16',
            'no_hp' => 'required|min:11|max:13',
            'tempat_wisata' => 'required',
            'tanggal_kunjungan' => 'required',
            'pengunjung_dewasa' => 'required',
            'pengunjung_anakanak' => 'required',
            'harga_tiket' => 'required',
            'total_bayar' => 'required'
        ]);

        //membuat form pemesanan
        Tiket::create([
            'user_id'                  => $request->user_id,
            'nama'                  => $request->nama,
            'nomor_identitas'       => $request->nomor_identitas,
            'no_hp'                 => $request->no_hp,
            'tempat_wisata'         => $request->tempat_wisata,
            'tanggal_kunjungan'     => $request->tanggal_kunjungan,
            'pengunjung_dewasa'     => $request->pengunjung_dewasa,
            'pengunjung_anakanak'   => $request->pengunjung_anakanak,
            'harga_tiket'           => $request->harga_tiket,
            'total_bayar'           => $request->total_bayar
        ]);

        //menampilkan halaman daftar pesanan setelah mengisi form pesanan
        return redirect()->route('pesanan.index');
    }

    // fungsi untuk mencetak invoice berdasarkan ID
    public function print($id)
    {
        $pesanan = Tiket::findOrFail($id);
        return view('pesan.print', compact('pesanan'));
    }

    public function destroy($id)
    {
        $pesanan = Tiket::find($id);

        if ($pesanan) {
            $pesanan->delete();
            return response()->json(['message' => 'Pesanan berhasil dihapus.'], 200);
        }

        return response()->json(['message' => 'Pesanan tidak ditemukan.'], 404);
    }
}
