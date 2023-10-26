<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blangkejeren;
use Illuminate\Http\Request;

class BlangkejerenController extends Controller
{
    function index()
    {
        $blangkejerens = Blangkejeren::all();
        return view('administrator.blangkejeren.index', compact('blangkejerens'));
    }

    function add()
    {
        return view('administrator.blangkejeren.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama_perangkat' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            'koordinat_longtitude' => 'required',
            'koordinat_langtitude' => 'required',
            'alamat' => 'required',
        ]);
        Blangkejeren::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/blangkejeren');
    }

    function delBlangkejeren($id)
    {
        Blangkejeren::destroy($id);
        return redirect('/administrator/blangkejeren');
    }

    function edit($id)
    {
        $blangkejeren = Blangkejeren::find($id);
        return view('administrator.blangkejeren.edit', compact('blangkejeren'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama_perangkat' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            'koordinat_longtitude' => 'required',
            'koordinat_langtitude' => 'required',
            'alamat' => 'required',
        ]);
        Blangkejeren::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/blangkejeren');
    }
}
