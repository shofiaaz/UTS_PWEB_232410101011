<nav class="bg-orange-400 py-4 px-4 sm:px-8 flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0">
    <div class="flex gap-5 font-bold text-lg text-black">
        <a href="{{ route('profile', ['username' => $username]) }}"
           class="text-black hover:text-orange-600 no-underline {{ request()->routeIs('profile') ? 'text-white' : '' }}">
            <img src="{{ asset('image/profile.png') }}" alt="Profile" class="w-8 h-8 border border-black rounded-full">
        </a>
        Hi, {{ $username ?? 'Guest' }}!
    </div>
    <div class="flex space-x-6 font-bold">
        @if($username)
            <a href="{{ route('dashboard', ['username' => $username]) }}"
               class="text-black hover:text-orange-600 no-underline {{ request()->routeIs('dashboard') ? 'text-white' : '' }}">
               Dashboard
            </a>
            <a href="{{ route('product', ['username' => $username]) }}"
               class="text-black hover:text-orange-600 no-underline {{ request()->routeIs('product') ? 'text-white' : '' }}">
               Product
            </a>
            <a href="{{ route('logout', ['username' => $username]) }}"
               class="text-black hover:text-red-600 no-underline">
               Logout
            </a>
        @else
            <a href="{{ route('login') }}"
               class="text-black hover:text-orange-600 no-underline">
               Login
            </a>
        @endif
    </div>
</nav>
