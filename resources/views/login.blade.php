@extends('components.guest')

@section('title', 'Login Page')

@section('content')
<div class="flex items-center justify-center py-12 sm:py-20">
    <div class="bg-white p-6 sm:p-10 rounded-xl shadow-lg w-full max-w-md border-2 border-blue-400">
        <h1 class="text-3xl font-bold text-center mb-6">Welcome to SiBuku!</h1>
        <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
            @csrf
            <input type="text" name="username" placeholder="Username" required
                   class="w-full px-4 py-3 bg-orange-200 rounded-full focus:outline-none">
            <input type="password" name="password" placeholder="Password" required
                   class="w-full px-4 py-3 bg-orange-200 rounded-full focus:outline-none">
            <button type="submit"
                    class="block w-full bg-black text-white py-2 rounded-full font-semibold hover:bg-gray-800">
                Login
            </button>
        </form>
        @if($errors->any())
            <p class="text-red-600 text-sm mt-4 text-center">{{ $errors->first() }}</p>
        @endif
    </div>
</div>
@endsection
