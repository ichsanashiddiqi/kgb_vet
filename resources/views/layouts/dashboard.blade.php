<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - KGB ASN</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">

<div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-4 text-lg font-semibold border-b">
            KGB ASN
        </div>
        <nav class="p-4 space-y-2">
            <a href="/dashboard" class="block py-2 px-3 rounded hover:bg-gray-200">Dashboard</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-200">Data ASN</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-200">Riwayat KGB</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-gray-200">Logout</a>
        </nav>
    </aside>

    <!-- Content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Dashboard</h1>
            
            {{-- <div class="text-sm text-gray-600">Hi, {{ Auth::user()->name }}</div> --}}
            <div x-data="{ open: false }" class="relative text-sm text-gray-600">
                <button @click="open = !open" class="flex items-center gap-2 focus:outline-none hover:text-black">
                    Hi, {{ Auth::user()->name }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

        <!-- Dropdown -->
            <div x-show="open" @click.outside="open = false" class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg border z-10">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Edit Profil</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
            </div>
        

        </header>

        <!-- Main Content -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>
