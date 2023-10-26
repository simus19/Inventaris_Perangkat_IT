<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bireun;
use Illuminate\Http\Request;

class BireunController extends Controller
{
    function index()
    {
        $bireuns = Bireun::all();
        return view('administrator.bireun.index', compact('bireuns'));
    }

    function add()
    {
        return view('administrator.bireun.add');
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
        Bireun::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/bireun');
    }

    function delBireun($id)
    {
        Bireun::destroy($id);
        return redirect('/administrator/bireun');
    }

    function edit($id)
    {
        $bireun = Bireun::find($id);
        return view('administrator.bireun.edit', compact('bireun'));
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
        Bireun::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/bireun');
    }
}
