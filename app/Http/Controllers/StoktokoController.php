<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stoktoko;
use Illuminate\Http\Request;

class StoktokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stoktoko  $stoktoko
     * @return \Illuminate\Http\Response
     */
    public function show(Product $stoktoko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stoktoko  $stoktoko
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $stoktoko)
    {
        return view('admin.stoktoko', [
            'title' => 'Tambah Stok Toko',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stoktoko  $stoktoko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $stoktoko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stoktoko  $stoktoko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $stoktoko)
    {
        //
    }
}