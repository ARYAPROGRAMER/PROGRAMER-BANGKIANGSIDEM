<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'nama_barang' => 'Sepatu',
            'foto' => 'jpg',
            'berat' => '2',
            'biaya' => '55000',
            'tujuan' => 'Bangbang',
            'status' => 'Dikirim'
            
        ]);
    }
}
