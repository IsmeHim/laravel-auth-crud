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


  <!-- Content Section Placeholder -->
    <section id="posts" class="max-w-6xl mx-auto px-4 py-16">
        <h2 class="text-3xl font-semibold text-center text-indigo-700 mb-8">เนื้อหาหลักของเว็บไซต์</h2>
        <div class="text-gray-600 text-center mb-4">
        <p>คุณสามารถใส่รายละเอียดต่างๆ ของเว็บไซต์ในส่วนนี้ เช่น บริการ, ภาพแกลเลอรี่, บล็อก หรือโปรเจกต์ของคุณ</p>
        </div>

        <div class="grid grid-cols-3 gap-7">
            @foreach ($posts as $post)
                <div class="bg-gray-500 p-5 rounded-2xl shadow-2xl hover:shadow-gray-700 transition max-h-48 min-h-24 overflow-y-auto">
                    <h1 class="text-center text-2xl font-bold mb-2 text-green-500">{{ Str::limit($post->title, 10) }}</h1>
                    <p class="text-red-200 text-sm">โพสต์เมื่อ {{$post->created_at}}</p>
                    <p class="break-words text-white">{{ $post->content }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mx-auto mt-2">
            <a href="" class="text-blue-500 hover:text-blue-600 hover:underline">See more</a>
        </div>
    </section>

    @include('partials.home-myskill')
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
@endsection
