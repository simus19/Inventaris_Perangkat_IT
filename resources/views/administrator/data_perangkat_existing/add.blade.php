@extends('layouts.admin.master')

@section('title', 'Data Perangkat Existing')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Data Perangkat Existing</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/data_perangkat_existing/store') }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">Nama Perangkat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="nama_perangkat" id="nama_perangkat" value="{{ old('nama_perangkat') }}">
                            <small class="text-danger">{{ $errors->first('nama_perangkat') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Merk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="merk" id="merk" value="{{ old('merk') }}">
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Tipe<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tipe" id="tipe" value="{{ old('tipe') }}">
                            <small class="text-danger">{{ $errors->first('tipe') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Sn<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="sn" id="sn" value="{{ old('sn') }}">
                            <small class="text-danger">{{ $errors->first('sn') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tahun Pasang Ex<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tahun_pasangex" id="tahun_pasangex" value="{{ old('tahun_pasangex') }}">
                            <small class="text-danger">{{ $errors->first('tahun_pasangex') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tahun Bongkar<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tahun_bongkar" id="tahun_bongkar" value="{{ old('tahun_bongkar') }}">
                            <small class="text-danger">{{ $errors->first('tahun_bongkar') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Keterangan<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{ old('keterangan') }}">
                            <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>







@endsection