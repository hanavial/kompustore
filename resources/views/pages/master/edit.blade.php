@extends('layouts.app')

@section('title', 'Kompustore Edit Master Barang')
@section('content')
<form action="{{ route('master.update',$master->slug) }}" method="POST">
    @csrf
    @method('put')
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Edit Barang</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="page-header-toolbar">
                <div class="sort-wrapper">
                    <a href="{{ route('master.index') }}" class="btn btn-primary toolbar-item">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Barang Baru</h4>
                    <div class="form-group{{ $errors->has('nama_barang') ? ' has-error' : '' }}">
                        <label for="nama_barang" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="nama_alat" type="text" class="form-control" name="nama_barang"
                                value="{{ old('nama_barang') ?? $master->nama_barang }}" required>
                            @if ($errors->has('nama_barang'))
                            <span class="help-block mt-2">
                                <strong class="text-danger">{{ $errors->first('nama_barang') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label for="harga" class="col-md-4 control-label">Harga</label>
                        <div class="col-md-6">
                            <input id="harga" type="number" class="form-control" name="harga" value="{{ old('harga') ?? $master->harga }}"
                                required>
                            @if ($errors->has('harga'))
                            <span class="help-block mt-2">
                                <strong class="text-danger">{{ $errors->first('harga') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('stok') ? ' has-error' : '' }}">
                        <label for="stok" class="col-md-4 control-label">Stok</label>
                        <div class="col-md-4">
                            <input id="stok" type="number" class="form-control" name="stok" value="{{ old('stok') ?? $master->stok }}"
                                required>
                            @if ($errors->has('stok'))
                            <span class="help-block mt-2">
                                <strong class="text-danger">{{ $errors->first('stok') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('kategori_id') ? ' has-error' : '' }}">
                        <label for="kategori_id" class="col-md-4 control-label">Kategori</label>
                        <div class="col-md-4">
                            <form action="" method="post">
                                <select class="form-control" name="kategori_id" id="select" required="">
                                    {{-- <option value="{{ $master->kategori->id }}">{{ $master->kategori->kategori_nama }}</option> --}}
                                    @foreach ($kategoris as $kategori)
                                        {{-- @if ($kategori->id != $master->kategori->id)
                                            <option value="{{ $kategori->id }}">{{ $kategori->kategori_nama }}</option>
                                        @endif --}}
                                        <option {{ $kategori->id == $master->kategori->id ? 'selected' : '' }} value="{{ $kategori->id }}">{{ $kategori->kategori_nama }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-danger">
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
