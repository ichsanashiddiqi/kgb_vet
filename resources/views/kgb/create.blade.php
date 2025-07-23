@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto">
        <h2 class="text-xl font-semibold mb-4">Tambah Riwayat KGB</h2>

        <form action="{{ route('kgb.store') }}" method="POST" class="bg-white shadow p-6 rounded space-y-4">
            @csrf

            <!-- Pilih ASN -->
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">Pilih ASN</label>
                <select name="user_id" id="user_id" required class="w-full border border-gray-300 rounded px-3 py-2">
                    <option value="">-- Pilih ASN --</option>
                    @foreach ($asns as $asn)
                        <option value="{{ $asn->id }}">{{ $asn->nama }} ({{ $asn->nip }})</option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal SK -->
            <div>
                <label for="tgl_sk" class="block text-sm font-medium text-gray-700">Tanggal SK</label>
                <input type="date" name="tgl_sk" id="tgl_sk" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Tanggal Berlaku -->
            <div>
                <label for="tgl_mulai_berlaku" class="block text-sm font-medium text-gray-700">Tanggal Mulai Berlaku</label>
                <input type="date" name="tgl_mulai_berlaku" id="tgl_mulai_berlaku" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Gaji Lama -->
            <div>
                <label for="gaji_lama" class="block text-sm font-medium text-gray-700">Gaji Lama</label>
                <input type="number" name="gaji_lama" id="gaji_lama" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Gaji Baru -->
            <div>
                <label for="gaji_baru" class="block text-sm font-medium text-gray-700">Gaji Baru</label>
                <input type="number" name="gaji_baru" id="gaji_baru" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Nomor SK -->
            <div>
                <label for="no_sk" class="block text-sm font-medium text-gray-700">Nomor SK</label>
                <input type="text" name="no_sk" id="no_sk" class="w-full border rounded px-3 py-2">
            </div>

            <!-- Golongan (opsional) -->
            <div>
                <label for="golongan" class="block text-sm font-medium text-gray-700">Golongan</label>
                <input type="text" name="golongan" id="golongan" class="w-full border rounded px-3 py-2">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
