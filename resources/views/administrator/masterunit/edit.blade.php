@extends('layouts.admin.master')

@section('title', 'Master Unit')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Edit Data Master Unit</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/masterunit/update/'.$masterunit->id) }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">unitcode<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="unitcode" id="unitcode" value="{{ $masterunit->unitcode }}">
                            <small class="text-danger">{{ $errors->first('unitcode') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="alamat">alamat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $masterunit->alamat }}">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">busarea<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="busarea" id="busarea" value="{{ $masterunit->busarea }}">
                            <small class="text-danger">{{ $errors->first('busarea') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">koordinat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="koordinat" id="koordinat" value="{{ $masterunit->koodinat }}">
                            <small class="text-danger">{{ $errors->first('koordinat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">levelunit<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="levelunit" id="levelunit" value="{{ $masterunit->levelunit }}">
                            <small class="text-danger">{{ $errors->first('levelunit') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="keterangan">keterangan<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{ $masterunit->keterangan }}">
                            <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>







@endsection