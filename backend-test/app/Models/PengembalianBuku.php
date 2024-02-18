<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembalianBuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_return_id', 'returned_at'
    ];

    public function book()
    {
        return $this->belongsTo(PeminjamanBuku::class);
    }
}
