@extends('layouts.app')

@section('title','edit profile')

@section('content')
<div class="flex flex-col w-1/3 mx-auto my-10 rounded-xl bg-white dark:bg-[#1e2732] shadow-sm border border-[#e5e7eb] dark:border-[#2a3441] overflow-hidden">
    <div class="border-b border-[#f0f2f5] dark:border-[#2a3441] px-6 py-4">
        <h3 class="text-[#111418] dark:text-white text-lg font-bold">Edit Profile</h3>
        <p class="text-sm text-[#60708a] dark:text-gray-400">Update your public information and how people see you.</p>
    </div>

    <form action="{{ route('profile.update', ['user' => auth()->user()->id]) }}" method="POST" class="p-6 flex flex-col gap-5">
        @csrf
        @method('PUT')


        <div class="flex flex-col gap-2">
            <label class="text-sm font-bold text-[#111418] dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px]">badge</span>
                Full Name
            </label>
            <input
                type="text"
                name="name"
                value="{{ auth()->user()->name }}"
                class="w-full rounded-xl border-[#e5e7eb] dark:border-[#344052] bg-white dark:bg-[#1a222e] text-[#111418] dark:text-white focus:border-primary focus:ring-primary transition-all"
                placeholder="Enter your full name"
            />
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-sm font-bold text-[#111418] dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px]">alternate_email</span>
                Pseudo
            </label>
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-[#60708a]">@</span>
                <input
                    type="text"
                    name="pseudo"
                    value="anderson_fam"
                    class="w-full pl-8 rounded-xl border-[#e5e7eb] dark:border-[#344052] bg-white dark:bg-[#1a222e] text-[#111418] dark:text-white focus:border-primary focus:ring-primary transition-all"
                    placeholder="username"
                />
            </div>
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-sm font-bold text-[#111418] dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-[20px]">description</span>
                Bio
            </label>
            <textarea
                name="bio"
                rows="3"
                class="w-full rounded-xl border-[#e5e7eb] dark:border-[#344052] bg-white dark:bg-[#1a222e] text-[#111418] dark:text-white focus:border-primary focus:ring-primary transition-all resize-none"
                placeholder="Tell us a little about yourself..."
            >Loving life, baking cookies, and hiking trails together. 🌲</textarea>
        </div>

        <div class="flex items-center justify-end gap-3 pt-4 border-t border-[#f0f2f5] dark:border-[#2a3441] mt-2">
            <button type="button" class="px-4 py-2 text-sm font-bold text-[#60708a] dark:text-gray-400 hover:text-[#111418] dark:hover:text-white transition-colors">
                Cancel
            </button>
            <button type="submit" class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-bold text-sm transition-all shadow-md">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
