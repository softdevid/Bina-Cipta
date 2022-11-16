<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.product", [
            "title" => "Produk",
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.add", [
            "title" => "Tambah Produk",
            "kategoris" => Kategori::all(),
            "products" => Product::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'nama' => 'required|unique:products|max:255',
            'gambar_utama' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'gambar_lain[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ])->validate();
        // dd($request->all());

        if ($request->hasFile("gambar_utama")) {
            $file = $request->file('gambar_utama');
            $image = Cloudinary::upload($file->getRealPath(), ['folder' => 'binacipta']);
            $public_id = $image->getPublicId();
            $url = $image->getSecurePath();

            $product = Product::create([
                "nama" => $request->nama,
                "url" => $url,
                "kategori" => $request->kategori,
                "namagambar" => $public_id,
                "deskripsi" => $request->deskripsi,
                "hargajual" => $request->harga_jual,
                "hargabeli" => $request->harga_beli,
                "stokgudang" => $request->stok_gudang,
                "stoktoko" => $request->stok_toko,
            ]);
        }

        if ($request->hasFile('gambar_lain')) {
            $file = $request->file('gambar_lain');
            foreach ($file as $key => $file) {
                $images = Cloudinary::upload($file->getRealPath(), ['folder' => 'binacipta']);
                $public_id = $image->getPublicId();
                $url = $images->getSecurePath();
                Image::create([
                    'image' => $public_id,
                    'url' => $url,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->to('admin-product')->with("success", "Berhasil ditambah!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view("admin.detail", [
            "title" => "Rincian Produk",
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        return view("admin.edit", [
            "title" => "Edit Produk",
            "products" => Product::find($id),
            "kategoris" => Kategori::all(),
            "images" => Image::where('product_id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $rules = [
            'nama' => 'required|max:255',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'kategori' => 'required',
            'stok_toko' => 'required',
            'stok_gudang' => 'required',
            'deskripsi' => 'required',
            'gambar_utama' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'gambar_lain[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            // 'barcode' => 'required|max:18|unique:databarang'
        ];

        $validatedData = $request->validate($rules);
        $product->update($validatedData);

        if ($request->hasFile('gambar_utama')) {
            Cloudinary::destroy($product->namagambar);
            $file = $request->file('gambar_utama');
            $image = Cloudinary::upload($file->getRealPath(), ['folder' => 'binacipta']);
            $public_id = $image->getPublicId();
            $url = $image->getSecurePath();

            $image = [
                "image" => $public_id,
                "url" => $url,
            ];
        }

        if ($request->hasFile('gambar_lain')) {
            $file = $request->file('gambar_lain');
            foreach ($file as $key => $file) {
                $images = Cloudinary::upload($file->getRealPath(), ['folder' => 'binacipta']);
                $public_id = $image->getPublicId();
                $url = $images->getSecurePath();
                Image::create([
                    'image' => $public_id,
                    'url' => $url,
                    'product_id' => $product->id,
                ]);
            }
        }
        return redirect()->to('admin-product')->with("success", "Berhasil diedit!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        $images = Image::where('product_id', $id)->get();


        if ($images->count() >= 1) {
            foreach ($images as $image) {
                Cloudinary::destroy($image->image);
            }
            $images->where('product_id', $id)->delete();
        }

        Cloudinary::destroy($product->namagambar);
        $product->delete();

        return back()->with('success', 'Berhasil dihapus!!');
    }
}