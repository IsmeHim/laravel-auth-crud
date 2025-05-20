{{-- @php
    use Illuminate\Support\Facades\Auth;
@endphp --}}
@extends('layouts.home')
@section('title', 'home')

@section('content')

    @include('partials.home-navbar')

    <!-- Header -->
    <header class="parallax h-screen flex items-center justify-center text-white text-center">
        <div class="bg-black/40 backdrop-blur-md p-8 rounded-lg">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
            ยินดีต้อนรับ{{ Auth::check() ? ' คุณ ' . Auth::user()->name : '' }}
            </h1>
            <p class="text-lg md:text-xl">สร้างเว็บสวยๆ ด้วย Tailwind CSS</p>
        </div>
    </header>

    <!-- Content Section posts -->
    @include('partials.home-posts')

    <!-- Content Section myskill -->
    @include('partials.home-myskill')
    
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

@endsection
