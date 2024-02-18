<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanBuku extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id', 'borrowed_at', 'returned_at'
    ];

    public function book()
    {
        return $this->belongsTo(Buku::class);
    }
}
