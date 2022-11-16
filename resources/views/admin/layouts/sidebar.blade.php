<nav aria-label="alternative nav">
    <div
        class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

        <div
            class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="mr-3 flex-1">
                    <a class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2
                        border-blue-600" href="/admin-dashboard">
                        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Dasbor</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('admin-product.index')}}" class="{{ Request::is($title === " Produk") ? 'active'
                        : '' }} block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2
                        border-pink-500">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Produk</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('admin-storage.index')}}"
                        class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-purple-500">
                        <i class="fa-solid fa-warehouse pr-0 md:pr-3"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Stok
                            Gudang</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('admin-category.index')}}"
                        class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-red-500">
                        <i class="fa-regular fa-clipboard pr-0 md:pr-3"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Kategori</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="/"
                        class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-green-500">
                        <i class="fa-solid fa-house pr-0 md:pr-2"></i><span
                            class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Halaman
                            Utama</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>
</nav>
