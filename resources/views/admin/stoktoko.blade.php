@extends('admin.layouts.template')
@section('content')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.sidebar')
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <div
                    class="container mx-auto flex max-w-full flex-wrap items-center justify-between px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold pl-2">Tambah Stok Toko</h1>
                </div>
            </div>
        </div>
        <div class="container mx-auto my-4">
            <div class="flex flex-warp justify-center mx-4" data-aos="zoom-in" data-aos-duration="1000">
                <div
                    class="flex flex-wrap items-start md:items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
                    <img class="object-cover w-full md:h-96rounded-t-lg h-auto  md:rounded-none md:rounded-l-lg" src="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{-- {{$hasil->judul_detail}} --}}
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Deskripsi : </p>
                        <span class="mb-3 font-normal text-gray-700 dark:text-gray-400"></span>
                        <h5 class="mb-3 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Rincian :
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Klien : </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Projek : </p>
                        <p class="md:mb-5 mb-3 font-normal text-gray-700 dark:text-gray-400">Link : <a href=""
                                target="_blank" class="font-bold text-blue-500 hover:text-blue-600"></a></p>
                        <span>
                            <a href="{{route('admin-storage.index')}}"
                                class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <- Kembali </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
