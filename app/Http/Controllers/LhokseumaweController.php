<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\lhokseumawe;
use Illuminate\Http\Request;

class LhokseumaweController extends Controller
{
    function index()
    {
        $lhokseumawes = lhokseumawe::all();
        return view('administrator.lhokseumawe.index', compact('lhokseumawes'));
    }

    function add()
    {
        return view('administrator.lhokseumawe.add');
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
        Lhokseumawe::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/lhokseumawe');
    }

    function delLhokseumawe($id)
    {
        Lhokseumawe::destroy($id);
        return redirect('/administrator/lhokseumawe');
    }

    function edit($id)
    {
        $lhokseumawe = Lhokseumawe::find($id);
        return view('administrator.lhokseumawe.edit', compact('lhokseumawe'));
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
        Lhokseumawe::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/lhokseumawe');
    }
}
