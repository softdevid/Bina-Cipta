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
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:mx-0 mx-4">
        <div class="max-w-sm rounded-lg shadow-md">

            <img class="rounded-t-lg" src="/img/bca.png" alt="">

        </div>
        <div class="max-w-sm rounded-lg shadow-md">

            <img class="rounded-t-lg" src="/img/bri.png" alt="">

        </div>
        <div class="max-w-sm rounded-lg shadow-md">

            <img class="rounded-t-lg" src="/img/bni.png" alt="">

        </div>
        <div class="max-w-sm rounded-lg shadow-md">

            <img class="rounded-t-lg" src="/img/dana.png" alt="">

        </div>
        <div class="max-w-sm rounded-lg shadow-md">

            <img class="rounded-t-lg" src="/img/mandiri.png" alt="">

        </div>
    </div>
</div>

@endsection
