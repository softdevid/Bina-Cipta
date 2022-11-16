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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center justify-center">
        <div
            class="p-6 mx-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-14 h-14 mb-2 text-gray-500 dark:text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>

            </div>
            <span>
                <h5 class="mb-2 text-2xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">
                    Telepon
                </h5>
            </span>
            <p class="mb-3">
            <ul class=" text-gray-500 dark:text-white text-center font-bold text-2xl">
                <li class="pb-2"><a href="tel:+6281329868796"
                        class="hover:text-red-600 dark:hover:text-red-500">081329868796</a></li>
                <li class="pb-2"><a href="tel:+6281327164886"
                        class="hover:text-red-600 dark:hover:text-red-500">081327164886</a></li>
            </ul>
            </p>

        </div>
        <div
            class="p-6 mx-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
                <svg class="w-14 h-14 mb-2 text-gray-500 dark:text-gray-400 fill-current" stroke-width="1.5"
                    stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                    </path>
                </svg>
            </div>
            <span>
                <h5 class="mb-2 text-2xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">
                    Whatsapp
                </h5>
            </span>
            <p class="mb-3">
            <ul class="text-gray-500 dark:text-white text-center font-bold text-2xl">
                <li class="pb-2">
                    <a href="https://wa.me/+6281329868796" class="hover:text-red-600 dark:hover:text-red-500">Whatsapp
                        1</a>
                </li>
                <li class="pb-2">
                    <a href="https://wa.me/+6281327164886" class="hover:text-red-600 dark:hover:text-red-500">Whatsapp
                        2</a>
                </li>
            </ul>
            </p>
        </div>
        <div
            class="p-6 mx-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mb-2 w-14 h-14 text-gray-500 dark:text-gray-400 fill-current">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>
            </div>
            <span>
                <h5 class="mb-2 text-2xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">
                    Maps
                </h5>
            </span>
            <p class="mb-3 text-gray-500 dark:text-white text-center font-bold text-2xl">
                <a href="https://goo.gl/maps/Lfdd8GPCDeMNkpkW6" class="hover:text-red-600 dark:hover:text-red-500">Bina
                    Cipta</a>
            </p>
        </div>

    </div>
</div>
@endsection
