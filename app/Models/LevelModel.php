<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuaikan dengan tabel level di database
    protected $primaryKey = 'level_id'; // Pastikan sesuai dengan primary key tabel
    protected $fillable = ['level_nama']; // Sesuaikan dengan kolom yang bisa diisi
}
