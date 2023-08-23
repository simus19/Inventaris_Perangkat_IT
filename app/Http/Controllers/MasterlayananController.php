<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masterlayanan;
use Illuminate\Http\Request;

class MasterlayananController extends Controller
{
    function index()
    {
        $masterlayanans = Masterlayanan::all();
        return view('administrator.masterlayanan.index', compact('masterlayanans'));
    }

    function add()
    {
        return view('administrator.masterlayanan.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'unitcode' => 'required',
            'busarea' => 'required',
            'namaunit' => 'required',
            'levelunit' => 'required',
            'alamat' => 'required',
            'jenislayanan' => 'required',
            'sid' => 'required',
            'bandwith' => 'required',
            'ipgateway' => 'required',
            'status' => 'required',
            'koordinat' => 'required',
            'keterangan' => 'required',
        ]);
        Masterlayanan::create([
            'unitcode' => $request->unitcode,
            'busarea' => $request->busarea,
            'namaunit' => $request->namaunit,
            'levelunit' => $request->levelunit,
            'alamat' => $request->alamat,
            'jenislayanan' => $request->jenislayanan,
            'sid' => $request->sid,
            'bandwith' => $request->bandwith,
            'ipgateway' => $request->ipgateway,
            'status' => $request->status,
            'koordinat' => $request->koordinat,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/administrator/masterlayanan');
    }

    function delMasterlayanan($id)
    {
        Masterlayanan::destroy($id);
        return redirect('/administrator/masterlayanan');
    }
}
