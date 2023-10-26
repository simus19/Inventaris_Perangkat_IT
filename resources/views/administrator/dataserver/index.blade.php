@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Data Server')

@section('content')

@if (Auth::user()->userroles_id == 1)
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Server</h6>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="{{ url('administrator/dataserver/add') }}" class="btn btn-success">Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Nama</th>
                            <th>Alamat IP</th>
                            <th>Nama Server</th>
                            <th>Memori</th>
                            <th>Prosesor</th>
                            <th>Hardisk</th>
                            <th>Status Hardisk</th>
                            <th>Tanggal Update</th>
                            <th>Fungsi Server</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr >
                            <th>Nama</th>
                            <th>Alamat IP</th>
                            <th>Nama Server</th>
                            <th>Memori</th>
                            <th>Prosesor</th>
                            <th>Hardisk</th>
                            <th>Status Hardisk</th>
                            <th>Tanggal Update</th>
                            <th>Fungsi Server</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dataservers as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamatip }}</td>
                            <td>{{ $data->namaserver }}</td>
                            <td>{{ $data->memori }}</td>
                            <td>{{ $data->prosesor }}</td>
                            <td>{{ $data->hardisk }}</td>
                            <td>{{ $data->statushardisk }}</td>
                            <td>{{ $data->tanggalupdate }}</td>
                            <td>{{ $data->fungsiserver }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>
                                <div style="display: inline-flex;" class="">
                                    <a href="{{ url('/administrator/dataserver/edit/'.$data->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> 
                                    <a href="{{ url('/administrator/dataserver/del-dataserver/'.$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                        <h6 class="mt-2 font-weight-bold text-success">Data Server</h6>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>Nama</th>
                            <th>Alamat IP</th>
                            <th>Nama Server</th>
                            <th>Memori</th>
                            <th>Prosesor</th>
                            <th>Hardisk</th>
                            <th>Status Hardisk</th>
                            <th>Tanggal Update</th>
                            <th>Fungsi Server</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr >
                            <th>Nama</th>
                            <th>Alamat IP</th>
                            <th>Nama Server</th>
                            <th>Memori</th>
                            <th>Prosesor</th>
                            <th>Hardisk</th>
                            <th>Status Hardisk</th>
                            <th>Tanggal Update</th>
                            <th>Fungsi Server</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dataservers as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamatip }}</td>
                            <td>{{ $data->namaserver }}</td>
                            <td>{{ $data->memori }}</td>
                            <td>{{ $data->prosesor }}</td>
                            <td>{{ $data->hardisk }}</td>
                            <td>{{ $data->statushardisk }}</td>
                            <td>{{ $data->tanggalupdate }}</td>
                            <td>{{ $data->fungsiserver }}</td>
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
          url: "{{ url('administrator/dataserver/table-server') }}",
        //   type: 'GET'
        },
        columns: [
          {data:'nama',name:'nama'},
          {data:'alamatip',name:'alamatip'},
          {data:'namaserver',name:'namaserver'},
          {data:'memori',name:'memori'},
          {data:'prosesor',name:'prosesor'},
          {data:'hardisk',name:'hardisk'},
          {data:'statushardisk',name:'statushardisk'},
          {data:'tanggalupdate',name:'tanggalupdate'},
          {data:'fungsiserver',name:'fungsiserver'},
          {data:'keterangan',name:'keterangan'},
          {data:'action',name:'action'},
        ],
        order: [[0, 'asc']]
      });
    });
</script> --}}

@endsection