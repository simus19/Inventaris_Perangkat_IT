@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Master Unit')

@section('content')

@if (Auth::user()->userroles_id == 1)
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Master Unit</h6>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="{{ url('administrator/masterunit/add') }}" class="btn btn-success"></i> <i class="fa-sharp fa-solid fa-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Kode Unit</th>
                            <th>Alamat</th>
                            <th>Kode BussArea Unit</th>
                            <th>Koordinat</th>
                            <th>Level Unit</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Unit</th>
                            <th>Alamat</th>
                            <th>Kode BussArea Unit</th>
                            <th>Koordinat</th>
                            <th>Level Unit</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($masterunits as $data)
                        <tr>
                            <td>{{ $data->unitcode }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->busarea }}</td>
                            <td>{{ $data->koodinat }}</td>
                            <td>{{ $data->levelunit }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>
                                <div style="display: inline-flex;" class="">
                                    <a href="{{ url('/administrator/masterunit/edit/'.$data->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> 
                                    <a href="{{ url('/administrator/masterunit/del-masterunit/'.$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <h6 class="mt-2 font-weight-bold text-success">Data Master Unit</h6>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Kode Unit</th>
                            <th>Alamat</th>
                            <th>Kode BussArea Unit</th>
                            <th>Koordinat</th>
                            <th>Level Unit</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Unit</th>
                            <th>Alamat</th>
                            <th>Kode BussArea Unit</th>
                            <th>Koordinat</th>
                            <th>Level Unit</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($masterunits as $data)
                        <tr>
                            <td>{{ $data->unitcode }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->busarea }}</td>
                            <td>{{ $data->koodinat }}</td>
                            <td>{{ $data->levelunit }}</td>
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
{{-- <script>
    //Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTableUsers').DataTable({
        processing : true,
        serverSide : true,
        ajax : {
          url: "{{ url('administrator/users/table-user') }}",
        //   type: 'GET'
        },
        columns: [
          {data:'name',name:'name'},
          {data:'username',name:'username'},
          {data:'userrole',name:'userrole'},
          {data:'action',name:'action'},
        ],
        order: [[0, 'asc']]
      });
    });
</script> --}}
@endsection