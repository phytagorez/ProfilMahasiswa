@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-xl shadow-sm border border-slate-200 p-6">
    <h1 class="text-xl font-bold text-slate-800 mb-1">Tambah Profil Mahasiswa</h1>
    <p class="text-xs text-slate-500 mb-6">Isi data mahasiswa dengan benar.</p>

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">NIM</label>
            <input type="text" name="nim" value="{{ old('nim') }}" class="w-full px-3.5 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none @error('nim') border-rose-500 @else border-slate-300 @enderror">
            @error('nim') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="w-full px-3.5 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none @error('nama') border-rose-500 @else border-slate-300 @enderror">
            @error('nama') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Jurusan</label>
            <input type="text" name="jurusan" value="{{ old('jurusan') }}" class="w-full px-3.5 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none @error('jurusan') border-rose-500 @else border-slate-300 @enderror">
            @error('jurusan') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full px-3.5 py-2 border rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none @error('email') border-rose-500 @else border-slate-300 @enderror">
            @error('email') <p class="mt-1 text-xs text-rose-500">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 border border-slate-300 text-slate-700 text-sm font-medium rounded-lg hover:bg-slate-50 transition">Batal</a>
            <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition">Simpan</button>
        </div>
    </form>
</div>
@endsection