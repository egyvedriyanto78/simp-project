<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'judul',
        'sampul',
        'tahun_terbit',
        'kategori',
        'stok',
        'lokasi',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
