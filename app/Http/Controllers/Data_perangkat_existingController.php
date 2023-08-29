<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_perangkat_existing;
use Illuminate\Http\Request;

class Data_perangkat_existingController extends Controller
{
    function index()
    {
        $data_perangkat_existings = Data_perangkat_existing::all();
        return view('administrator.data_perangkat_existing.index', compact('data_perangkat_existings'));
    }

    function add()
    {
        return view('administrator.data_perangkat_existing.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama_perangkat' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'sn' => 'required',
            'tahun_pasangex' => 'required',
            'tahun_bongkar' => 'required',
            'keterangan' => 'required',
        ]);
        Data_perangkat_existing::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn,
            'tahun_pasangex' => $request->tahun_pasangex,
            'tahun_bongkar' => $request->tahun_bongkar,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/administrator/data_perangkat_existing');
    }

    function delData_perangkat_existing($id)
    {
        Data_perangkat_existing::destroy($id);
        return redirect('/administrator/data_perangkat_existing');
    }

    function edit($id)
    {
        $data_perangkat_existing = Data_perangkat_existing::find($id);
        return view('administrator.data_perangkat_existing.edit', compact('data_perangkat_existing'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama_perangkat' => 'required',
            'merk' => 'required',
            'tipe' => 'required',
            'sn' => 'required',
            'tahun_pasangex' => 'required',
            'tahun_bongkar' => 'required',
            'keterangan' => 'required',
        ]);
        Data_perangkat_existing::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn,
            'tahun_pasangex' => $request->tahun_pasangex,
            'tahun_bongkar' => $request->tahun_bongkar,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/administrator/data_perangkat_existing');
    }
}
