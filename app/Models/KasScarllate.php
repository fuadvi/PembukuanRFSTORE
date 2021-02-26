<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasScarllate extends Model
{
    use HasFactory;

    protected $table = 'kasscarllate';
    protected $fillable = [
        'uang_kas', 'tanggal_masuk', 'pemasukan_id'
    ];

    public function pemasukan()
    {
        return $this->belongsTo(Pemasukan::class, 'pemasukan_id', 'id');
    }
}
