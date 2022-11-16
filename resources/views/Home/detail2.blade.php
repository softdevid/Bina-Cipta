@extends('Home.layouts.template')
@section('content2')
<div class="container mx-auto my-8">
    <div class="flex flex-warp justify-center mx-4">
        <div
            class="flex flex-wrap items-start md:items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
            <img class="object-cover w-full md:h-96rounded-t-lg h-auto  md:rounded-none md:rounded-l-lg" src="" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Template
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Deskripsi : </p>
                <span class="mb-3 font-normal text-gray-700 dark:text-gray-400"></span>
                <h5 class="mb-3 text-1xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Rincian :
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Klien : </p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Projek : </p>
                <p class="md:mb-5 mb-3 font-normal text-gray-700 dark:text-gray-400">Link : <a href="" target="_blank"
                        class="font-bold text-blue-500 hover:text-blue-600"></a></p>
                <span>
                    <a href="/produk"
                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <- Kembali </a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
