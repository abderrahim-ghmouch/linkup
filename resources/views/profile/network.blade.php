@extends('layouts.app')

@yield('content')

@section

<main class="flex-1 flex justify-center w-full py-6 px-4">
    <div class="w-full max-w-[1024px] flex flex-col md:flex-row gap-6">

        <aside class="w-full md:w-80 flex flex-col gap-6">
            <div class="flex flex-col rounded-xl bg-white dark:bg-[#1e2732] shadow-sm border border-[#e5e7eb] dark:border-[#2a3441] overflow-hidden">
                <div class="px-6 py-4 border-b border-[#f0f2f5] dark:border-[#2a3441]">
                    <h3 class="text-[#111418] dark:text-white text-lg font-bold">Find People</h3>
                </div>

                <div class="p-6 flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-[#111418] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">search</span>
                            Search
                        </label>
                        <input type="text" placeholder="Name or @pseudo"
                            class="w-full rounded-xl border-[#e5e7eb] dark:border-[#344052] bg-[#f8f9fa] dark:bg-[#1a222e] text-[#111418] dark:text-white focus:ring-primary text-sm">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-[#111418] dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">location_on</span>
                            Location
                        </label>
                        <input type="text" placeholder="City or Country"
                            class="w-full rounded-xl border-[#e5e7eb] dark:border-[#344052] bg-[#f8f9fa] dark:bg-[#1a222e] text-[#111418] dark:text-white focus:ring-primary text-sm">
                    </div>

                    <button class="w-full bg-primary hover:bg-blue-600 text-white py-2.5 rounded-lg font-bold text-sm transition-all shadow-sm mt-2">
                        Search Now
                    </button>
                </div>
            </div>

@endsection
