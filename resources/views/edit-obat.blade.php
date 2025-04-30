@extends('layouts.main')
<title>WDObat | Edit Obat</title>
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Obat</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="/obat" class="{{ request()->is('obat') }}">Obat</a></li>
          <li class="breadcrumb-item active">Edit Obat</li>
        </ol>
      </div>
    </div>
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- full width column -->
        <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Obat</h3>
                </div>
                <!-- form start -->
                <form action="{{ route('obat.update', $obat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $obat->nama_obat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kemasan">Kemasan</label>
                            <input type="text" class="form-control" id="kemasan" name="kemasan" value="{{ $obat->kemasan }}" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $obat->harga }}" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection