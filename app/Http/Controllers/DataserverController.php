<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dataserver;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    function edit($id)
    {
        $dataserver = Dataserver::find($id);
        return view('administrator.dataserver.edit', compact('dataserver'));
    }

    function update(Request $request, $id)
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
        Dataserver::find($id)->update([
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

    public function tableServer(Request $request)
    {
        $anggotas = Dataserver::all();
        // dd($anggotas);
        // dd(DataTables::of($anggotas));
        if ($request->ajax()) {
            return DataTables::of($anggotas)
                ->addColumn('nama', function ($data) {
                    return $data->nama;
                })
                ->addColumn('alamatip', function ($data) {
                    return $data->alamatip;
                })
                ->addColumn('namaserver', function ($data) {
                    return $data->namaserver;
                })
                ->addColumn('memori', function ($data) {
                    return $data->memori;
                })
                ->addColumn('prosesor', function ($data) {
                    return $data->prosesor;
                })
                ->addColumn('hardisk', function ($data) {
                    return $data->hardisk;
                })
                ->addColumn('statushardisk', function ($data) {
                    return $data->statushardisk;
                })
                ->addColumn('tanggalupdate', function ($data) {
                    return $data->tanggalupdate;
                })
                ->addColumn('fungsiserver', function ($data) {
                    return $data->fungsiserver;
                })
                ->addColumn('keterangan', function ($data) {
                    return $data->keterangan;
                })
                ->addColumn('action', function ($data) {
                    // return $data->a;
                    return '<div style="display: inline-flex;" class=""><a href="' . url('') . '/administrator/users/detail/' . $data->id . '" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> <a href="' . url('') . '/administrator/dataserver/del-dataserver/' . $data->id . '" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></div>';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        // return json_encode($anggotas);
    }
}
