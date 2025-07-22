@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Edit ASN</h2>

<form action="{{ route('asn.update', $asn->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <x-input label="Nama" name="name" value="{{ $asn->name }}" required />
    <x-input label="NIP" name="nip" value="{{ $asn->nip }}" required />
    <x-input label="Email" name="email" type="email" value="{{ $asn->email }}" required />
    <x-input label="Pangkat" name="pangkat" value="{{ $asn->pangkat }}" />
    <x-input label="Golongan" name="golongan" value="{{ $asn->golongan }}" />
    <x-input label="TMT CPNS" name="tmt_cpns" type="date" value="{{ $asn->tmt_cpns }}" />

    <button class="bg-blue-600 text-white px-4 py-2 rounded" type="submit">Update</button>
</form>
@endsection
