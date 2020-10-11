<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Kategori;
use Illuminate\Support\Str;
use App\Http\Requests\MasterRequest;

class MasterController extends Controller
{
    public function index()
    {
        $masters = Master::with('kategori')->get();
        return view('pages.master.index', compact('masters'));
    }

    public function create()
    {
        $kategoris = Kategori::with('masters')->get();
        return view('pages.master.create', compact('kategoris'));
    }

    public function store(MasterRequest $request)
    {
        Master::create([
            'nama_barang' => $request->nama_barang,
            'slug' => Str::slug($request->nama_barang),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        alert()->success('Master', 'Sukses tambah data master baru');

        return redirect()->route('master.index');
    }

    public function show(Master $master)
    {
        return view('pages.master.show', compact('master'));
    }

    public function showByCategory(Kategori $kategori)
    {
        $masters = $kategori->masters()->get();
        return view('pages.master.index', compact('masters','kategori'));
    }

    public function edit(Master $master)
    {
        $kategoris = Kategori::with('masters')->get();
        return view('pages.master.edit', compact('master', 'kategoris'));
    }

    public function update(MasterRequest $request, Master $master)
    {
        $master->update([
            'nama_barang' => $request->nama_barang,
            'slug' => Str::slug($request->nama_barang),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        alert()->success('Master', 'Sukses edit data master');

        return redirect()->route('master.index');
    }

    public function destroy(Master $master)
    {
        $master->delete();

        alert()->success('Master', 'Sukses hapus data master');

        return redirect()->route('master.index');
    }
}
