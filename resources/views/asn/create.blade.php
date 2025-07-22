@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Tambah ASN</h2>

@if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
        <ul class="list-disc ml-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('asn.store') }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-4">
    @csrf

    <div>
        <label class="block">Nama</label>
        <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block">NIP</label>
        <input type="text" name="nip" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block">Email</label>
        <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block">Pangkat</label>
        <input type="text" name="pangkat" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block">Golongan</label>
        <input type="text" name="golongan" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block">TMT CPNS</label>
        <input type="date" name="tmt_cpns" class="w-full border rounded px-3 py-2">
    </div>

    <div>
        <label class="block">Password</label>
        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
        <label class="block">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="text-right">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </div>
</form>
@endsection
