<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gandapura;
use Illuminate\Http\Request;

class GandapuraController extends Controller
{
    function index()
    {
        $gandapuras = Gandapura::all();
        return view('administrator.gandapura.index', compact('gandapuras'));
    }

    function add()
    {
        return view('administrator.gandapura.add');
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
        Gandapura::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/gandapura');
    }

    function delGandapura($id)
    {
        Gandapura::destroy($id);
        return redirect('/administrator/gandapura');
    }

    function edit($id)
    {
        $gandapura = Gandapura::find($id);
        return view('administrator.gandapura.edit', compact('gandapura'));
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
        Gandapura::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/gandapura');
    }
}
