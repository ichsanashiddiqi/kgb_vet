@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Data ASN</h1>
        <a href="{{ route('asn.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
            + Tambah ASN
        </a>
    </div>

    <!-- Tabel ASN -->
    <div class="bg-white shadow rounded overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">NIP</th>
                    <th class="px-4 py-2 text-left">Golongan</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($asns as $asn)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $asn->name }}</td>
                        <td class="px-4 py-2">{{ $asn->nip }}</td>
                        <td class="px-4 py-2">{{ $asn->golongan }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('asn.show', $asn->id) }}" class="text-blue-600 hover:underline">Lihat</a>
                            <a href="{{ route('asn.edit', $asn->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('asn.destroy', $asn->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline"
                                    onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-4 py-4 text-center text-gray-500">Data belum tersedia.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
