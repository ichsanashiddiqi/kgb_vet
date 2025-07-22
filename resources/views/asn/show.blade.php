@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Riwayat KGB - {{ $asn->name }}</h2>

    <div class="mb-4">
        <strong>NIP:</strong> {{ $asn->nip }} <br>
        <strong>Golongan:</strong> {{ $asn->golongan }} <br>
        <strong>Pangkat:</strong> {{ $asn->pangkat }}
    </div>

    <table class="table-auto w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2">Tanggal SK</th>
                <th class="px-4 py-2">Berlaku</th>
                <th class="px-4 py-2">No SK</th>
                <th class="px-4 py-2">Gaji Lama</th>
                <th class="px-4 py-2">Gaji Baru</th>
                <th class="px-4 py-2">Pejabat Penetap</th>
            </tr>
        </thead>
        <tbody>
            @forelse($asn->kgb as $kgb)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $kgb->tgl_sk }}</td>
                    <td class="px-4 py-2">{{ $kgb->tgl_berlaku }}</td>
                    <td class="px-4 py-2">{{ $kgb->no_sk }}</td>
                    <td class="px-4 py-2">{{ $kgb->gaji_lama }}</td>
                    <td class="px-4 py-2">{{ $kgb->gaji_baru }}</td>
                    <td class="px-4 py-2">{{ $kgb->pejabat_penetap }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-2 text-center text-gray-500">Belum ada data KGB</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
