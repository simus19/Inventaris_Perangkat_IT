<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Data_perangkat_existing;
use App\Models\Data_perangkat_har;
use App\Models\Dataaplikasi;
use App\Models\Datapemeliharaan;
use App\Models\Dataserver;
use App\Models\Master_perangkat_it;
use App\Models\Masterlayanan;
use App\Models\Masterunit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserviewController extends Controller
{
    function masterunit()
    {
        $masterunits = Masterunit::all();
        return view('administrator.masterunit.index', compact('masterunits'));
    }

    function masterlayanan()
    {
        $masterlayanans = Masterlayanan::all();
        return view('administrator.masterlayanan.index', compact('masterlayanans'));
    }

    function master_perangkat_it()
    {
        $master_perangkat_its = Master_perangkat_it::all();
        return view('administrator.master_perangkat_it.index', compact('master_perangkat_its'));
    }

    function dataserver()
    {
        $dataservers = Dataserver::all();
        return view('administrator.dataserver.index', compact('dataservers'));
    }

    function dataaplikasi()
    {
        $dataaplikasis = Dataaplikasi::all();
        return view('administrator.dataaplikasi.index', compact('dataaplikasis'));
    }

    function data_perangkat_existing()
    {
        $data_perangkat_existings = Data_perangkat_existing::all();
        return view('administrator.data_perangkat_existing.index', compact('data_perangkat_existings'));
    }

    function datapemeliharaan()
    {
        $datapemeliharaans = Datapemeliharaan::all();
        return view('administrator.datapemeliharaan.index', compact('datapemeliharaans'));
    }

    function data_perangkat_hard(Request $request)
    {
        // dd($request->all());
        if ($request->nama_perangkat == []) {
            $data_perangkat_hars_count = Data_perangkat_har::select('master_perangkat_its_id', DB::raw('count(*) as total'))
                ->groupBy('master_perangkat_its_id')
                ->get();

            $data_perangkat_hars = Master_perangkat_it::all();

            $fixdata = [];

            foreach ($data_perangkat_hars as $data) {
                foreach ($data_perangkat_hars_count as $data2) {
                    if ($data->id == $data2->master_perangkat_its_id) {
                        $fixdata[] = array($data->id, $data->nama_perangkat, $data2->total);
                    } else {
                        $fixdata[] = array($data->id, $data->nama_perangkat, 0);
                    }
                }
            }
            // dd($fixdata);

            // dd($data_perangkat_hars);
            return view('administrator.data_perangkat_hard.index', compact('fixdata'));
        } else {
            $data_perangkat_hars = Data_perangkat_har::where('master_perangkat_its_id', '=', $request->nama_perangkat)->get();
            // dd($data_perangkat_hars);
            return view('administrator.data_perangkat_hard.index1', compact('data_perangkat_hars'));
        }
    }
}
