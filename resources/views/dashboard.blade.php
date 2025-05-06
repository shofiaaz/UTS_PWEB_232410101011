@extends('components.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">Best Seller</h2>
        <div class="bg-orange-200 p-4 rounded-lg flex items-center space-x-4 overflow-x-auto">
            @foreach ($bestsellerlistItems as $book)
                <div class="bg-white rounded-lg shadow-md w-48 flex-shrink-0 flex flex-col items-center p-2 h-[240px]">
                    <img src="{{ $book['gambar'] }}" alt="{{ $book['judul'] }}"
                         class="w-full h-55 object-contain rounded-md mb-2 transform transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <div class="text-center text-sm">
                        <p class="font-semibold">Judul: {{ $book['judul'] }}</p>
                        <p>Rating: {{ $book['rating'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-10">
        <h2 class="text-2xl font-bold mb-4">Recommendation</h2>
        <div class="bg-orange-200 p-4 rounded-lg grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($recommendationItems as $book)
                <div class="bg-white rounded-lg p-4 shadow-md flex flex-col items-center w-full min-h-[350px]">
                    <img src="{{ $book['gambar'] }}" alt="{{ $book['judul'] }}"
                         class="w-full h-60 object-contain rounded-md mb-2 transform transition-transform duration-300 hover:scale-105 cursor-pointer">
                    <div class="text-center text-sm">
                        <p class="font-semibold">Judul: {{ $book['judul'] }}</p>
                        <p class="text-gray-600">Penulis: {{ $book['penulis'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
