<?php

namespace App\Http\Controllers;

use App\Models\Kgb;
use App\Models\User;
use Illuminate\Http\Request;

class KgbController extends Controller
{
    public function index()
    {
        $kgbs = Kgb::with('asn')->latest()->get();
        return view('kgb.index', compact('kgbs'));
    }

    public function create()
    {
        $asns = User::all();
        return view('kgb.create', compact('asns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tgl_kgb' => 'required|date',
            'gaji_lama' => 'required|numeric',
            'gaji_baru' => 'required|numeric',
            'sk_kgb' => 'nullable|string',
        ]);

        Kgb::create($validated);
        return redirect()->route('kgb.index')->with('success', 'Data KGB berhasil ditambahkan.');
    }

    public function show(Kgb $kgb)
    {
        return view('kgb.show', compact('kgb'));
    }

    public function edit(Kgb $kgb)
    {
        $asns = User::all();
        return view('kgb.edit', compact('kgb', 'asns'));
    }

    public function update(Request $request, Kgb $kgb)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tgl_kgb' => 'required|date',
            'gaji_lama' => 'required|numeric',
            'gaji_baru' => 'required|numeric',
            'sk_kgb' => 'nullable|string',
        ]);

        $kgb->update($validated);
        return redirect()->route('kgb.index')->with('success', 'Data KGB berhasil diperbarui.');
    }

    public function destroy(Kgb $kgb)
    {
        $kgb->delete();
        return redirect()->route('kgb.index')->with('success', 'Data KGB berhasil dihapus.');
    }
}
