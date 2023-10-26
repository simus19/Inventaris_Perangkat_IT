<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Langsa;
use Illuminate\Http\Request;

class LangsaController extends Controller
{
    function index()
    {
        $langsas = Langsa::all();
        return view('administrator.langsa.index', compact('langsas'));
    }

    function add()
    {
        return view('administrator.langsa.add');
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
        Langsa::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/langsa');
    }

    function delLangsa($id)
    {
        Langsa::destroy($id);
        return redirect('/administrator/langsa');
    }

    function edit($id)
    {
        $langsa = Langsa::find($id);
        return view('administrator.langsa.edit', compact('langsa'));
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
        Langsa::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/langsa');
    }
}
