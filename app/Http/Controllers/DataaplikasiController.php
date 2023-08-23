<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dataaplikasi;
use Illuminate\Http\Request;

class DataaplikasiController extends Controller
{
    function index()
    {
        $dataaplikasis = Dataaplikasi::all();
        return view('administrator.dataaplikasi.index', compact('dataaplikasis'));
    }

    function add()
    {
        return view('administrator.dataaplikasi.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'ip_aplikasi' => 'required|',
            'nama_aplikasi' => 'required',
            'deskripsi' => 'required',
            'tahun_buat' => 'required',
            'bahasaprogram' => 'required',
            'database' => 'required',
            'user' => 'required',
            'status' => 'required',
        ]);
        Dataaplikasi::create([
            'ip_aplikasi' => $request->ip_aplikasi,
            'nama_aplikasi' => $request->nama_aplikasi,
            'deskripsi' => $request->deskripsi,
            'tahun_buat' => $request->tahun_buat,
            'bahasaprogram' => $request->bahasaprogram,
            'database' => $request->database,
            'user' => $request->user,
            'status' => $request->status,
        ]);

        return redirect('/administrator/dataaplikasi');
    }

    function delDataaplikasi($id)
    {
        Dataaplikasi::destroy($id);
        return redirect('/administrator/dataaplikasi');
    }
}
