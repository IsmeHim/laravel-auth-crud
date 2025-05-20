@php
    use App\Enums\UserRole; //เพื่อจะใช้เช็คสิธ
@endphp
<!-- Navbar -->
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
        <div class="flex items-center space-x-4">
            @if (Route::has('login'))
                @auth
                    <!-- If logged in, show Dashboard link -->
                    @if (Auth::user()->role === UserRole::Admin)
                        <!-- ลิงก์สำหรับ admin -->
                        <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Admin Dashboard</a>
                    @else
                        <!-- ลิงก์สำหรับ user -->
                        <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Dashboard</a>
                    @endif
                @else
                    <!-- If not logged in, show Sign In and Sign Up links -->
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Sign In</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700 transition duration-200">Sign Up</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
