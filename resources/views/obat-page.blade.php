@extends('layouts.main')

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Obat</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Obat</li>
            </ol>
        </div>
    </div>
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- general form element   s -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Obat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="" method="">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" class="form-control" name="nama_obat"
                                placeholder="Masukkan nama obat">
                        </div>
                        <div class="form-group">
                            <label>Kemasan</label>
                            <input type="text" class="form-control" name="kemasan"
                                placeholder="Masukkan kemasan obat">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga"
                                placeholder="Masukkan harga obat">
                        </div>
                    </div>
                    <!-- /.card-body -->

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>
                            &nbsp; Tambah
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Obat</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->

                
                <div class="card-body table-responsive p-0 fixed-table">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Kemasan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Albendasol suspensi 200 mg/5 ml</td>
                                <td>Ktk 10 btl @ 10 ml</td>
                                <td>Rp. 60.000</td>

                                <td>
                                    <a href="" class="btn btn-warning me-2"><i class="fas fa-edit"></i>
                                    &nbsp; Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        &nbsp; Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Albendazol tablet/ tablet kunyah 400 mg</td>
                                <td>ktk 5 x 6 tablet</td>
                                <td>Rp. 16.000</td>

                                <td>
                                    <a href="" class="btn btn-warning me-2"><i class="fas fa-edit"></i>
                                    &nbsp; Edit
                                    </a>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                        &nbsp; Hapus
                                    </button>
                                </td>
                            </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alopurinol tablet 100 mg</td>
                                    <td>ktk 10 x 10 tablet</td>
                                    <td>Rp. 16.000</td>

                                    <td>
                                        <a href="" class="btn btn-warning me-2"><i class="fas fa-edit"></i>
                                        &nbsp; Edit
                                        </a>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                            &nbsp; Hapus
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
@endsection