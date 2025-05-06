@extends('components.app')

@section('title', 'Produk')

@section('content')
<div class="max-w-4xl mx-auto mt-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Collections</h2>
        <a href="{{ route('add.collection', ['username' => $username]) }}"
           class="bg-orange-400 text-black px-4 py-2 rounded font-bold hover:bg-orange-500 transition text-sm">
            Tambah
        </a>
    </div>
    @foreach ($collectionItems as $item)
        <div class="bg-white rounded-lg p-4 mb-4 shadow-md">
            <div class="flex justify-between items-start space-x-4">
                <div class="flex space-x-4">
                    <img src="{{ $item['gambar'] }}" alt="{{ $item['judul'] }}"
                         class="w-32 h-44 object-contain rounded-md border border-gray-200">
                    <div>
                        <h3 class="text-xl font-bold">{{ $item['judul'] }}</h3>
                        <p>Penulis: {{ $item['penulis'] }}</p>
                        <p>Genre: {{ $item['genre'] }}</p>
                        <p>Rating: {{ $item['rating'] }}</p>
                        <p>Stok: {{ $item['stok'] }}</p>
                        <p>Harga: Rp{{ number_format((string) $item['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>
                <div class="flex flex-col items-end space-y-2">
                    <button class="text-blue-500 hover:text-blue-700">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
