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
                            <label for="busarea">Jenis Kegiatan<sup class="text-danger">*</sup></label>
                            <div class="row">
                                <div class="col-6">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kegiatan" id="exampleRadios1" value="prediktif" {{ $datapemeliharaan->jenis_kegiatan == 'prediktif' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                          Prediktif
                                        </label>
                                      </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jenis_kegiatan" id="exampleRadios2" value="korektif" {{ $datapemeliharaan->jenis_kegiatan == 'korektif' ? 'checked' : '' }}>
                                      <label class="form-check-label" for="exampleRadios2">
                                        Korektif
                                      </label>
                                    </div>
                                </div>
                            </div>
                            <small class="text-danger">{{ $errors->first('jenis_kegiatan') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="koordinat">Tanggal Mulai<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai" value="{{ $datapemeliharaan->tgl_mulai }}">
                            <small class="text-danger">{{ $errors->first('tgl_mulai') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Tanggal Selesai<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="date" name="tgl_selesai" id="tgl_selesai" value="{{ $datapemeliharaan->tgl_selesai }}">
                            <small class="text-danger">{{ $errors->first('tgl_selesai') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Waktu</sup></label>
                            <input class="form-control" type="text" name="waktu" id="waktu" value="{{ $datapemeliharaan->waktu }}">
                            <small class="text-danger">{{ $errors->first('waktu') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Pelaksana<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="pelaksana" id="pelaksana" value="{{ $datapemeliharaan->pelaksana }}">
                            <small class="text-danger">{{ $errors->first('pelaksana') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Lokasi<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="lokasi" id="lokasi" value="{{ $datapemeliharaan->lokasi }}">
                            <small class="text-danger">{{ $errors->first('lokasi') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
							<label for="">Evidence <sup class="text-danger">*</sup></label>
                            <input type="file" id="images" name="evidence" class="form-control" value="{{ old('imageFile') }}">
                            <input type="hidden" name="oldevidence", value="{{ $datapemeliharaan->evidence }}">
                            <img src="{{ url('public/uploads/'.$datapemeliharaan->evidence) }}" alt="" class="img-fluid">
                            <small class="text-danger">{{ $errors->first('evidence') }}</small>
                        </div>
                    </div>
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="levelunit">Kebutuhan Item<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="kebutuhan_item" id="kebutuhan_item" value="{{ $datapemeliharaan->kebutuhan_item }}">
                            <small class="text-danger">{{ $errors->first('kebutuhan_item') }}</small>
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