<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'm_kategori'; // Sesuaikan dengan tabel kategori di database
    protected $primaryKey = 'kategori_id'; // Pastikan sesuai dengan primary key tabel
    protected $fillable = ['kategori_id', 'kategori_kode', 'kategori_nama']; // Sesuaikan dengan kolom yang bisa diisi
}
