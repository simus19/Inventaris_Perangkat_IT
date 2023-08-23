<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dataserver;
use Illuminate\Http\Request;

class DataserverController extends Controller
{
    function index()
    {
        $dataservers = Dataserver::all();
        return view('administrator.dataserver.index', compact('dataservers'));
    }

    function add()
    {
        return view('administrator.dataserver.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|',
            'alamatip' => 'required',
            'namaserver' => 'required',
            'memori' => 'required',
            'prosesor' => 'required',
            'hardisk' => 'required',
            'statushardisk' => 'required',
            'tanggalupdate' => 'required',
            'fungsiserver' => 'required',
            'keterangan' => 'required',
        ]);
        Dataserver::create([
            'nama' => $request->nama,
            'alamatip' => $request->alamatip,
            'namaserver' => $request->namaserver,
            'memori' => $request->memori,
            'prosesor' => $request->prosesor,
            'hardisk' => $request->hardisk,
            'statushardisk' => $request->statushardisk,
            'tanggalupdate' => $request->tanggalupdate,
            'fungsiserver' => $request->fungsiserver,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/administrator/dataserver');
    }

    function delDataserver($id)
    {
        Dataserver::destroy($id);
        return redirect('/administrator/dataserver');
    }
}
