<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Datapemeliharaan;
use Illuminate\Http\Request;

class DatapemeliharaanController extends Controller
{
    function index()
    {
        $datapemeliharaans = Datapemeliharaan::all();
        return view('administrator.datapemeliharaan.index', compact('datapemeliharaans'));
    }

    function add()
    {

        return view('administrator.datapemeliharaan.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'perangkat' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            'sn' => 'required',
            'tahun_pasanghar' => 'required',
            'tgl_kirim' => 'required',
            'metode' => 'required',
            'status' => 'required',
        ]);
        Datapemeliharaan::create([
            'perangkat' => $request->perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn,
            'tahun_pasanghar' => $request->tahun_pasanghar,
            'tgl_kirim' => $request->tgl_kirim,
            'metode' => $request->metode,
            'status' => $request->status,
        ]);

        return redirect('/administrator/datapemeliharaan');
    }

    function delDatapemeliharaan($id)
    {
        Datapemeliharaan::destroy($id);
        return redirect('/administrator/datapemeliharaan');
    }
}
