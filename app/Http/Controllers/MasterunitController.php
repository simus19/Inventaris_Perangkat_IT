<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masterunit;
use Illuminate\Http\Request;

class MasterunitController extends Controller
{
    function index()
    {
        $masterunits = Masterunit::all();
        return view('administrator.masterunit.index', compact('masterunits'));
    }

    function add()
    {
        return view('administrator.masterunit.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'unitcode' => 'required',
            'busarea' => 'required',
            'levelunit' => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'keterangan' => 'required',
        ]);
        Masterunit::create([
            'unitcode' => $request->unitcode,
            'alamat' => $request->alamat,
            'busarea' => $request->busarea,
            'koodinat' => $request->koordinat,
            'levelunit' => $request->levelunit,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/administrator/masterunit');
    }
    function delMasterunit($id)
    {
        Masterunit::destroy($id);
        return redirect('/administrator/masterunit');
    }

    function edit($id)
    {
        $masterunit = Masterunit::find($id);
        // dd($masterunit);
        return view('administrator.masterunit.edit', compact('masterunit'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'unitcode' => 'required',
            'busarea' => 'required',
            'levelunit' => 'required',
            'alamat' => 'required',
            'koordinat' => 'required',
            'keterangan' => 'required',
        ]);
        Masterunit::find($id)->update([
            'unitcode' => $request->unitcode,
            'alamat' => $request->alamat,
            'busarea' => $request->busarea,
            'koodinat' => $request->koordinat,
            'levelunit' => $request->levelunit,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/administrator/masterunit');
    }
}
