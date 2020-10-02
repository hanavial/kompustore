@extends('layouts.app')

@section('title', $master->nama_barang)
@section('content')
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Detail Barang</h4>
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
                <div class="d-flex justify-content-between">
                    <h4 class="mb-0">{{ $master->nama_barang }}</h4>
                </div>
                <p>{{ $master->kategori->kategori_nama }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
