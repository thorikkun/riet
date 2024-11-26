<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santris = Santri::with('user')->get();
        return view('santris.index', compact('santris'));
    }

    public function create()
    {
        return view('santris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'nama_kamar' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        Santri::create($request->all());

        return redirect()->route('santris.index')->with('success', 'Santri berhasil ditambahkan.');
    }

    public function edit(Santri $santri)
    {
        return view('santris.edit', compact('santri'));
    }

    public function update(Request $request, Santri $santri)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'nama_kamar' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $santri->update($request->all());

        return redirect()->route('santris.index')->with('success', 'Santri berhasil diperbarui.');
    }

    public function destroy(Santri $santri)
    {
        $santri->delete();
        return redirect()->route('santris.index')->with('success', 'Santri berhasil dihapus.');
    }
}
