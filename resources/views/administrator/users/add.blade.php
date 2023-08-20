@extends('layouts.admin.master')

@section('title', 'User Baru')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="mt-0 font-weight-bold text-success">Form User Baru</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('administrator/users/store') }}" method="post"> @csrf
                <div class="row">
                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Nama<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="username">Username<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="username" id="username" value="{{ old('username') }}">
                            <small class="text-danger">{{ $errors->first('username') }}</small>
                        </div>
                    </div>

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="email">Email<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>
                    </div>

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="userroles_id">Hak Akses<sup class="text-danger">*</sup></label>
                            <select class="custom-select" name="userroles_id">
                                    <option selected disabled>Pilih Hak Akses</option>
                                    @foreach ($userroles as $userrole)
                                            <option {{ old('userroles_id') == $userrole->id ? 'selected' : ''; }} value="{{ $userrole->id }}">{{ $userrole->name }}</option>
                                    @endforeach
                              </select>
                            <small class="text-danger">{{ $errors->first('userroles_id') }}</small>
                        </div>
                    </div>

                    <div class="col-xl-6 col-ms-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="password">Password<sup class="text-danger">*</sup></label>
                            <input class="form-control" type="text" disabled value="Default : jurnal123">
                            <small class="text-danger">{{ $errors->first('password') }}</small>
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