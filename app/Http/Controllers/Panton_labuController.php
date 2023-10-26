<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Panton_labu;
use Illuminate\Http\Request;

class Panton_labuController extends Controller
{
    function index()
    {
        $panton_labus = Panton_labu::all();
        return view('administrator.panton_labu.index', compact('panton_labus'));
    }

    function add()
    {
        return view('administrator.panton_labu.add');
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
        Panton_labu::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/panton_labu');
    }

    function delPanton_labu($id)
    {
        Panton_labu::destroy($id);
        return redirect('/administrator/panton_labu');
    }

    function edit($id)
    {
        $panton_labu = Panton_labu::find($id);
        return view('administrator.panton_labu.edit', compact('panton_labu'));
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
        Panton_labu::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/panton_labu');
    }
}
