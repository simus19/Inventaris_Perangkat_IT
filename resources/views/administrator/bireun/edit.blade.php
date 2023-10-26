@extends('layouts.admin.master')

@section('title', 'Bireun')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Edit Bireun</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/bireun/update/'.$bireun->id) }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">Nama Perangkat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="nama_perangkat" id="nama_perangkat" value="{{ $bireun->nama_perangkat }}">
                            <small class="text-danger">{{ $errors->first('nama_perangkat') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Merk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="merk" id="merk" value="{{ $bireun->merk }}">
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Tipe<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tipe" id="tipe" value="{{ $bireun->tipe }}">
                            <small class="text-danger">{{ $errors->first('tipe') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Koordinat Longtitude<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="koordinat_longtitude" id="koordinat_longtitude" value="{{ $bireun->koordinat_longtitude }}">
                            <small class="text-danger">{{ $errors->first('koordinat_longtitude') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Koordinat Langtitude<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="koordinat_langtitude" id="koordinat_langtitude" value="{{ $bireun->koordinat_langtitude }}">
                            <small class="text-danger">{{ $errors->first('koordinat_langtitude') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Alamat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $bireun->alamat }}">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
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