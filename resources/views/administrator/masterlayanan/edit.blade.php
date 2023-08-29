@extends('layouts.admin.master')

@section('title', 'Master Layanan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Edit Data Master Layanan</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/masterlayanan/update/'.$masterlayanan->id) }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">unitcode<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="unitcode" id="unitcode" value="{{ $masterlayanan->unitcode }}">
                            <small class="text-danger">{{ $errors->first('unitcode') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Busarea<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="busarea" id="busarea" value="{{ $masterlayanan->busarea }}">
                            <small class="text-danger">{{ $errors->first('busarea') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Namaunit<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="namaunit" id="namaunit" value="{{ $masterlayanan->namaunit }}">
                            <small class="text-danger">{{ $errors->first('namaunit') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">levelunit<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="levelunit" id="levelunit" value="{{ $masterlayanan->levelunit }}">
                            <small class="text-danger">{{ $errors->first('levelunit') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Alamat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $masterlayanan->alamat }}">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Jenis Layanan<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="jenislayanan" id="jenislayanan" value="{{ $masterlayanan->jenislayanan }}">
                            <small class="text-danger">{{ $errors->first('jenislayanan') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Sid<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="sid" id="sid" value="{{ $masterlayanan->sid }}">
                            <small class="text-danger">{{ $errors->first('sid') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Bandwith<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="bandwith" id="bandwith" value="{{ $masterlayanan->bandwith }}">
                            <small class="text-danger">{{ $errors->first('bandwith') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Ipgateway<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="ipgateway" id="ipgateway" value="{{ $masterlayanan->ipgateway }}">
                            <small class="text-danger">{{ $errors->first('ipgateway') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ $masterlayanan->status }}">
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Koordinat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="koordinat" id="koordinat" value="{{ $masterlayanan->koordinat }}">
                            <small class="text-danger">{{ $errors->first('koordinat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="keterangan">keterangan<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{ $masterlayanan->keterangan }}">
                            <small class="text-danger">{{ $errors->first('keterangan') }}</small>
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