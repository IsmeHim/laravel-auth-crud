<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'home')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    /* Parallax effect */
    .parallax {
      background-image: url('https://images.unsplash.com/photo-1747134392520-e3181e0bc399?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); /* เปลี่ยน URL ตามต้องการ */
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
    }
    @keyframes slideXRight {
      0%   { transform: translateX(0); }
      25%  { transform: translateX(80px); }
      50%  { transform: translateX(40px); }
      75%  { transform: translateX(-80px); }
      100% { transform: translateX(0); }
    }

    @keyframes slideXLeft {
      0%   { transform: translateX(0); }
      25%  { transform: translateX(-80px); }
      50%  { transform: translateX(40px); }
      75%  { transform: translateX(80px); }
      100% { transform: translateX(0); }
    }

    .animate-slideXRight {
      animation: slideXRight 10s ease-in-out infinite;
    }

    .animate-slideXLeft {
      animation: slideXLeft 10s ease-in-out infinite;
    }
    html {
        scroll-behavior: smooth;
    }
  </style>
</head>
<body class="font-sans text-gray-800 bg-darkprimary">
    @yield('content')
    <!-- อย่าลืมโหลด Alpine.js สำหรับ dropdown -->
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
