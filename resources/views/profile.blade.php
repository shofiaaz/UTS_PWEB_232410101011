@extends('components.app')

@section('title', 'Profile')

@section('content')
    <div class="min-h-screen bg-orange-100 text-black">
        <div class="text-center mt-8">
            <h1 class="text-3xl font-extrabold">Profile</h1>
            <div class="flex justify-center mt-4">
                <div class="bg-black p-4 rounded-lg shadow-md w-40 h-40 flex items-center justify-center">
                    <img src="{{ asset('image/profile.png') }}" alt="Profile" class="w-24 h-24 object-contain">
                </div>
            </div>
        </div>
        <div class="mt-6 mx-auto bg-orange-200 rounded-xl p-6 max-w-md text-lg leading-relaxed">
            <p>Nama : {{ $profileData['nama'] }}</p>
            <p>Jenis Kelamin : {{ $profileData['jenis_kelamin'] }}</p>
            <p>Alamat : {{ $profileData['alamat'] }}</p>
            <p>Jabatan : {{ $profileData['jabatan'] }}</p>
            <p>Status : {{ $profileData['status'] }}</p>
        </div>
    </div>
@endsection
