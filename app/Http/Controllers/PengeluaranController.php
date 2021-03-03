<?php

namespace App\Http\Controllers;

use App\Models\KasScarllate;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pengeluaran::paginate(10);
        return view('pages.pengeluaran.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $pengeluaran = Pengeluaran::create($data);

        $DataKas = KasScarllate::all();
        $uang_kas = 0;
        foreach ($DataKas as $kas) {
            $uang_kas = $kas->uang_kas;
        }

        if ($request->status == "KAS") {
            KasScarllate::create([
                'pengeluaran_id' => $pengeluaran->id,
                'uang_kas' =>  $uang_kas - ($request->price * $request->quantity),
                'tanggal_masuk' => Carbon::now()
            ]);
            return redirect()->route('pengeluaran');
        }
        return redirect()->route('pengeluaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pengeluaran::findOrFail($id);
        $item->delete();

        return redirect()->route('pengeluaran');
    }
}
