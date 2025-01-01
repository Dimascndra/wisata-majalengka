<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tiket extends Model
{
    use HasFactory;

    // menambahkan variabel untuk manipulasi data
    protected $fillable = [
        'user_id',
        'nama',
        'nomor_identitas',
        'no_hp',
        'tempat_wisata',
        'tanggal_kunjungan',
        'pengunjung_dewasa',
        'pengunjung_anakanak',
        'harga_tiket',
        'total_bayar'
    ];

    // relasi dengan model User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
