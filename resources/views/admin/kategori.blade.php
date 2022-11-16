@extends('admin.layouts.template')
@section('content')
<div class="flex flex-col md:flex-row">
    @include('admin.layouts.sidebar')
    <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-gray-800 pt-3">
            <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                <div
                    class="container mx-auto flex max-w-full flex-wrap items-center justify-between px-4 sm:px-6 lg:px-8">
                    <h1 class="font-bold pl-2">Kategori</h1>
                    <a href="{{route('admin-category.create')}}" type="button"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2">Tambah</a>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto relative shadow-md">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Color
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            Sliver
                        </td>
                        <td class="py-4 px-6">
                            Laptop
                        </td>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="py-4 px-6 text-right">
                            <a href="{{route('admin-category.edit', [1])}}" type="button"
                                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                            <a href="{{route('admin-category.destroy', [1])}}" type="button"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                    </tr>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="py-4 px-6">
                            White
                        </td>
                        <td class="py-4 px-6">
                            Laptop PC
                        </td>
                        <td class="py-4 px-6">
                            $1999
                        </td>
                        <td class="py-4 px-6 text-right">
                            <a href="{{route('admin-category.edit', [1])}}" type="button"
                                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                            <a href="{{route('admin-category.destroy', [1])}}" type="button"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="py-4 px-6">
                            Black
                        </td>
                        <td class="py-4 px-6">
                            Accessories
                        </td>
                        <td class="py-4 px-6">
                            $99
                        </td>
                        <td class="py-4 px-6 text-right">
                            <a href="{{route('admin-category.edit', [1])}}" type="button"
                                class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</a>
                            <a href="{{route('admin-category.destroy', [1])}}" type="button"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-1 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
