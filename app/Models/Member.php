<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'nama',
        'foto',
        'jenis_kelamin',
    ];

    public $incrementing = false;
    protected $primaryKey = 'uid';
    protected $keyType = 'integer';
}
