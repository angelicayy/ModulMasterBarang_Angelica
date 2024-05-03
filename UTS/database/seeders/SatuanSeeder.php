<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'BK',
                'nama_satuan' => 'Buku'
            ],
            [
                'kode_satuan' => 'EA',
                'nama_satuan' => 'Eks'
            ],
            [
                'kode_satuan' => 'PCK',
                'nama_satuan' => 'Pcs'
            ],
        ]);
    }
}
