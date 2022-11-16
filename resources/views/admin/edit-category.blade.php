@extends('admin.layouts.template')
@section('content')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.sidebar')
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <div
                    class="container mx-auto flex max-w-full flex-wrap items-center justify-between px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold pl-2">Edit Kategori Produk</h1>
                </div>
            </div>
        </div>
        <div class="container">
            @csrf
            <form class="m-4">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kategori</label>
                        <select id="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pilih Kategori</option>
                            <option>8 cm</option>
                            <option>10 cm</option>
                            <option>20 inc</option>
                        </select>
                    </div>
                    <div>
                        <label for="nama_produk"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Produk</label>
                        <input type="text" id="nama_produk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Produk" required="">
                    </div>
                    <div>
                        <label for="harga_beli"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Beli</label>
                        <input type="text" id="harga_beli"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Harga Beli" required="">
                    </div>
                    <div>
                        <label for="harga_jual"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Jual
                        </label>
                        <input type="tel" id="harga_jual"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Harga Jual" required="">
                    </div>
                    <div>
                        <label for="stok_gudang"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok Gudang
                        </label>
                        <div class="grid grid-cols-4 md:grid-cols-5 gap-4">

                        </div>
                    </div>
                    <div>
                        <label for="stok_toko"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok Toko
                        </label>
                        <div class="grid grid-cols-4 md:grid-cols-5 gap-4">

                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="deskripsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Produk
                    </label>
                    <textarea id="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Deskripsi Produk"></textarea>
                </div>
                <div class="mb-6">
                    <label for="gambar_utama"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar Utama</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="gambar_utama" type="file">
                </div>
                <div class="mb-6">
                    <label for="gambar_lainnya"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar Lainnya</label>
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="gambar_lainnya" type="file">
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="gambar_lainnya" type="file">
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="gambar_lainnya" type="file">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                &nbsp;
                <a href="{{route('admin-category.index')}}" type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
