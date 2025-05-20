@php
    use App\Enums\UserRole; // เช็คสิทธิ์
@endphp

<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold text-indigo-700">MyWebsite</div>

        <!-- Menu Items -->
        <ul class="hidden md:flex space-x-6 items-center">
            <li><a href="#" class="text-gray-700 hover:text-indigo-600">หน้าแรก</a></li>
            <li><a href="#posts" class="text-gray-700 hover:text-indigo-600">โพสต์</a></li>
            <li><a href="#" class="text-gray-700 hover:text-indigo-600">เกี่ยวกับ</a></li>
            <li><a href="#" class="text-gray-700 hover:text-indigo-600">บริการ</a></li>
            <li><a href="#skill" class="text-gray-700 hover:text-indigo-600">ทักษะ</a></li>
            <li><a href="#" class="text-gray-700 hover:text-indigo-600">ติดต่อ</a></li>
        </ul>

        <!-- Sign In / Sign Up or Dashboard -->
        <div class="flex items-center space-x-4 relative">
            @if (Route::has('login'))
                @auth
                    <!-- Dropdown menu wrapper -->
                    <div x-data="{ open: false }" class="relative">
                        <!-- ปุ่มชื่อผู้ใช้ -->
                        <button @click="open = !open" class="text-gray-700 font-medium focus:outline-none flex items-center space-x-1">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </button>

                        <!-- เมนู dropdown -->
                        <div
                            x-show="open"
                            @click.outside="open = false"
                            x-transition
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border border-gray-200 z-50"
                        >
                            <a href="{{ Auth::user()->role === UserRole::Admin ? route('admin.dashboard') : url('/dashboard') }}"
                               class="block px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white transition">
                               Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-gray-700 hover:bg-indigo-600 hover:text-white transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- If not logged in -->
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600">SIGN IN</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 shadow-xl hover:shadow-indigo-300 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition duration-200">Sign Up</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>


