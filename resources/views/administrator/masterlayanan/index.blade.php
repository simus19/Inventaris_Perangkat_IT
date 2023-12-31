@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Master Layanan')

@section('content')

@if (Auth::user()->userroles_id == 1)
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Master Layanan</h6>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="{{ url('administrator/masterlayanan/add') }}" class="btn btn-success">Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Kode Unit</th>
                            <th>Kode BussArea Unit</th>
                            <th>NamaUnit</th>
                            <th>Level Unit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGateway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Unit</th>
                            <th>Kode BussArea Unit</th>
                            <th>NamaUnit</th>
                            <th>Level Unit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGateway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($masterlayanans as $data)
                        <tr>
                            <td>{{ $data->unitcode }}</td>
                            <td>{{ $data->busarea }}</td>
                            <td>{{ $data->namaunit }}</td>
                            <td>{{ $data->levelunit }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->jenislayanan }}</td>
                            <td>{{ $data->sid }}</td>
                            <td>{{ $data->bandwith }}</td>
                            <td>{{ $data->ipgateway }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->koordinat }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>
                                <div style="display: inline-flex;" class="">
                                    <a href="{{ url('/administrator/masterlayanan/edit/'.$data->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> 
                                    <a href="{{ url('/administrator/masterlayanan/del-masterlayanan/'.$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <h6 class="mt-2 font-weight-bold text-success">Data Master Layanan</h6>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Kode Unit</th>
                            <th>Kode BussArea Unit</th>
                            <th>NamaUnit</th>
                            <th>Level Unit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGateway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Unit</th>
                            <th>Kode BussArea Unit</th>
                            <th>NamaUnit</th>
                            <th>Level Unit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGateway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($masterlayanans as $data)
                        <tr>
                            <td>{{ $data->unitcode }}</td>
                            <td>{{ $data->busarea }}</td>
                            <td>{{ $data->namaunit }}</td>
                            <td>{{ $data->levelunit }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->jenislayanan }}</td>
                            <td>{{ $data->sid }}</td>
                            <td>{{ $data->bandwith }}</td>
                            <td>{{ $data->ipgateway }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->koordinat }}</td>
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





