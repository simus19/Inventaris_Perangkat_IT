@extends('layouts.admin.master')

@section('title', 'Data Pemiliharaan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Edit Data Pemiliharaan</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/datapemeliharaan/update/'.$datapemeliharaan->id) }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">Perangkat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="perangkat" id="perangkat" value="{{ $datapemeliharaan->perangkat }}">
                            <small class="text-danger">{{ $errors->first('perangkat') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Merk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="merk" id="merk" value="{{ $datapemeliharaan->merk }}">
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Tipe<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tipe" id="tipe" value="{{ $datapemeliharaan->tipe }}">
                            <small class="text-danger">{{ $errors->first('tipe') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Sn<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="sn" id="sn" value="{{ $datapemeliharaan->sn }}">
                            <small class="text-danger">{{ $errors->first('sn') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tahun Pasang Har<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tahun_pasanghar" id="tahun_pasanghar" value="{{ $datapemeliharaan->tahun_pasanghar }}">
                            <small class="text-danger">{{ $errors->first('tahun_pasanghar') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tgl Kirim<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tgl_kirim" id="tgl_kirim" value="{{ $datapemeliharaan->tgl_kirim }}">
                            <small class="text-danger">{{ $errors->first('tgl_kirim') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Metode<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="metode" id="metode" value="{{ $datapemeliharaan->metode }}">
                            <small class="text-danger">{{ $errors->first('metode') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ $datapemeliharaan->status }}">
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-warning">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>







@endsection