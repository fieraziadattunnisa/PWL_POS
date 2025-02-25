<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Sumber Makmur',
                'supplier_alamat' => 'Jl. Raya No. 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Berkah Abadi',
                'supplier_alamat' => 'Jl. Industri No. 25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD Sentosa Jaya',
                'supplier_alamat' => 'Jl. Niaga No. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('m_supplier')->insert($data);

    }
}
