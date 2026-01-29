@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="flex-1 flex justify-center w-full py-6 px-4">
        <div class="w-full max-w-[1024px] flex flex-col gap-6">
            <!-- Profile Header Section -->
            <div
                class="flex flex-col rounded-xl overflow-hidden bg-white dark:bg-[#1e2732] shadow-sm border border-[#e5e7eb] dark:border-[#2a3441]">
                <!-- Cover Image -->
                <div class="w-full h-48 md:h-64 bg-center bg-no-repeat bg-cover relative"
                    data-alt="Warm abstract nature background with soft sunlight flare"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAb0Lxfu290LL3gKOYoERJOS30wMsNbbOtZ9kGGntBhTaRQcUyE-rphBG7jJz_OiY2fJtclvDMLMCx9fiizJz1MGaq81DaAYXzCnBf_Cfo4kW3f_PBUne10rKQb-GOCzxp6Crv-LvkxlNQ635DVTcCCDH5W_jHCAYWwb66XSQacj4uq2Xy3SA-e3bNCWkpaQHP7k-lcqczc8qKwplIXwP93sZ7u8hmKn9EX1sXTBae8Oerxw-BRgpPZFJVjOR7bfVPIzTreYYMrdKdQ");'>
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>
                <!-- Info & Avatar -->
                <div class="relative px-6 pb-6 pt-0 flex flex-col items-center -mt-16 md:-mt-20">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-32 h-32 md:w-40 md:h-40 border-[6px] border-white dark:border-[#1e2732] shadow-md z-10"
                        data-alt="Family portrait of four people smiling outdoors"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBrBDe18taU9EanBdCmoWqfTNxMET-S20TRNv-FVEItzxboF0NZV34_ucWD6reUyjSVCtrrTaq3100J-QYmjDe5z3xIQNe4KoAciKhZs-SHKF6fAg_JYIo6slX_61t4FKknMPO_Xz_OoVHyGdZQxtbWF0TsMHyNpRQYcec9yvGvYKY9HvXDjQbaaALSRU15LApIKfuyqRyJ76bDIqoIircRwMrQ2_S588GdgA5bjQ-axaG7-129crb1akgCQe7P9-4B0WSAqcdgv6cA");'>
                    </div>
                    <div class="mt-4 flex flex-col items-center text-center max-w-lg">
                        <h1 class="text-[#111418] dark:text-white text-2xl md:text-3xl font-bold leading-tight">
                            {{ auth()->user()->pseudo }}</h1>
                        <p class="text-[#60708a] dark:text-gray-400 text-base font-normal leading-relaxed mt-2">
                           {{ auth()->user()->bio ?? " I'm using linkup" }}</p>

                        <div class="flex flex-wrap justify-center gap-3 mt-4">
                            <button
                                class="flex items-center gap-2 bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-colors shadow-sm">
                                <span class="material-symbols-outlined text-[20px]">person_add</span>
                                Add Friend
                            </button>
                            <button
                                class="flex items-center gap-2 bg-[#f0f2f5] dark:bg-[#344052] hover:bg-[#e0e4e9] dark:hover:bg-[#404b5c] text-[#111418] dark:text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-colors">
                                <span class="material-symbols-outlined text-[20px]">mail</span>
                                Message
                            </button>

                            <a href="{{ route('profile.edit') }}"
                                class="flex items-center gap-2 border border-[#d1d5db] dark:border-[#4b5563] hover:bg-[#f9fafb] dark:hover:bg-[#2a3441] text-[#111418] dark:text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-colors">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                edit profile
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection
