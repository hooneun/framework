{{-- <div class="flex p-5 lg:space-x-10 bg-red-600">
    <div class="ml-auto">
        <div class="">
            <img src="{{ Auth::guard('admin')->user()->image_path_url }}"
class="h-10 w-10 inline rounded-full"
alt="{{ Auth::guard('admin')->user()->full_name }}" />
<span class="text-white font-bold">{{ Auth::guard('admin')->user()->full_name }}</span>
</div>
</div>
</div> --}}

<div class="flex p-3 shadow lg:space-x-10 bg-red-600">
    <div x-data="{ dropdownOpen: false }" class="ml-auto relative">
        <div x-on:click="dropdownOpen = !dropdownOpen" class="relative flex items-center cursor-pointer">

            <img src="{{ Auth::guard('admin')->user()->image_path_url }}"
                class="h-10 w-10 rounded-full"
                alt="{{ Auth::guard('admin')->user()->full_name }}" />
            <span class="text-white ml-1 font-bold">{{ Auth::guard('admin')->user()->full_name }}</span>

            <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>

        </div>

        <div x-show="dropdownOpen" x-on:click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div x-show="dropdownOpen" x-transition.duration.300ms class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 rounded hover:text-white">
                your profile
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 rounded hover:text-white">
                Your projects
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 rounded hover:text-white">
                Help
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 rounded hover:text-white">
                Settings
            </a>
            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-red-500 rounded hover:text-white">
                {{ __('avored::system.logout') }}
            </a>
        </div>
    </div>
</div>
