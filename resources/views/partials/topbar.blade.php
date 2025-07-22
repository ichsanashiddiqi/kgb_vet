<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-semibold">Dashboard</h1>

    <div class="relative inline-block text-left">
        <button type="button" class="flex items-center space-x-2 hover:text-blue-600" id="user-menu-btn">
            <span>Hi, {{ Auth::user()->name }}</span>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5.25 7.75L10 12.5l4.75-4.75H5.25z" />
            </svg>
        </button>

        <div class="hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg z-50 border" id="user-dropdown">
            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Edit Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('user-menu-btn').addEventListener('click', function () {
            const dropdown = document.getElementById('user-dropdown');
            dropdown.classList.toggle('hidden');
        });
    </script>
</header>
