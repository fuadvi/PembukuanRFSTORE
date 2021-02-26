<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $table = 'pemasukan';

    protected $fillable = [
        'nama_produk', 'quantity', 'price', 'purchase_date', 'status'
    ];

    public function kas()
    {
        return $this->hasMany(KasScarllate::class, 'id');
    }
}
