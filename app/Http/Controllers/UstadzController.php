<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ustadz;

class UstadzController extends Controller
{
    // Menampilkan daftar data
    public function index()
    {
        $ustadzs = Ustadz::all();
        return view('ustadzs.index', compact('ustadzs'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('ustadzs.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:ustadzs',
            'password' => 'required|string|min:8',
        ]);

        Ustadz::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'isAdmin' => $request->isAdmin ?? 0,
        ]);

        return redirect()->route('ustadzs.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menampilkan detail data
    public function show(Ustadz $ustadz)
    {
        return view('ustadzs.show', compact('ustadz'));
    }

    // Menampilkan form untuk edit data
    public function edit(Ustadz $ustadz)
    {
        return view('ustadzs.edit', compact('ustadz'));
    }

    // Mengupdate data
    public function update(Request $request, Ustadz $ustadz)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:ustadzs,email,' . $ustadz->id,
        ]);

        $ustadz->update($request->only(['name', 'email', 'isAdmin']));

        return redirect()->route('ustadzs.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Ustadz $ustadz)
    {
        $ustadz->delete();
        return redirect()->route('ustadzs.index')->with('success', 'Data berhasil dihapus.');
    }
}
