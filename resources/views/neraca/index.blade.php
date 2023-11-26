@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Neraca</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Neraca</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover mb-0 table-bordered" id="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID User</th>
                                <th>Aset</th>
                                <th>Kewajiban</th>
                                <th>Ekuitas</th>
                                <th>Bulan</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($neracas as $neraca)
                                <tr>
                                    <td>{{ $neraca->id }}</td>
                                    <td>{{ $neraca->id_user }}</td>
                                    <td>{{ $neraca->aset }}</td>
                                    <td>{{ $neraca->kewajiban }}</td>
                                    <td>{{ $neraca->ekuitas }}</td>
                                    <td>{{ $neraca->bulan }}</td>
                                    <td>{{ $neraca->created_at }}</td>
                                    <td>{{ $neraca->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
