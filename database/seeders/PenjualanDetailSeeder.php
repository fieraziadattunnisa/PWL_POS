<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Penjualan 1
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 300000, 'jumlah' => 2],
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 3, 'harga' => 2000000, 'jumlah' => 1],
            ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 5, 'harga' => 100000, 'jumlah' => 3],

            // Penjualan 2
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 2, 'harga' => 600000, 'jumlah' => 1],
            ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 500000, 'jumlah' => 2],
            ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 6, 'harga' => 150000, 'jumlah' => 4],

            // Penjualan 3
            ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 7, 'harga' => 2500000, 'jumlah' => 2],
            ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 8, 'harga' => 30000, 'jumlah' => 1],
            ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 9, 'harga' => 400000, 'jumlah' => 3],

            // Penjualan 4
            ['detail_id' => 10, 'penjualan_id' => 4, 'barang_id' => 10, 'harga' => 125000, 'jumlah' => 2],
            ['detail_id' => 11, 'penjualan_id' => 4, 'barang_id' => 4, 'harga' => 750000, 'jumlah' => 5],
            ['detail_id' => 12, 'penjualan_id' => 4, 'barang_id' => 9, 'harga' => 180000, 'jumlah' => 3],

            // Penjualan 5
            ['detail_id' => 13, 'penjualan_id' => 5, 'barang_id' => 10, 'harga' => 15000, 'jumlah' => 4],
            ['detail_id' => 14, 'penjualan_id' => 5, 'barang_id' => 8, 'harga' => 13000, 'jumlah' => 2],
            ['detail_id' => 15, 'penjualan_id' => 5, 'barang_id' => 4, 'harga' => 3000, 'jumlah' => 5],

            // Penjualan 6
            ['detail_id' => 16, 'penjualan_id' => 6, 'barang_id' => 1, 'harga' => 900000, 'jumlah' => 1],
            ['detail_id' => 17, 'penjualan_id' => 6, 'barang_id' => 3, 'harga' => 5000000, 'jumlah' => 2],
            ['detail_id' => 18, 'penjualan_id' => 6, 'barang_id' => 5, 'harga' => 100000, 'jumlah' => 3],

            // Penjualan 7
            ['detail_id' => 19, 'penjualan_id' => 7, 'barang_id' => 2, 'harga' => 6500000, 'jumlah' => 2],
            ['detail_id' => 20, 'penjualan_id' => 7, 'barang_id' => 4, 'harga' => 5500000, 'jumlah' => 1],
            ['detail_id' => 21, 'penjualan_id' => 7, 'barang_id' => 6, 'harga' => 100000, 'jumlah' => 4],

            // Penjualan 8
            ['detail_id' => 22, 'penjualan_id' => 8, 'barang_id' => 7, 'harga' => 250000, 'jumlah' => 3],
            ['detail_id' => 23, 'penjualan_id' => 8, 'barang_id' => 8, 'harga' => 350000, 'jumlah' => 2],
            ['detail_id' => 24, 'penjualan_id' => 8, 'barang_id' => 9, 'harga' => 500000, 'jumlah' => 1],

            // Penjualan 9
            ['detail_id' => 25, 'penjualan_id' => 9, 'barang_id' => 4, 'harga' => 120000, 'jumlah' => 2],
            ['detail_id' => 26, 'penjualan_id' => 9, 'barang_id' => 6, 'harga' => 750000, 'jumlah' => 3],
            ['detail_id' => 27, 'penjualan_id' => 9, 'barang_id' => 8, 'harga' => 18000, 'jumlah' => 4],

            // Penjualan 10
            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 10, 'harga' => 19000, 'jumlah' => 1],
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 3, 'harga' => 18000, 'jumlah' => 2],
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 9, 'harga' => 33000, 'jumlah' => 5],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}