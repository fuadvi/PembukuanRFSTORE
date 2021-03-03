<?php

namespace App\Http\Controllers;

use App\Models\KasScarllate;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $items = KasScarllate::with(['pemasukan'])->latest()->paginate(2);
        return view('pages.kas.index')->with([
            'items' => $items
        ]);
    }
}
