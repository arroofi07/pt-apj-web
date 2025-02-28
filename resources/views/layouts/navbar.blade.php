<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-gradient-to-br from-black via-gray-900 to-black">


  <div class="container-fluid flex justify-center items-center">
    <nav class="bg-green-700 fixed w-[95%] top-0 z-50 border-2 rounded-b-2xl ">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <!-- Logo and Brand -->
          <div class="flex items-center  ">
            <a href="#" class="flex items-center space-x-2">
              <span class="text-xl font-bold text-white">Andalas Publikasi Jaya</span>
            </a>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex md:items-center md:space-x-8">
            <div class="flex space-x-1 font-semibold  ">
              @if (Route::currentRouteName() == 'layanan.layanan')
              <a href="{{ route('home') }}" class="px-3 py-2 text-white hover:text-white relative group">
                Home
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
              </a>
              @else
              <a href="{{ route('layanan.layanan') }}" class="px-3 py-2 text-white hover:text-white relative group">
                Layanan
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
              </a>
              @endif
              <a href="#" class="px-3 py-2 text-white hover:text-white relative group">
                Industries
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
              </a>
              <a href="#" class="px-3 py-2 text-white hover:text-white relative group">
                Explore
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
              </a>
              <a href="#" class="px-3 py-2 text-white hover:text-white relative group">
                Learn
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white transition-all group-hover:w-full"></span>
              </a>
            </div>

            <!-- Right Side Buttons -->
            <div class="flex items-center space-x-4">
              @if (Route::currentRouteName() == 'ai')
              <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-full hover:bg-gray-700">
                Home
              </a>
              @else
              <a href="{{ route('ai') }}" class="px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-full hover:bg-gray-700">
                Tanya AI
              </a>
              @endif
              <a href="#" class="px-4 py-2 text-sm font-medium text-black bg-white rounded-full hover:bg-gray-100">
                Hubungi Kami
              </a>
            </div>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>


        <!-- Mobile menu -->
        <div class="hidden md:hidden" id="mobile-menu">

          <div class="px-2 pt-2 pb-3 space-y-1">
            @if (Route::currentRouteName() == 'layanan.layanan')
            <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Home</a>
            @else
            <a href="{{ route('layanan.layanan') }}" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Layanan</a>
            @endif
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Industries</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Explore</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Learn</a>
            <div class="pt-4 pb-3 border-t border-gray-700">
              @if (Route::currentRouteName() == 'ai')
              <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Home</a>
              @else
              <a href="{{ route('ai') }}" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Tanya Ai</a>
              @endif
              <a href="#" class="block px-3 py-2 text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Contact Sales</a>
            </div>
          </div>
        </div>
    </nav>
  </div>

  <!-- Add margin top to prevent content from hiding behind fixed navbar -->
  <div class="pt-16">
    @yield('content')
  </div>

  <script>
    const btn = document.querySelector('[aria-controls="mobile-menu"]');
    const menu = document.querySelector('#mobile-menu');

    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);
      menu.classList.toggle('hidden');
    });
  </script>

</body>


</html>