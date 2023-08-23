<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Master_perangkat_it;
use Illuminate\Http\Request;

class Master_perangkat_itController extends Controller
{
    function index()
    {
        $master_perangkat_its = Master_perangkat_it::all();
        return view('administrator.master_perangkat_it.index', compact('master_perangkat_its'));
    }

    function add()
    {
        return view('administrator.master_perangkat_it.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama_perangkat' => 'required',
        ]);
        Master_perangkat_it::create([
            'nama_perangkat' => $request->nama_perangkat,
        ]);

        return redirect('/administrator/master_perangkat_it');
    }

    function delMaster_perangkat_it($id)
    {
        Master_perangkat_it::destroy($id);
        return redirect('/administrator/master_perangkat_it');
    }
}
