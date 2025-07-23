@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Riwayat KGB</h1>
        <a href="{{ route('kgb.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">
            + Tambah KGB
        </a>
    </div>

    <div class="bg-white shadow rounded overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">Nama ASN</th>
                    <th class="px-4 py-2 text-left">NIP</th>
                    <th class="px-4 py-2 text-left">Tanggal SK</th>
                    <th class="px-4 py-2 text-left">Gaji Lama</th>
                    <th class="px-4 py-2 text-left">Gaji Baru</th>
                    <th class="px-4 py-2 text-left">Golongan</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kgbs as $kgb)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $kgb->user->nama }}</td>
                        <td class="px-4 py-2">{{ $kgb->user->nip }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($kgb->tgl_sk)->format('d M Y') }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($kgb->gaji_lama, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($kgb->gaji_baru, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ $kgb->golongan }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('kgb.destroy', $kgb->id) }}" method="POST" onsubmit="return confirm('Hapus data?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
