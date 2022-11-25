<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanggananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Langganan::insert([
            [
                'id' => '1m',
                'judul' => '1 Bulan',
                'harga' => 50000,
                'durasi/bulan' => 1,
                'warna' => 'rgb(255,165,0)'
            ],
            [
                'id' => '3m',
                'judul' => '3 Bulan',
                'harga' => 130000,
                'durasi/bulan' => 3,
                'warna' => 'rgb(60,179,113)'
            ],
            [
                'id' => '6m',
                'judul' => '6 Bulan',
                'harga' => 250000,
                'durasi/bulan' => 6,
                'warna' => 'rgb(106,90,205)'
            ],
    ]);
    }
}
