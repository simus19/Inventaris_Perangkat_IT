@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Data Aplikasi')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-6">
                        <h6 class="mt-2 font-weight-bold text-success">Data Aplikasi</h6>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="{{ url('administrator/dataaplikasi/add') }}" class="btn btn-success"></i> <i class="fa-sharp fa-solid fa-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>IP Aplikasi</th>
                            <th>Nama Aplikasi</th>
                            <th>Deskripsi</th>
                            <th>Tahun Buat</th>
                            <th>Bahasa Program</th>
                            <th>Database</th>
                            <th>Pengguna User</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr >
                            <th>IP Aplikasi</th>
                            <th>Nama Aplikasi</th>
                            <th>Deskripsi</th>
                            <th>Tahun Buat</th>
                            <th>Bahasa Program</th>
                            <th>Database</th>
                            <th>Pengguna User</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dataaplikasis as $data)
                        <tr>
                            <td>{{ $data->ip_aplikasi }}</td>
                            <td>{{ $data->nama_aplikasi }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->tahun_buat }}</td>
                            <td>{{ $data->bahasaprogram }}</td>
                            <td>{{ $data->database }}</td>
                            <td>{{ $data->user }}</td>
                            <td>{{ $data->status }}</td>
                            <td>
                                <div style="display: inline-flex;" class="">
                                    <a href="" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a> 
                                    <a href="{{ url('/administrator/dataaplikasi/del-dataaplikasi/'.$data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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