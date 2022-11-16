@extends('admin.layouts.template')
@section('content')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.sidebar')
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <div
                    class="container mx-auto flex max-w-full flex-wrap items-center justify-between px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold pl-2">Tambah Produk</h1>
                </div>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="container">
            <form class="m-4" action="{{route('admin-product.update', $products->id)}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="kategori"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kategori</label>
                        <select id="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="kategori">
                            <option>Pilih Kategori</option>
                            @foreach ($kategoris as $kategori)
                            <option @if ($kategori->id == $products->kategori)
                                {{"selected"}}
                                @endif value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                            Produk</label>
                        <input type="text" id="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="nama" value="{{$products->nama}}" placeholder="Nama Produk" required="">
                    </div>
                    <div>
                        <label for="harga_beli"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Beli</label>
                        <input type="text" id="harga_beli"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="harga_beli" value="{{$products->hargabeli}}" placeholder="Harga Beli" required="">
                    </div>
                    <div>
                        <label for="harga_jual"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Jual
                        </label>
                        <input type="tel" id="harga_jual"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="harga_jual" value="{{$products->hargajual}}" placeholder="Harga Jual" required="">
                    </div>
                    <div>
                        <label for="stok_gudang"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok Gudang
                        </label>
                        <input type="number"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="stok_gudang" value="{{$products->stokgudang}}" min="0" placeholder="0" required>
                    </div>
                    <div>
                        <label for="stok_toko"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stok Toko
                        </label>
                        <input type="number"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="stok_toko" value="{{$products->stoktoko}}" min="0" placeholder="0" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="deskripsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi Produk
                    </label>
                    <textarea id="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="deskripsi" placeholder="Deskripsi Produk">{{$products->deskripsi}}</textarea>
                </div>
                <div class="mb-6">
                    <label for="gambar_utama"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar Utama</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" name="gambar_utama" id="gambar_utama" type="file">
                </div>
                <div class="mb-6">
                    <label for="gambar_lainnya"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar Lainnya</label>
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" name="gambar_lain[]" id="gambar_lainnya" type="file">
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" name="gambar_lain[]" id="gambar_lainnya" type="file">
                    <input
                        class="block w-full mb-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" name="gambar_lain[]" id="gambar_lainnya" type="file">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                &nbsp;
                <a href="{{route('admin-product.index')}}" type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a>
                &nbsp;
                <button
                    class="relative rounded-lg bg-blue-700 p-3 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="defaultModal">
                    Gambar
                </button>
            </form>
        </div>
    </div>
</div>
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 right-0 left-0 z-50 hidden h-modal w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0 md:h-full">
    <div class="relative h-full w-full max-w-2xl p-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Gambar utama dan gambar lain
                </h3>
                <button type="button"
                    class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-6 p-6">
                <div class="md:col-span-4">
                    <div class="grid grid-cols-2">
                        @if ($products->namagambar != '')
                        <div class="mx-auto max-w-screen-xxs justify-center rounded-lg">
                            Gambar utama
                            <img src="{{ $products->url }}" class="mx-auto mb-2 h-auto w-[200px]">
                            <button type="button" data-modal-toggle="popup-modal"
                                class="mx-auto flex items-center rounded-lg bg-red-600 p-2 text-center text-sm text-white hover:bg-red-700">Hapus
                                Gambar</button>
                        </div>
                        @else
                        <b class="text-center">Tidak ada gambar utama</b>
                        @endif
                        <div class="mx-auto grid grid-cols-1 justify-center gap-6">
                            <b class="text-center">Gambar Lain</b>
                            @if (count($images) > 0)
                            @foreach ($images as $g)
                            <div class="max-w-screen-xxs rounded-lg">
                                <img src="{{ $g->url }}" alt="" class="mx-auto h-auto w-[200px]">
                                <button type="button" data-modal-toggle="gambar-modal{{ $products->id }}"
                                    class="mx-auto flex items-center rounded-lg bg-red-600 p-2 text-center text-sm text-white hover:bg-red-700">Hapus
                                    Gambar</button>
                            </div>
                            @endforeach
                            @else
                            <b class="text-center">Tidak ada gambar lain</b>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center space-x-2 rounded-b border-t border-gray-200 p-6 dark:border-gray-600">
                <button data-modal-toggle="defaultModal" type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
@foreach ($images as $g)
<div id="gambar-modal{{ $g->id }}" tabindex="-1"
    class="fixed top-0 right-0 left-0 z-50 hidden h-modal overflow-y-auto overflow-x-hidden md:inset-0 md:h-full">
    <div class="relative h-full w-full max-w-xs p-4 md:h-auto">
        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="gambar-modal{{ $g->id }}">
                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-3 text-center">
                <form action="/deletegambar/{{ $g->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('delete')
                    <svg aria-hidden="true" class="mx-auto mb-4 h-14 w-14 text-gray-400 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin ingin menghapus
                        gambar {{ $g->image }}
                        ?</h3>
                    <button data-modal-toggle="gambar-modal{{ $g->id }}" type="submit"
                        class="mr-2 inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                        Ok
                    </button>
                    <button data-modal-toggle="gambar-modal{{ $g->id }}" type="button"
                        class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">No,
                        cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
