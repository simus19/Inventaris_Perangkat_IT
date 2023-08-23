@extends('layouts.admin.master')

@section('title', 'Data Server')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Data Server</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/dataserver/store') }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">Nama<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{ old('nama') }}">
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Alamat IP<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="alamatip" id="alamatip" value="{{ old('alamatip') }}">
                            <small class="text-danger">{{ $errors->first('alamatip') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Nama Server<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="namaserver" id="namaserver" value="{{ old('namaserver') }}">
                            <small class="text-danger">{{ $errors->first('namaserver') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Memori<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="memori" id="memori" value="{{ old('memori') }}">
                            <small class="text-danger">{{ $errors->first('memori') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Prosesor<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="prosesor" id="prosesor" value="{{ old('prosesor') }}">
                            <small class="text-danger">{{ $errors->first('prosesor') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Hardisk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="hardisk" id="hardisk" value="{{ old('hardisk') }}">
                            <small class="text-danger">{{ $errors->first('hardisk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status Hardisk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="statushardisk" id="statushardisk" value="{{ old('statushardisk') }}">
                            <small class="text-danger">{{ $errors->first('statushardisk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tanggal Update<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="date" name="tanggalupdate" id="tanggalupdate" value="{{ old('tanggalupdate') }}">
                            <small class="text-danger">{{ $errors->first('tanggalupdate') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Fungsi server<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="fungsiserver" id="fungsiserver" value="{{ old('fungsiserver') }}">
                            <small class="text-danger">{{ $errors->first('fungsiserver') }}</small>
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