<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Datapemeliharaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'jenis_kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'pelaksana' => 'required',
            'lokasi' => 'required',
            'evidence' => 'required|mimes:jpeg,jpg,png',
            'kebutuhan_item' => 'required',
        ]);
        $file = $request->file('evidence');
        $imgData = Str::random(45) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/', $imgData);
        Datapemeliharaan::create([
            'perangkat' => $request->perangkat,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'waktu' => $request->waktu == null ? "" : $request->waktu,
            'pelaksana' => $request->pelaksana,
            'lokasi' => $request->lokasi,
            'evidence' => $imgData,
            'kebutuhan_item' => $request->kebutuhan_item,
        ]);

        return redirect('/administrator/datapemeliharaan');
    }

    function delDatapemeliharaan($id)
    {
        Datapemeliharaan::destroy($id);
        return redirect('/administrator/datapemeliharaan');
    }

    function edit($id)
    {
        $datapemeliharaan = Datapemeliharaan::find($id);
        return view('administrator.datapemeliharaan.edit', compact('datapemeliharaan'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'perangkat' => 'required|',
            'jenis_kegiatan' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'pelaksana' => 'required',
            'lokasi' => 'required',
            'evidence.*' => 'mimes:jpeg,jpg,png',
            'kebutuhan_item' => 'required',
        ]);
        if ($request->file('evidence') == null) {
            $imgData = $request->oldevidence;
        } else {
            $file = $request->file('evidence');
            $imgData = Str::random(45) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads/', $imgData);
        }
        Datapemeliharaan::find($id)->update([
            'perangkat' => $request->perangkat,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'waktu' => $request->waktu == null ? "" : $request->waktu,
            'pelaksana' => $request->pelaksana,
            'lokasi' => $request->lokasi,
            'evidence' => $imgData,
            'kebutuhan_item' => $request->kebutuhan_item,
        ]);

        return redirect('/administrator/datapemeliharaan');
    }
}
