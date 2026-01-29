<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LinkUp - Welcome Back</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            mint: '#8CE3C6', // Matching top-left blob and button
                            peach: '#F8DCC4', // Matching bottom-right blob
                            darkblue: '#1A2B45', // Text color
                            inputbg: '#ECF1F6', // Input field background
                            linkupblue: '#4A90E2' // Approximate blue for outline/focus
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <style data-purpose="background-shapes">
        body {
            overflow-x: hidden;
        }

        .blob-mint {
            position: absolute;
            top: -150px;
            left: -100px;
            width: 600px;
            height: 600px;
            background-color: #A0E8AF;
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            z-index: -1;
            opacity: 0.9;
        }

        .blob-peach {
            position: absolute;
            bottom: -200px;
            right: -150px;
            width: 800px;
            height: 800px;
            background-color: #FAD4B5;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            z-index: -1;
        }

        .custom-input:focus-within {
            border: 2px solid #89CFF0;
            background-color: #E8F0F8;
        }
    </style>
</head>

<body class="font-sans antialiased text-slate-800 min-h-screen flex flex-col relative bg-white">
    <div class="blob-mint"></div>
    <div class="blob-peach"></div>
    <header class="w-full p-8 flex items-center absolute top-0 left-0 z-10">
        <div class="flex items-center gap-3" data-purpose="logo">
            <div class="w-8 h-8 flex items-center justify-center rounded-md shadow-sm"
                style="background-color: #FDD835;">
                <i class="fa-solid fa-bolt text-black text-sm"></i>
            </div>
            <span class="text-xl font-bold italic tracking-wide uppercase"
                style="color: #37474F; font-style: italic; font-weight: 800;">LINKUP</span>
        </div>
    </header>
    <main class="flex-grow flex items-center justify-center p-4 py-20 z-10">
        <section class="bg-white rounded-3xl shadow-xl w-full max-w-md p-8 md:p-12 pb-12" data-purpose="login-card">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2 text-[#102A43]">Welcome Back</h1>
                <p class="text-gray-500 text-sm">Sign in to stay connected.</p>
            </div>
            <form action={{route( 'login') }} class="space-y-5" method="POST">
                @csrf
                <div class="group">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1 ml-1"
                        for="email">Email</label>
                    <div
                        class="custom-input flex items-center rounded-lg px-4 py-3 transition-colors border border-transparent bg-[#F3F4F6]">
                        <i class="fa-solid fa-at text-gray-400 w-5 text-center mr-3 opacity-50"></i>
                        <input
                            class="bg-transparent border-none focus:ring-0 w-full text-brand-darkblue placeholder-gray-400 p-0 text-sm"
                            id="email" name="email" placeholder="john.doe@linkup.io" type="email" />
                    </div>
                </div>
                <div class="group">
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1 ml-1"
                        for="password">Password</label>
                    <div
                        class="custom-input flex items-center rounded-lg px-4 py-3 transition-colors border border-transparent bg-[#F3F4F6]">
                        <i class="fa-solid fa-key text-gray-400 w-5 text-center mr-3 opacity-50"></i>
                        <input
                            class="bg-transparent border-none focus:ring-0 w-full text-brand-darkblue placeholder-gray-400 p-0 text-sm tracking-widest"
                            id="password" name="password" placeholder="••••••••" type="password" />
                    </div>
                </div>
                <div class="pt-2">
                    <button
                        class="w-full bg-[#4CAF50] hover:bg-[#43A047] text-white font-semibold py-3.5 px-4 rounded-full transition duration-300 shadow-md"
                        type="submit">
                        Log In
                    </button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-500">
                        New to LinkUp? <a class="text-brand-darkblue font-semibold hover:underline" href="{{ route('register') }}">Join
                            the Family</a>
                    </p>
                </div>
            </form>
        </section>
    </main>
    <footer
        class="w-full p-6 md:p-8 flex flex-col md:flex-row justify-between items-center text-[10px] md:text-xs text-gray-400 font-semibold uppercase relative z-10 tracking-widest text-xs text-gray-500">
        <div class="flex gap-6 mb-4 md:mb-0">
            <a class="hover:text-gray-600 transition-colors" href="#">Privacy</a>
            <a class="hover:text-gray-600 transition-colors" href="#">Terms</a>
            <a class="hover:text-gray-600 transition-colors" href="#">Help</a>
        </div>
        <div class="text-center md:text-right">
            © 2024 LinkUp. Stay Fueled. Stay Connected.
        </div>
    </footer>
</body>

</html>
