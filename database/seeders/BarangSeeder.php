<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            // Supplier 1 (5 barang)
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Barang A1',
                'harga_beli' => 15000,
                'harga_jual' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Barang A2',
                'harga_beli' => 20000,
                'harga_jual' => 70000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Barang A3',
                'harga_beli' => 25000,
                'harga_jual' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Barang A4',
                'harga_beli' => 30000,
                'harga_jual' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Barang A5',
                'harga_beli' => 35000,
                'harga_jual' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Supplier 2 (5 barang)
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Barang B1',
                'harga_beli' => 18000,
                'harga_jual' => 62000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Barang B2',
                'harga_beli' => 22000,
                'harga_jual' => 73000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Barang B3',
                'harga_beli' => 27000,
                'harga_jual' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Barang B4',
                'harga_beli' => 32000,
                'harga_jual' => 92000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Barang B5',
                'harga_beli' => 37000,
                'harga_jual' => 110000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Supplier 3 (5 barang)
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Barang C1',
                'harga_beli' => 16000,
                'harga_jual' => 64000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Barang C2',
                'harga_beli' => 21000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Barang C3',
                'harga_beli' => 26000,
                'harga_jual' => 88000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Barang C4',
                'harga_beli' => 31000,
                'harga_jual' => 94000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Barang C5',
                'harga_beli' => 36000,
                'harga_jual' => 105000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
