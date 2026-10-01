@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-bold text-slate-800">Daftar Mahasiswa</h1>
            <p class="text-xs text-slate-500">Kelola data profil seluruh mahasiswa.</p>
        </div>
        <a href="{{ route('mahasiswa.create') }}" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition shadow-sm">
            + Tambah Data
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 bg-slate-50 text-xs uppercase font-semibold text-slate-500">
                    <th class="py-3 px-4">NIM</th>
                    <th class="py-3 px-4">Nama</th>
                    <th class="py-3 px-4">Jurusan</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @forelse ($mahasiswa as $item)
                    <tr class="hover:bg-slate-50/80 transition">
                        <td class="py-3 px-4 font-mono font-medium text-slate-700">{{ $item->nim }}</td>
                        <td class="py-3 px-4 font-medium text-slate-900">{{ $item->nama }}</td>
                        <td class="py-3 px-4 text-slate-600">{{ $item->jurusan }}</td>
                        <td class="py-3 px-4 text-slate-500">{{ $item->email }}</td>
                        <td class="py-3 px-4 text-center">
                            <div class="inline-flex items-center gap-2">
                                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="px-2.5 py-1 bg-amber-50 text-amber-700 hover:bg-amber-100 rounded text-xs font-semibold border border-amber-200 transition">
                                    Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data mahasiswa ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2.5 py-1 bg-rose-50 text-rose-700 hover:bg-rose-100 rounded text-xs font-semibold border border-rose-200 transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-slate-400">Belum ada data mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $mahasiswa->links() }}
    </div>
</div>
@endsection