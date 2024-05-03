<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Satuan;


class Barang extends Model
{
    protected $table = 'barangs';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_barang',
        'deskripsi_barang',
        'satuan_id',
        'image_url',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}

