@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-2">Jumlah ASN</h2>
            <p class="text-2xl font-bold">123</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-2">KGB Tahun Ini</h2>
            <p class="text-2xl font-bold">45</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold mb-2">KGB Selanjutnya</h2>
            <p class="text-2xl font-bold">78</p>
        </div>
    </div>
@endsection
