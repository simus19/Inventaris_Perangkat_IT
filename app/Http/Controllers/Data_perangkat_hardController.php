<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_perangkat_har;
use App\Models\Master_perangkat_it;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Data_perangkat_hardController extends Controller
{
    function index(Request $request)
    {
        // dd($request->all());
        if ($request->nama_perangkat == []) {
            $data_perangkat_hars_count = Data_perangkat_har::all();

            // dd($data_perangkat_hars_count);

            $data_perangkat_hars = Master_perangkat_it::all();
            // dd($data_perangkat_hars);

            // $fixdata = [];

            // if (count($data_perangkat_hars_count) == 0) {
            //     foreach ($data_perangkat_hars as $data) {
            //         $fixdata[] = array($data->id, $data->nama_perangkat, 0);
            //     }
            // } else {
            //     foreach ($data_perangkat_hars as $data) {
            //         foreach ($data_perangkat_hars_count as $data2) {
            //             if ($data->id == $data2->master_perangkat_its_id) {
            //                 $fixdata[] = array($data->id, $data->nama_perangkat, $data2->total);
            //             } else {
            //                 $fixdata[] = array($data->id, $data->nama_perangkat, 0);
            //             }
            //         }
            //     }
            // }
            // dd($fixdata);
            return view('administrator.data_perangkat_hard.index', compact('data_perangkat_hars_count', 'data_perangkat_hars') /* compact('fixdata') */);
        } else {
            $data_perangkat_hars = Data_perangkat_har::where('master_perangkat_its_id', '=', $request->nama_perangkat)->get();
            // dd($data_perangkat_hars);
            return view('administrator.data_perangkat_hard.index1', compact('data_perangkat_hars'));
        }
    }

    function add()
    {
        $master_perangkat_its = Master_perangkat_it::all();
        return view('administrator.data_perangkat_hard.add', compact('master_perangkat_its'));
    }

    function store(Request $request)
    {
        $request->validate([
            'master_perangkat_its_id' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            // 'sn' => 'required',
            'status' => 'required',
        ]);
        Data_perangkat_har::create([
            'master_perangkat_its_id' => $request->master_perangkat_its_id,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn == null ? "" : $request->sn,
            'status' => $request->status,
            'alamat' => $request->alamat == null ? "" : $request->alamat,
            'nomor_referensi' => $request->nomor_referensi == null ? "" : $request->nomor_referensi,
        ]);

        return redirect('/administrator/data_perangkat_hard');
    }

    function delData_perangkat_hard($id)
    {
        Data_perangkat_har::destroy($id);
        return redirect('/administrator/data_perangkat_hard');
    }

    function edit($id)
    {
        $data_perangkat_hard = Data_perangkat_har::find($id);
        $master_perangkat_its = Master_perangkat_it::all();
        return view('administrator.data_perangkat_hard.edit', compact('data_perangkat_hard', 'master_perangkat_its'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama_perangkat' => 'required|',
            'merk' => 'required',
            'tipe' => 'required',
            'sn' => 'required',
            'status' => 'required',
        ]);
        Data_perangkat_har::find($id)->update([
            'nama_perangkat' => $request->nama_perangkat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'sn' => $request->sn,
            'status' => $request->status,
            'alamat' => $request->alamat == null ? "" : $request->alamat,
            'nomor_referensi' => $request->nomor_referensi == null ? "" : $request->nomor_referensi,
        ]);

        return redirect('/administrator/data_perangkat_hard');
    }
}
