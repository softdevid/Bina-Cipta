@extends('Home.layouts.template')
@section('content1')

<div id="animation-carousel" class="relative" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-40 overflow-hidden md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="https://res.cloudinary.com/dufcqrw3r/image/upload/v1667312082/binacipta/wig1_gkwyon.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-200 ease-linear absolute inset-0 transition-all transform -translate-x-full z-10"
            data-carousel-item="">
            <img src="https://res.cloudinary.com/dufcqrw3r/image/upload/v1667312105/binacipta/wig2_rlvzim.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-200 ease-linear absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="active">
            <img src="https://res.cloudinary.com/dufcqrw3r/image/upload/v1667312088/binacipta/wig3_hd7dqg.png"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev="">
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next="">
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

@endsection
@section('content2')
<div class="container mx-auto my-4">

    <div class="mb-4 mx-4 md:mx-0 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 dark:border-blue-500"
                    id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all"
                    aria-selected="true">All</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                    id="kategori-tab" data-tabs-target="#kategori" type="button" role="tab" aria-controls="kategori"
                    aria-selected="false">Kategori</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent" class="mx-4 md:mx-0">
        <div class="p-4" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-4">
                @foreach ($products as $product)
                <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                    <img class="p-8 rounded-t-lg" src="{{$product->url}}" alt="{{$product->namagambar}}" />

                    <div class="px-5 pb-5">

                        <h5 class="md:pb-4 pb-3 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{$product->nama}}</h5>

                        <div class="flex justify-between items-center">
                            <span
                                class="md:text-3xl text-lg px-2 font-bold text-gray-900 dark:text-white">{{$product->hargajual}}</span>
                            <a href="/detail2/{{$product->id}}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal md:font-medium rounded-lg text-sm px-2 md:px-5 py-1 md:py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Detail Produk
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="hidden p-4 rounded-lg" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($products as $product)
                <a href="/kategori/{{$product->id}}">
                    <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">

                        <img class="p-8 rounded-t-lg" src="{{$product->url}}" alt="{{$product->namagambar}}" />

                        <div class="px-5 pb-5">

                            <h5 class="md:pb-4 pb-3 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{$product->nama}}</h5>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

    </div>
    @endsection
