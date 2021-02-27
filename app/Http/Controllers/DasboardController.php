<?php

namespace App\Http\Controllers;

use App\Models\KasScarllate;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\User;
use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function index()
    {
        $dataKas = KasScarllate::all();
        $jumlah_kas = 0;
        foreach ($dataKas as  $kas) {
            $jumlah_kas = $kas->uang_kas;
        }

        return view('pages.AdminDasboard')->with([
            'pemasukan' => Pemasukan::count(),
            'JumlahKas' => $jumlah_kas,
            'pengeluaran' => Pengeluaran::count(),
            'user' => User::count(),
        ]);
    }
}
