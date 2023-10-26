<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kutacane;
use Illuminate\Http\Request;

class KutacaneController extends Controller
{
    function index()
    {
        $kutacanes = Kutacane::all();
        return view('administrator.kutacane.index', compact('kutacanes'));
    }

    function add()
    {
        return view('administrator.kutacane.add');
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
        Kutacane::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);

        return redirect('/administrator/kutacane');
    }

    function delKutacane($id)
    {
        Kutacane::destroy($id);
        return redirect('/administrator/kutacane');
    }

    function edit($id)
    {
        $kutacane = Kutacane::find($id);
        return view('administrator.kutacane.edit', compact('kutacane'));
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
        Kutacane::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'koordinat_longtitude' => $request->koordinat_longtitude,
            'koordinat_langtitude' => $request->koordinat_langtitude,
            'alamat' => $request->alamat,
        ]);


        return redirect('/administrator/kutacane');
    }
}
