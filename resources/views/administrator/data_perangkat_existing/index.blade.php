@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Perangkat Existing')

@section('content')

@if (Auth::user()->userroles_id == 1)
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Perangkat Existing</h6>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="{{ url('administrator/data_perangkat_existing/add') }}" class="btn btn-success"></i> <i class="fa-sharp fa-solid fa-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Nama Perangkat</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Sn</th>
                            <th>Tahun Pasang Ex</th>
                            <th>Tahun Bongkar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Perangkat</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Sn</th>
                            <th>Tahun Pasang Ex</th>
                            <th>Tahun Bongkar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data_perangkat_existings as $data)
                        <tr>
                            <td>{{ $data->nama_perangkat }}</td>
                            <td>{{ $data->merk }}</td>
                            <td>{{ $data->tipe }}</td>
                            <td>{{ $data->sn }}</td>
                            <td>{{ $data->tahun_pasangex }}</td>
                            <td>{{ $data->tahun_bongkar }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>
                                <div style="display: inline-flex;" class="">
                                    <a href="{{ url('/administrator/data_perangkat_existing/edit/'.$data->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> 
                                    <a href="{{ url('/administrator/data_perangkat_existing/del-data_perangkat_existing/'.$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Perangkat Existing</h6>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Nama Perangkat</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Sn</th>
                            <th>Tahun Pasang Ex</th>
                            <th>Tahun Bongkar</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Perangkat</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Sn</th>
                            <th>Tahun Pasang Ex</th>
                            <th>Tahun Bongkar</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data_perangkat_existings as $data)
                        <tr>
                            <td>{{ $data->nama_perangkat }}</td>
                            <td>{{ $data->merk }}</td>
                            <td>{{ $data->tipe }}</td>
                            <td>{{ $data->sn }}</td>
                            <td>{{ $data->tahun_pasangex }}</td>
                            <td>{{ $data->tahun_bongkar }}</td>
                            <td>{{ $data->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('morejs')
<!-- Page level plugins -->
<script src="{{ url('public/admin-assets') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
    $('#dataTableUsers').DataTable();
} );
</script>

@endsection