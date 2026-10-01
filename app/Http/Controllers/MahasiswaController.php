<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswa::latest()->paginate(5),
        ]);
    }

    public function create(): View
    {
        return view('mahasiswa.create');
    }

    public function store(StoreMahasiswaRequest $request): RedirectResponse
    {
        Mahasiswa::create($request->validated());

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data profil mahasiswa berhasil disimpan.');
    }

    public function edit(Mahasiswa $mahasiswa): View
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->update($request->validated());

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data profil mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa): RedirectResponse
    {
        $mahasiswa->delete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}