@extends('layouts.app')

@section('title','Kompustore Master Barang')
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
                <a href="{{ route('master.create') }}" class="btn btn-primary toolbar-item">Tambah Barang</a>
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
                    <table class="table table-striped table-hover" id="table">
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
                            @forelse ($masters as $master)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('master.show',$master->slug) }}">{{ $master->nama_barang }}</a>
                                </td>
                                <td>Rp. {{ number_format($master->harga) }}</td>
                                <td>{{ $master->stok }}</td>
                                <td>{{ $master->kategori->kategori_nama }}</td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('master.edit',$master->slug) }}" class="btn btn-warning"><i
                                                class="menu-icon typcn typcn-pencil"></i></a>
                                        <form action="{{ route('master.destroy', $master->slug) }}" method="post"
                                            class="form-del">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger delete"><i
                                                    class="menu-icon typcn typcn-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" align="center">Tidak ada data master</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('.delete').on('click', function (event) {
        var form =  $(this).closest("form");
        event.preventDefault();
        swal({
            title: 'Apakah Anda Yakin?',
            text: "Anda Tidak Akan Dapat Mengembalikannya!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    });
</script>
@endsection
