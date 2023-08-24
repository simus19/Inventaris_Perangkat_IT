<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_perangkat_har;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Data_perangkat_hardController extends Controller
{
    function index(Request $request)
    {
        // dd($request->all());
        if ($request->nama_perangkat == []) {
            $data_perangkat_hars = Data_perangkat_har::select('nama_perangkat', DB::raw('count(*) as total'))
                ->groupBy('nama_perangkat')
                ->get();
            // dd($data_perangkat_hars);
            return view('administrator.data_perangkat_hard.index', compact('data_perangkat_hars'));
        } else {
            $data_perangkat_hars = Data_perangkat_har::where('nama_perangkat', '=', $request->nama_perangkat)->get();
            // dd($data_perangkat_hars);
            return view('administrator.data_perangkat_hard.index1', compact('data_perangkat_hars'));
        }
    }

    function add()
    {
        return view('administrator.data_perangkat_hard.add');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama_perangkat' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            'sn' => 'required',
            'status' => 'required',
        ]);
        Data_perangkat_har::create([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn,
            'status' => $request->status,
        ]);

        return redirect('/administrator/data_perangkat_hard');
    }

    function delData_perangkat_hard($id)
    {
        Data_perangkat_har::destroy($id);
        return redirect('/administrator/data_perangkat_hard');
    }
}
