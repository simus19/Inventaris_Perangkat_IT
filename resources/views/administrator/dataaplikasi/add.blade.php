@extends('layouts.admin.master')

@section('title', 'Data Aplikasi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Data Aplikasi</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/dataaplikasi/store') }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">IP Aplikasi<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="ip_aplikasi" id="ip_aplikasi" value="{{ old('ip_aplikasi') }}">
                            <small class="text-danger">{{ $errors->first('ip_aplikasi') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Nama Aplikasi<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="nama_aplikasi" id="nama_aplikasi" value="{{ old('nama_aplikasi') }}">
                            <small class="text-danger">{{ $errors->first('nama_aplikasi') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Deskripsi<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}">
                            <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tahun Buat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tahun_buat" id="tahun_buat" value="{{ old('tahun_buat') }}">
                            <small class="text-danger">{{ $errors->first('tahun_buat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Bahasa Program<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="bahasaprogram" id="bahasaprogram" value="{{ old('bahasaprogram') }}">
                            <small class="text-danger">{{ $errors->first('bahasaprogram') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Database<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="database" id="database" value="{{ old('database') }}">
                            <small class="text-danger">{{ $errors->first('database') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">User<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="user" id="user" value="{{ old('user') }}">
                            <small class="text-danger">{{ $errors->first('user') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ old('status') }}">
                            <small class="text-danger">{{ $errors->first('status') }}</small>
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