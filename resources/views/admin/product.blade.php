@extends('admin.layouts.template')
@section('content')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.sidebar')
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <div
                    class="container mx-auto flex max-w-full flex-wrap items-center justify-between px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold pl-2">Produk</h1>
                    <a href="{{route('admin-product.create')}}" type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2">Tambah</a>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto relative shadow-md">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Gambar
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Barang
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Stok Gudang
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Stok Toko
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Harga Jual
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Harga Beli
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Opsi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10" src="{{$product->url}}" alt="{{$product->namagambar}}">
                        </th>
                        <td class="py-4 px-6">
                            {{$product->nama}}
                        </td>
                        <td class="py-4 px-6">
                            {{$product->stokgudang}}
                        </td>
                        <td class="py-4 px-6">
                            {{$product->stoktoko}}
                        </td>
                        <td class="py-4 px-6">
                            {{$product->hargajual}}
                        </td>
                        <td class="py-4 px-6">
                            {{$product->hargabeli}}
                        </td>
                        <td class="py-4 px-6 text-right flex">
                            <a href="{{route('admin-product.show', [$product->id])}}" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Detail</a>
                            <a href="{{route('admin-product.edit', [$product->id])}}" type="button"
                                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                            <form action="{{route('admin-product.destroy', [$product->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
