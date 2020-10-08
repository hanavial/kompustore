<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\MasterRequest;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::with('kategori')->latest()->get();
        // dd($masters);
        return view('pages.master.index', compact('masters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('pages.master.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterRequest $request)
    {
        Master::create([
            'nama_barang' => $request->nama_barang,
            'slug' => Str::slug($request->nama_barang),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        alert()->success('Master','Sukses tambah data master baru');

        return redirect()->route('master.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        // $master = Master::with('kategori')->findOrFail($slug);
        // dd($masters);
        return view('pages.master.show',compact('master'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        $kategoris = Kategori::get();
        return view('pages.master.edit',compact('master','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasterRequest $request, Master $master)
    {
        $master->update([
            'nama_barang' => $request->nama_barang,
            'slug' => Str::slug($request->nama_barang),
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);

        alert()->success('Master','Sukses edit data master');

        return redirect()->route('master.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
