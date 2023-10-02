@extends('layouts.admin.master')

@section('title', 'Data Perangkat Hard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form Edit Data Perangkat Har</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/data_perangkat_hard/update/'.$data_perangkat_hard->id) }}" method="post"> @csrf
                <div class="row">

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="master_perangkat_its_id">Perangkat<sup class="text-danger">*</sup></label>
                            <select class="custom-select" name="master_perangkat_its_id">
                                    <option selected disabled>Pilih Perangkat</option>
                                    @foreach ($master_perangkat_its as $master_perangkat_it)
                                            <option {{ $data_perangkat_hard->master_perangkat_its_id == $master_perangkat_it->id ? 'selected' : ''; }} value="{{ $master_perangkat_it->id }}">{{ $master_perangkat_it->nama_perangkat }}</option>
                                    @endforeach
                              </select>
                            <small class="text-danger">{{ $errors->first('master_perangkat_its_id') }}</small>
                        </div>
                    </div>
                   
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="busarea">Merk<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="merk" id="merk" value="{{ $data_perangkat_hard->merk }}">
                            <small class="text-danger">{{ $errors->first('merk') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Tipe<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="tipe" id="tipe" value="{{ $data_perangkat_hard->tipe }}">
                            <small class="text-danger">{{ $errors->first('tipe') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Sn</sup></label>
                            <input class="form-control" type="text" name="sn" id="sn" value="{{ $data_perangkat_hard->sn }}">
                            <small class="text-danger">{{ $errors->first('sn') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Status<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="status" id="status" value="{{ $data_perangkat_hard->status }}">
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Alamat</sup></label>
                            <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $data_perangkat_hard->alamat }}">
                            <small class="text-danger">{{ $errors->first('alamat') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Nomor Referensi</sup></label>
                            <input class="form-control" type="text" name="nomor_referensi" id="nomor_referensi" value="{{ $data_perangkat_hard->nomor_referensi }}">
                            <small class="text-danger">{{ $errors->first('nomor_referensi') }}</small>
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