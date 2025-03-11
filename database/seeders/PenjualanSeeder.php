<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id'    => 1,
                'user_id'         => 12,
                'pembeli'         => 'Raka Pratama',
                'penjualan_kode'  => 'PJ001',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 2,
                'user_id'         => 14,
                'pembeli'         => 'Alya Maharani',
                'penjualan_kode'  => 'PJ002',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 3,
                'user_id'         => 19,
                'pembeli'         => 'Dimas Saputra',
                'penjualan_kode'  => 'PJ003',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 4,
                'user_id'         => 12,
                'pembeli'         => 'Nadira Fadhilah',
                'penjualan_kode'  => 'PJ004',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 5,
                'user_id'         => 14,
                'pembeli'         => 'Zaky Ramadhan',
                'penjualan_kode'  => 'PJ005',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 6,
                'user_id'         => 19,
                'pembeli'         => 'Faris Hidayat',
                'penjualan_kode'  => 'PJ006',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 7,
                'user_id'         => 12,
                'pembeli'         => 'Salsa Amelia',
                'penjualan_kode'  => 'PJ007',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 8,
                'user_id'         => 14,
                'pembeli'         => 'Reza Ananda',
                'penjualan_kode'  => 'PJ008',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 9,
                'user_id'         => 19,
                'pembeli'         => 'Indah Permatasari',
                'penjualan_kode'  => 'PJ009',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id'    => 10,
                'user_id'         => 19,
                'pembeli'         => 'Rizky Fauzan',
                'penjualan_kode'  => 'PJ010',
                'penjualan_tanggal' => Carbon::now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}