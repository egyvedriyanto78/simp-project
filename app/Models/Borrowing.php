<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $primaryKey = 'borrowCode';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'borrowCode',
        'bookId',
        'memberUid',
        'borrowDate',
        'returnDate',
        'quantity',
        'fine',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'bookId', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'memberUid', 'uid');
    }
}
