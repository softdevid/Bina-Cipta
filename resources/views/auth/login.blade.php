@extends('admin.layouts.template')
@section('content')
<form action="/login" method="POST">
    <div class="bg-slate-700">
        <div class="flex justify-center container mx-auto my-auto w-screen h-screen items-center flex-col">
            {{-- <div class="text-slate-100 items-center">
                <svg class="w-10 h-10 mx-auto pb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                <div class="text-center pb-3">Welcome</div>
            </div> --}}
            <h1
                class="mb-5 text-center text-3xl font-extrabold tracking-tight leading-none text-white md:text-4xl dark:text-white">
                Login
            </h1>
            @csrf
            <div class="w-full md:w-3/4  lg:w-1/2 flex flex-col items-center bg-slate-50 rounded-md pt-12">
                <!-- email input -->
                <div class="w-3/4 mb-6">
                    <input type="email" name="email" id="email"
                        class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500 border-solid border-2 border-slate-300"
                        placeholder="Email adress">
                </div>
                <!-- password input -->
                <div class="w-3/4 mb-6">
                    <input type="password" name="password" id="password"
                        class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 hover:ring-gray-600 outline-slate-500  border-solid border-2 border-slate-300"
                        placeholder="Password">
                </div>
                <!-- button -->
                <div class="w-3/4 mb-12">
                    <button type="submit"
                        class="py-4 bg-blue-500 w-full rounded text-blue-50 font-bold hover:bg-blue-700">
                        LOGIN</button>
                </div>
            </div>
        </div>

</form>

</div>
@endsection
