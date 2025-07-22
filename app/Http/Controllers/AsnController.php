<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AsnController extends Controller
{
    public function index()
    {
        $asns = User::orderBy('name')->get();
        return view('asn.index', compact('asns'));
    }

    public function create()
    {
        return view('asn.create');
    }

    public function show($id)
    {
        $asn = User::with('kgb')->findOrFail($id);
        return view('asn.show', compact('asn'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nip' => 'required|unique:users,nip',
            'email' => 'required|email|unique:users,email',
            'pangkat' => 'nullable',
            'golongan' => 'nullable',
            'tmt_cpns' => 'nullable|date',
            'password' => 'required|min:6|confirmed',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);
        return redirect()->route('asn.index')->with('success', 'ASN berhasil ditambahkan.');
    }

     public function edit(User $asn)
    {
        return view('asn.edit', compact('asn'));
    }

     public function update(Request $request, User $asn)
    {
        $validated = $request->validate([
            'name' => 'required',
            'nip' => 'required|unique:users,nip,' . $asn->id,
            'email' => 'required|email|unique:users,email,' . $asn->id,
            'pangkat' => 'nullable',
            'golongan' => 'nullable',
            'tmt_cpns' => 'nullable|date',
        ]);

        $asn->update($validated);
        return redirect()->route('asn.index')->with('success', 'Data ASN diperbarui.');
    }

     public function destroy(User $asn)
    {
        $asn->delete();
        return back()->with('success', 'ASN dihapus.');
    }
}
