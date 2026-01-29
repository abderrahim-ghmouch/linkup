<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LinkUp | Fire Profile &amp; Friends List</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&amp;family=Outfit:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "hot-burgundy": "#4a0404",
                        "hot-red": "#ff2e2e",
                        "hot-orange": "#ff8c00",
                        "hot-purple": "#800080",
                        "hot-magenta": "#d90082",
                        "dark-bg": "#0a0a0a",
                        "card-dark": "#161616",
                        "text-main": "#ffffff",
                        "text-light": "#e5e5e5",
                    },
                    fontFamily: {
                        "sans": ["Plus Jakarta Sans", "sans-serif"],
                        "heading": ["Outfit", "sans-serif"],
                    },
                    borderRadius: {
                        'xl': '1.25rem',
                        '2xl': '1.5rem',
                        '3xl': '2rem',
                    }
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-dark-bg text-text-main antialiased;
            }
        }

        .sunset-gradient {
            background: linear-gradient(135deg, #ff4e50 0%, #f9d423 100%);
        }

        .vibrant-banner {
            background: linear-gradient(45deg, #ff0000, #ff8c00, #800080);
            background-size: 200% 200%;
        }

        .glow-orange {
            box-shadow: 0 0 15px rgba(255, 140, 0, 0.5);
        }

        .glow-magenta {
            box-shadow: 0 0 15px rgba(217, 0, 130, 0.4);
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-dark-bg font-sans">
    <header class="fixed top-0 z-[100] w-full bg-hot-burgundy shadow-2xl border-b border-white/5">
        <div class="max-w-[1440px] mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-12 flex-1">
                <div class="flex items-center gap-2 cursor-pointer">
                    <div
                        class="size-9 bg-hot-orange flex items-center justify-center rounded-xl shadow-lg shadow-orange-900/40">
                        <span
                            class="material-symbols-outlined text-hot-burgundy text-xl font-bold">local_fire_department</span>
                    </div>
                    <h2 class="text-white text-xl font-bold font-heading tracking-tight">LinkUp</h2>
                </div>
                <div class="hidden md:flex flex-1 max-w-sm">
                    <div class="relative w-full">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-white/60 text-xl">search</span>
                        <input
                            class="w-full h-11 pl-12 pr-4 bg-white/10 border-none rounded-2xl focus:ring-2 focus:ring-hot-orange/50 text-sm placeholder:text-white/40 text-white transition-all"
                            placeholder="Find connections..." type="text" />
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-8">
                <nav class="hidden lg:flex items-center gap-8">
                    <a class="text-white font-bold text-sm transition-colors hover:text-hot-orange"
                        href="#">Home</a>
                    <a class="text-white/80 hover:text-white font-medium text-sm transition-colors"
                        href="#">Network</a>
                    <a class="text-white/80 hover:text-white font-medium text-sm transition-colors" href="#">Fire
                        Feed</a>
                </nav>
                <div class="flex items-center gap-4">
                    <button
                        class="size-10 flex items-center justify-center text-white hover:bg-white/10 rounded-full transition-colors relative">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 size-2 bg-hot-red rounded-full"></span>
                    </button>
                    <div class="size-10 rounded-full bg-cover bg-center border-2 border-hot-orange cursor-pointer"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCU64m3NZsLXqQEQt4h6EWud055s34hy8soFuzZ3WNSsF1C1_abaPCO6SS1Ycv0I7p1gtYkpqtJxcHBaOiZ6ZR-ukIq0_iz11b3Oim-Y2rYGynobq9GfXS4GjEJ4gG1OWeOqKpElA3Gw-jjX_hL4Of0EczT_0mIdeGgozl34HsWGK62yHtZApeqPRVZQjZ9VnHFmlRtx5TUsIPgzTXS6gXEQ98VkJjtPlR85JGBLCqxO0eeU_L_LY7SZmpMQHwYzRJzuUL6ljYX_rrQ");'>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full pt-[68px]">
        <div class="relative h-[280px] w-full vibrant-banner overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat mix-blend-overlay opacity-60"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAoL8HKey9QiBNRKTiPAgJ8I4ovt0kLqG8F86BVLWc2NgQMNeCrjglSAAH4_R98cBIHRvITcKlflqY5X5hjSoUKiUn6z_JOp5E1EwLUANsv5NGyY4QHDyUGkDSZH7FbdA15_yK6szGa-jeJIqP7_AjPS4cVAP2t-qx6wD-DD_hv1z8IrONU71BDE1N3MRKjOMvHIxjVxIRsJcvA2KF1Zx6u9Xvde1622bccFtwjdAsfe0ylvDNgGeDObHclnDwcuQcHR5sop15l61P-");'>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-dark-bg via-transparent to-transparent"></div>
        </div>
        <div class="max-w-[1440px] mx-auto px-6 relative">
            <div class="flex flex-col lg:flex-row items-start gap-8 -mt-20">
                <div class="w-full lg:w-[360px] space-y-6 flex flex-col shrink-0">
                    <div class="bg-card-dark p-8 rounded-3xl border border-white/10 shadow-2xl">
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="size-36 rounded-full border-4 border-hot-orange glow-orange overflow-hidden mb-6 relative">
                                <div class="w-full h-full bg-cover bg-center"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDOSmYxRXFuSKtKXWplDi2MJe52rZ2ebuKobQAq0ESy7Xq3FnkxYldmyPjWQu0kUSN7bZDCcXF4Hhl9EHjwuzOS9_UvSODv0SNHPvsw8P8m4D9eHToeoK5apt_Bp5GZjB5rjU8_aP5guaM-pC-3xDuUlC3viQPlqqklEPXpevhRMD-fnvqTEjoC79uVkWzpjp2axqLkEcOXzqI-c7f0VmOEiGtDiwKrzptSOZ7nJP8Y9taSmT21b7WBX3x8y5W4DWQ0wYufXIohy0Vg");'>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold text-white font-heading mb-1">Alex Rivers</h1>
                            <p class="text-hot-magenta font-semibold text-xs mb-4 uppercase tracking-[0.2em]">Creative
                                Pioneer • NYC</p>
                            <p class="text-text-light text-sm leading-relaxed mb-8">
                                Digital Architect specializing in high-energy interfaces and social systems. Igniting
                                the intersection of community and technology.
                            </p>
                            <div class="flex flex-col gap-3 w-full">
                                <button
                                    class="w-full bg-hot-red text-white py-3.5 rounded-2xl font-bold text-xs uppercase tracking-wider hover:bg-hot-red/80 transition-all shadow-lg shadow-hot-red/20 flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined text-sm">edit</span> Edit Profile
                                </button>
                                <button
                                    class="w-full bg-white/5 border border-white/10 text-white py-3.5 rounded-2xl font-bold text-xs uppercase tracking-wider hover:bg-white/10 transition-all">
                                    Settings
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3">
                        <div
                            class="sunset-gradient p-4 rounded-2xl text-center shadow-lg transform hover:scale-105 transition-transform cursor-default">
                            <p class="text-[9px] text-white/90 font-bold uppercase tracking-widest mb-1">Posts</p>
                            <p class="text-xl font-black text-white">124</p>
                        </div>
                        <div
                            class="sunset-gradient p-4 rounded-2xl text-center shadow-lg transform hover:scale-105 transition-transform cursor-default">
                            <p class="text-[9px] text-white/90 font-bold uppercase tracking-widest mb-1">Mutual</p>
                            <p class="text-xl font-black text-white">52</p>
                        </div>
                        <div
                            class="sunset-gradient p-4 rounded-2xl text-center shadow-lg transform hover:scale-105 transition-transform cursor-default">
                            <p class="text-[9px] text-white/90 font-bold uppercase tracking-widest mb-1">Network</p>
                            <p class="text-xl font-black text-white">850</p>
                        </div>
                    </div>
                    <div class="bg-card-dark p-6 rounded-3xl border border-white/10">
                        <h3 class="text-xs font-black text-hot-orange uppercase tracking-widest mb-4">Personal Info</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 text-sm">
                                <span class="material-symbols-outlined text-hot-magenta">location_on</span>
                                <span class="text-text-light">Manhattan, NY</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm">
                                <span class="material-symbols-outlined text-hot-magenta">language</span>
                                <span class="text-text-light">rivers.design</span>
                            </div>
                            <div class="flex items-center gap-4 text-sm">
                                <span class="material-symbols-outlined text-hot-magenta">event_available</span>
                                <span class="text-text-light">Joined Oct 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 w-full pb-20 space-y-8">
                    <div class="bg-card-dark rounded-3xl border border-white/10 p-8 shadow-xl">
                        <div class="flex items-center justify-between mb-8">
                            <div>
                                <h2 class="text-xl font-bold text-white font-heading">Mutual Connections</h2>
                                <p class="text-white/50 text-xs mt-1">Friends you both know</p>
                            </div>
                            <button
                                class="text-hot-orange text-xs font-black uppercase tracking-widest hover:underline">View
                                All</button>
                        </div>
                        <div class="flex gap-6 overflow-x-auto pb-4 hide-scrollbar">
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB3xppwzrUgXmDADgm4QZBjdUfUrHfhlG8SGOPmyx3QQ2jJfcy4yUmzwwOxpeXWhVXB7sJOqg46SS629IuQmPwjNmXPycJcAG4KBxL-FbdnrJqj9oVM2gA19tqPJJfooUuRR3YONV8dVYk0X5eFiQRwVWy_c1-PkRCgNL2ZvgcxYa5H_BBFYhyoP9FGuh6-TKZq734vyhZPcDO4mD-rjg4vQl0quSHYnPTHt2dqdnEme0jjiSzbn8zfp8s097p_picYIYHxLtLceHRU");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Sarah K.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCEHlEIvRrfNKwDc9JIPS2pRBiduY3errHOydxKs25YWSZnYfPyRTGVlhEQXZij9rp40cv619vZVBHnIbyDm440R1SIAR4xXabxGvSoTJnkEitHGTfrmnMydpBFVb2kWfgkCN7fhoYnvpi-aQbQiq3J3mGqJHEX3L8OBt12X7wT-nn7GETsGic6csj46U-e2nera_E0y7xOMMkS0jS7VdJora7f6hPodnLnQ9cVEKcC6PNvQ4jV-LRYkMfwgjPF3JepOwtclqYoComK");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Jordan M.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp2JTJLWS3o8rHx8zpmhkvOYzAu6oE40MIx_RwbQqQ7cROdfQD7KLB9x5q-PxGFW_Dd2njgmnJQEBBgeWyCnB1krRxMxDEvWh7H1e9svWEus4B9uA350r59jUz2Hzj99Qk2CQnnCcPpq2H0_HEjfo2me83wDU-VZTM1mXQsdY85epVcM-_ISKbODBDkCpupdjyMH3CADLT5zWQ7q0sJqi9WNt2ml78nxVk1VhyGYCxGyO95aMCxJHWhq3OfXmsqVoV0Chp3q1Za3if");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Elena V.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDW6EhUAMVloVn-K_dnBu38PiSEcM8IwyfyLkvAh11svt3E9K47VlfSbhaxY0AyTvTtUXmImCLIHbDcemY5XEdmnrB9vgXteTehn6SZb4PiSt_7ZxAxFCO69unf0cSX1r9X0vaPzc_NjskyT8bpxSxRsEjOkyeTZe2mz1YaAlUXIIwhozp4DClopnbMs6VNs_UpjegphTkG2Y40U1m4_M0X3aedkeVQGsIuGKToRDIss1Yz4Z0JKKmX_jeZOExNRGdMZAZlpw-XugM5");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Marcus R.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLI4zmWEFSDz1HK7whtz4FjOW9lCyeTan7XW1qXBIb45AsswhX4gQvh8mZaZC9a0qRRBkXSW0U-8F79mG8KB6mt9M36rm7Yhsjg60gdWM7-WeQjYDdIIxs7YyTLR2vBZAS-naH0jckSLeLHun70l08Dt3rDCDPp1GJ4enzAerYaIGzAG7-lSWbfJr2r-CV0YJcJtEXAeTDJWlc--gdSsgbQvK2u0nEmUeQKIRWm5dEqQF4VFNB1jncCzAqoytMOC_bsn4g6_zm94qK");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Taylor S.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full p-1 border-2 border-hot-orange glow-orange group-hover:scale-110 transition-transform">
                                    <div class="w-full h-full rounded-full bg-cover bg-center"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1oIcdKqkTWkWnOmuoC2Sb8_fqVycQNoJvbOMBhFGXrT8QRW5LGmwwY3RUjZrZCOFTElxAZa9HW0bfWTiyOI8vSXUj-snZOfyelV6sjCN5vQ2UVaaTeoXNx80PAyp3US3c3iZHIKCObqyDQN1sM_1InYaSPG1Ar3SPv17LMyQZqR9i8N4UZwGoaNNgfmn1t3h6J6JNMZj1dMiQFNgjn58weVSaqt3n7vIhy41qkPfHAZdp_nK3ILKKPcEYK759FFLxWaCg59h3YACl");'>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-white/90">Chris L.</span>
                            </div>
                            <div class="flex flex-col items-center gap-3 shrink-0 group cursor-pointer">
                                <div
                                    class="size-20 rounded-full border-2 border-dashed border-white/20 flex items-center justify-center hover:border-hot-orange transition-colors">
                                    <span class="material-symbols-outlined text-white/40">add</span>
                                </div>
                                <span class="text-xs font-bold text-white/40">Invite</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-card-dark rounded-3xl border border-white/10 p-8">
                        <div class="flex items-center justify-between mb-10 border-b border-white/5 pb-6">
                            <div class="flex gap-8">
                                <a class="pb-1 border-b-2 border-hot-red text-white text-sm font-black transition-all"
                                    href="#">All Friends (850)</a>
                                <a class="text-white/40 hover:text-white text-sm font-bold transition-colors"
                                    href="#">Following</a>
                                <a class="text-white/40 hover:text-white text-sm font-bold transition-colors"
                                    href="#">Followers</a>
                            </div>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-white/30 text-lg">filter_list</span>
                                <select
                                    class="bg-white/5 border-none rounded-xl pl-10 pr-8 py-2 text-xs font-bold text-white/70 focus:ring-1 focus:ring-hot-orange outline-none appearance-none">
                                    <option>Recently Added</option>
                                    <option>A-Z</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB3xppwzrUgXmDADgm4QZBjdUfUrHfhlG8SGOPmyx3QQ2jJfcy4yUmzwwOxpeXWhVXB7sJOqg46SS629IuQmPwjNmXPycJcAG4KBxL-FbdnrJqj9oVM2gA19tqPJJfooUuRR3YONV8dVYk0X5eFiQRwVWy_c1-PkRCgNL2ZvgcxYa5H_BBFYhyoP9FGuh6-TKZq734vyhZPcDO4mD-rjg4vQl0quSHYnPTHt2dqdnEme0jjiSzbn8zfp8s097p_picYIYHxLtLceHRU");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-green-500 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Sarah Jenkins</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">
                                            Creative Director</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCEHlEIvRrfNKwDc9JIPS2pRBiduY3errHOydxKs25YWSZnYfPyRTGVlhEQXZij9rp40cv619vZVBHnIbyDm440R1SIAR4xXabxGvSoTJnkEitHGTfrmnMydpBFVb2kWfgkCN7fhoYnvpi-aQbQiq3J3mGqJHEX3L8OBt12X7wT-nn7GETsGic6csj46U-e2nera_E0y7xOMMkS0jS7VdJora7f6hPodnLnQ9cVEKcC6PNvQ4jV-LRYkMfwgjPF3JepOwtclqYoComK");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-green-500 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Jordan Miller</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">Motion
                                            Artist</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBp2JTJLWS3o8rHx8zpmhkvOYzAu6oE40MIx_RwbQqQ7cROdfQD7KLB9x5q-PxGFW_Dd2njgmnJQEBBgeWyCnB1krRxMxDEvWh7H1e9svWEus4B9uA350r59jUz2Hzj99Qk2CQnnCcPpq2H0_HEjfo2me83wDU-VZTM1mXQsdY85epVcM-_ISKbODBDkCpupdjyMH3CADLT5zWQ7q0sJqi9WNt2ml78nxVk1VhyGYCxGyO95aMCxJHWhq3OfXmsqVoV0Chp3q1Za3if");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-white/20 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Elena Vance</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">UX
                                            Specialist</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDW6EhUAMVloVn-K_dnBu38PiSEcM8IwyfyLkvAh11svt3E9K47VlfSbhaxY0AyTvTtUXmImCLIHbDcemY5XEdmnrB9vgXteTehn6SZb4PiSt_7ZxAxFCO69unf0cSX1r9X0vaPzc_NjskyT8bpxSxRsEjOkyeTZe2mz1YaAlUXIIwhozp4DClopnbMs6VNs_UpjegphTkG2Y40U1m4_M0X3aedkeVQGsIuGKToRDIss1Yz4Z0JKKmX_jeZOExNRGdMZAZlpw-XugM5");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-green-500 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Marcus Reed</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">Project
                                            Lead</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLI4zmWEFSDz1HK7whtz4FjOW9lCyeTan7XW1qXBIb45AsswhX4gQvh8mZaZC9a0qRRBkXSW0U-8F79mG8KB6mt9M36rm7Yhsjg60gdWM7-WeQjYDdIIxs7YyTLR2vBZAS-naH0jckSLeLHun70l08Dt3rDCDPp1GJ4enzAerYaIGzAG7-lSWbfJr2r-CV0YJcJtEXAeTDJWlc--gdSsgbQvK2u0nEmUeQKIRWm5dEqQF4VFNB1jncCzAqoytMOC_bsn4g6_zm94qK");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-white/20 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Taylor Swiftly</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">Brand
                                            Stylist</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                            <div
                                class="bg-white/5 p-5 rounded-2xl border border-white/5 hover:border-hot-magenta/30 hover:bg-white/[0.08] transition-all group">
                                <div class="flex items-center gap-4 mb-5">
                                    <div class="relative">
                                        <div class="size-14 rounded-full bg-cover bg-center"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1oIcdKqkTWkWnOmuoC2Sb8_fqVycQNoJvbOMBhFGXrT8QRW5LGmwwY3RUjZrZCOFTElxAZa9HW0bfWTiyOI8vSXUj-snZOfyelV6sjCN5vQ2UVaaTeoXNx80PAyp3US3c3iZHIKCObqyDQN1sM_1InYaSPG1Ar3SPv17LMyQZqR9i8N4UZwGoaNNgfmn1t3h6J6JNMZj1dMiQFNgjn58weVSaqt3n7vIhy41qkPfHAZdp_nK3ILKKPcEYK759FFLxWaCg59h3YACl");'>
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 size-3.5 bg-green-500 border-2 border-card-dark rounded-full">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-white group-hover:text-hot-orange transition-colors">
                                            Chris Logan</h4>
                                        <p class="text-white/40 text-[11px] uppercase tracking-wider font-bold">Lead
                                            Developer</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex-1 bg-hot-magenta text-white py-2.5 rounded-xl font-bold text-[10px] uppercase tracking-widest hover:brightness-110 transition-all">Message</button>
                                    <button
                                        class="px-3 bg-white/5 hover:bg-white/10 text-white rounded-xl transition-all">
                                        <span class="material-symbols-outlined text-sm">more_horiz</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 flex justify-center">
                            <button
                                class="bg-hot-orange/10 border-2 border-hot-orange text-hot-orange hover:bg-hot-orange hover:text-white px-12 py-4 rounded-2xl font-black text-sm tracking-widest uppercase transition-all shadow-lg shadow-hot-orange/20">
                                Load More Friends
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-12 bg-hot-burgundy border-t border-white/5">
        <div class="max-w-[1440px] mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex items-center gap-2">
                <div class="size-7 bg-hot-orange flex items-center justify-center rounded-lg">
                    <span
                        class="material-symbols-outlined text-hot-burgundy text-base font-bold">local_fire_department</span>
                </div>
                <h2 class="text-white text-base font-bold font-heading">LinkUp</h2>
            </div>
            <p class="text-xs text-white/50 font-medium">
                © 2024 High-Energy Collective. Fueling the social fire.
            </p>
            <div class="flex gap-8 text-white/50">
                <a class="hover:text-hot-orange transition-colors text-xs font-bold uppercase tracking-widest"
                    href="#">Privacy</a>
                <a class="hover:text-hot-orange transition-colors text-xs font-bold uppercase tracking-widest"
                    href="#">Terms</a>
                <a class="hover:text-hot-orange transition-colors text-xs font-bold uppercase tracking-widest"
                    href="#">Contact</a>
            </div>
        </div>
    </footer>

</body>

</html>
