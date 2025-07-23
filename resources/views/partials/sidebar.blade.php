<aside class="w-64 bg-white shadow-md hidden md:block">
    <div class="p-4 font-bold text-lg border-b">KGB ASN</div>
    <nav class="p-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Dashboard</a>
        <!-- Tambahkan menu lain jika perlu -->
        <a href="{{ route('asn.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Data ASN</a>
        <a href="{{ route('kgb.index') }}" class="block px-3 py-2 rounded hover:bg-gray-100">Riwayat KGB</a>
    </nav>
</aside>
