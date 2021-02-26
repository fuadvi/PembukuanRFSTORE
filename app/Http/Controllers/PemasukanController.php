<?php

namespace App\Http\Controllers;

use App\Http\Requests\PemasukanRequest;
use App\Models\KasScarllate;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pemasukan::all();
        return view('pages.pemasukan.index')->with(['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pemasukan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PemasukanRequest $request)
    {
        $data = $request->all();

        $Datakass = KasScarllate::all();
        $uang_kas = 0;
        foreach ($Datakass as $kas) {
            $uang_kas = $kas->uang_kas;
        }

        // dd($kas);
        if ($data) {
            if ($request->status == "PRIBADI") {
                // $data['price'] = ($request->price * $request->quantity) - (55000 * $request->quantity);
                $pemasukan = Pemasukan::create($data);
                KasScarllate::create([
                    'pemasukan_id' => $pemasukan->id,
                    'uang_kas' => (($request->price * $request->quantity) - (55000 * $request->quantity)) + $uang_kas,
                    'tanggal_masuk' => Carbon::now()
                ]);
                return redirect()->route('pemasukan.index');
            }

            $pemasukan = Pemasukan::create($data);
            KasScarllate::create([
                'pemasukan_id' => $pemasukan->id,
                'uang_kas' => ($request->price * $request->quantity) + $uang_kas,
                'tanggal_masuk' => Carbon::now()
            ]);
            return redirect()->route('pemasukan.index');
        }

        return redirect()->back();
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
        $item = Pemasukan::findOrfail($id);
        $item->delete();

        return redirect()->route('pemasukan.index');
    }
}
