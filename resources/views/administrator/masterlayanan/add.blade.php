@extends('layouts.admin.master')

@section('title', 'Master Layanan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Master Layanan</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/masterlayanan/store') }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">unitcode<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="unitcode" id="unitcode" value="{{ old('unitcode') }}">
                            <small class="text-danger">{{ $errors->first('unitcode') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">busarea<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="busarea" id="busarea" value="{{ old('busarea') }}">
                            <small class="text-danger">{{ $errors->first('busarea') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">koordinat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="namaunit" id="namaunit" value="{{ old('namaunit') }}">
                            <small class="text-danger">{{ $errors->first('namaunit') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">levelunit<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="levelunit" id="levelunit" value="{{ old('levelunit') }}">
                            <small class="text-danger">{{ $errors->first('levelunit') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Alamat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Jenis Layanan<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="jenislayanan" id="jenislayanan" value="{{ old('jenislayanan') }}">
                            <small class="text-danger">{{ $errors->first('jenislayanan') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Sid<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="sid" id="sid" value="{{ old('sid') }}">
                            <small class="text-danger">{{ $errors->first('sid') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Bandwith<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="bandwith" id="bandwith" value="{{ old('bandwith') }}">
                            <small class="text-danger">{{ $errors->first('bandwith') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Ipgateway<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="ipgateway" id="ipgateway" value="{{ old('ipgateway') }}">
                            <small class="text-danger">{{ $errors->first('ipgateway') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ old('status') }}">
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Koordinat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="koordinat" id="koordinat" value="{{ old('koordinat') }}">
                            <small class="text-danger">{{ $errors->first('koordinat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="keterangan">keterangan<sup class="text-danger">*</sup></label>
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