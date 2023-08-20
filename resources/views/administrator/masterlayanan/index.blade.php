@extends('layouts.admin.master')

@section('morecss')
<!-- Custom styles for this page -->
<link href="{{ url('public/admin-assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('title', 'Master Layanan')

@section('content')

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
                            <a href="{{ url('administrator/masterlayanan/add') }}" class="btn btn-success"></i> <i class="fas fa-user-plus"></i> Tambah Data</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="dataTableUsers" width="100%" cellspacing="0">
                    <thead>
                        <tr >
                            <th>UnitCode</th>
                            <th>Busarea</th>
                            <th>NamaUnit</th>
                            <th>LevelUnit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGetaway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>UnitCode</th>
                            <th>Busarea</th>
                            <th>NamaUnit</th>
                            <th>LevelUnit</th>
                            <th>Alamat</th>
                            <th>JenisLayanan</th>
                            <th>Sid</th>
                            <th>Bandwith</th>
                            <th>ipGetaway</th>
                            <th>Status</th>
                            <th>Koordinat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
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





