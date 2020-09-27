@extends('layouts.app')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
    <div class="col-12">
        <div class="page-header">
            <h4 class="page-title">Master</h4>
            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links">
                    <li><a href="#">ICE Market data</a></li>
                </ul>
                <ul class="quick-links ml-auto">
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Watchlist</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="page-header-toolbar">
            <div class="sort-wrapper">
                <button type="button" class="btn btn-primary toolbar-item">New</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Master</h4>
                    <a href="#"><small>Show All</small></a>
                </div>
                <p>List nama barang yang ada di master barang</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ $no = 1 }} --}}
                            @foreach ($masters as $master)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $master->nama_barang }}</td>
                                <td>Rp. {{ number_format($master->harga) }}</td>
                                <td>{{ $master->stok }}</td>
                                <td>{{ $master->kategori->kategori_nama }}</td>
                                <td>
                                    <div class="column">
                                        <a href="#" class="btn btn-warning"><i
                                                class="menu-icon typcn typcn-pencil"></i></a>
                                        <a href="#" class="btn btn-danger"><i
                                                class="menu-icon typcn typcn-trash"></i></a>
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
</div>
@endsection
