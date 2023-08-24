@extends('layouts.admin.master')

@section('title', 'Master Perangkat IT')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Master Perangkat IT</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/master_perangkat_it/store') }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="unitcode">Nama Perangkat<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="nama_perangkat" id="nama_perangkat" value="{{ old('nama_perangkat') }}">
                            <small class="text-danger">{{ $errors->first('nama_perangkat') }}</small>
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