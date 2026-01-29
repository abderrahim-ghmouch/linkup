<html class="light" lang="en">
        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>LinkUp - The Anderson Family</title>
            <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&amp;display=swap"
                rel="stylesheet" />
            <link
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
            <link
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
            <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
            {{-- <script id="tailwind-config">
                tailwind.config = {
                    darkMode: "class",
                    theme: {
                        extend: {
                            colors: {
                                "primary": "#3c83f6",
                                "background-light": "#f5f7f8",
                                "background-dark": "#101722",
                            },
                            fontFamily: {
                                "display": ["Plus Jakarta Sans", "sans-serif"]
                            },
                            borderRadius: {
                                "DEFAULT": "0.5rem",
                                "lg": "1rem",
                                "xl": "1.5rem",
                                "full": "9999px"
                            },
                        },
                    },
                }
            </script> --}}
        </head>

        <body
            class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white min-h-screen flex flex-col overflow-x-hidden">
            <!-- Sticky Navigation Bar -->
            <header
                class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-[#f0f2f5] dark:border-[#2a3441] bg-white dark:bg-[#1a222e] px-4 md:px-10 py-3 shadow-sm">
                <div class="flex items-center gap-4 lg:gap-8">
                    <div class="flex items-center gap-2 text-primary">
                        <span class="material-symbols-outlined text-3xl">diversity_1</span>
                        <h2
                            class="text-[#111418] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] hidden sm:block">
                            LinkUp</h2>
                    </div>
                    <div class="hidden md:flex items-center gap-6">
                        <a class="text-[#111418] dark:text-white text-sm font-medium leading-normal hover:text-primary transition-colors flex items-center gap-2"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">home</span> Home
                        </a>
                        <a class="text-[#60708a] dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary transition-colors flex items-center gap-2"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">group</span> Network
                        </a>
                        <a class="text-[#60708a] dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary transition-colors flex items-center gap-2"
                            href="#">
                            <span class="material-symbols-outlined text-[20px]">notifications</span> Notifications
                        </a>
                    </div>
                </div>
                <div class="flex flex-1 justify-end gap-4 md:gap-8">
                    <label class="hidden sm:flex flex-col min-w-40 !h-10 max-w-64">
                        <div class="flex w-full flex-1 items-stretch rounded-xl h-full bg-[#f0f2f5] dark:bg-[#2a3441]">
                            <div
                                class="text-[#60708a] flex border-none items-center justify-center pl-4 rounded-l-xl border-r-0">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] dark:text-white focus:outline-0 focus:ring-0 border-none bg-transparent focus:border-none h-full placeholder:text-[#60708a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                placeholder="Search LinkUp" value="" />
                        </div>
                    </label>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-white dark:ring-[#1a222e] cursor-pointer"
                            data-alt="User profile picture thumbnail showing a smiling face"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuhMqIpvF7HI80K54_-XOhZIesdN0lA5f3pCyMb7tbYekW0MhLR7zE_4jLETNTjr-zi_BRp_KRStPnznQgYwQItAhv7WyM-wjlwJkGhOkBlOBXcmbO_kUyMzYRXQxSpMmS-L7X9i6kO0h_UOeTmFovn1CylwsLbmGJXX21OcVdGef21umjzOpoD_fE5zZDdyYNkZ2tBi1cMS40_5PLVmCZIqBAr8HsoqOnQL92DZ0QTZmeYebBhcLGzquf1lA4eSPmEtWJ716zC4Rx");'>
                        </button>
                    </form>
                </div>
            </header>
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
            {{ auth()->user()->name }}</h1>
        <p class="text-[#60708a] dark:text-gray-400 text-base font-normal leading-relaxed mt-2">
            Loving life, baking cookies, and hiking trails together. 🌲🍪✨<br />Based in
            Portland, OR.</p>

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

            <button
                class="flex items-center gap-2 border border-[#d1d5db] dark:border-[#4b5563] hover:bg-[#f9fafb] dark:hover:bg-[#2a3441] text-[#111418] dark:text-white px-5 py-2.5 rounded-lg font-bold text-sm transition-colors">
                <span class="material-symbols-outlined text-[20px]">edit</span>
                edit profile
            </button>
        </div>
    </div>
</div>


                    </div>
                </div>
            </main>
        </body>

        </html>
