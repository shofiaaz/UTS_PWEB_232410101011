@extends('components.app')

@section('title', 'Pengelolaan Koleksi')

@section('content')
<div class="min-h-screen bg-orange-100 flex items-center justify-center py-10 px-4">
    <div class="bg-orange-200 rounded-2xl p-8 w-full max-w-4xl">
        <h1 class="text-center text-3xl font-extrabold mb-6">Tambah Koleksi Baru</h1>
        <form action="{{ route('store.collection') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="username" value="{{ $username }}">
            <input type="text" name="gambar" placeholder="Link Gambar" class="w-full p-2 rounded bg-white text-sm" required>
            @if (isset($gambar))
                <div class="my-4 text-center">
                    <img src="{{ $gambar }}" alt="Gambar Koleksi" class="max-w-full h-auto rounded-lg">
                </div>
            @endif
            <input type="text" name="judul" placeholder="Judul" class="w-full p-2 rounded bg-white text-sm" required>
            <input type="text" name="penulis" placeholder="Penulis" class="w-full p-2 rounded bg-white text-sm" required>
            <input type="text" name="genre" placeholder="Genre" class="w-full p-2 rounded bg-white text-sm" required>
            <div class="grid grid-cols-3 gap-4">
                <input type="number" step="0" name="rating" placeholder="Rating" class="p-2 rounded bg-white text-sm" required>
                <input type="number" name="stok" placeholder="Stok" class="p-2 rounded bg-white text-sm" required>
                <input type="number" step="0" name="harga" placeholder="Harga" class="p-2 rounded bg-white text-sm" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-orange-400 text-black font-bold px-6 py-2 rounded hover:bg-orange-500 transition">
                    Simpan Koleksi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
