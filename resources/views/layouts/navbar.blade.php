<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @vite('resources/css/app.css', 'resources/js/app.js')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-black via-gray-900 to-black">
  <!-- Navbar -->
  <div class="fixed w-full top-0 z-50">
    <!-- Top notification bar (optional) -->
    <div class="hidden md:block bg-green-800 text-xs text-white py-1">
      <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
          <span class="flex items-center"><i class="fas fa-phone-alt mr-1"></i> +6282288352595</span>
          <span class="flex items-center"><i class="fas fa-envelope mr-1"></i> cebitunand@gmail.com</span>
        </div>
        <div class="flex items-center space-x-3">
          <a href="https://facebook.com/unandpress" class="hover:text-green-300 transition-colors"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/unandpress_?igsh=d2plazY2NGU4c2Zk" class="hover:text-green-300 transition-colors"><i class="fab fa-instagram"></i></a>
          <a href="https://wa.me/6282288352595" class="hover:text-green-300 transition-colors"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <!-- Main Navbar -->
    <nav class="bg-gradient-to-r from-green-700 to-green-600 shadow-lg">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16 md:h-18">
          <!-- Logo and Brand -->
          <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center">
              <img src="{{ asset('images/logo-putih.png') }}" alt="APJ Logo" class="h-9  w-auto mr-3  md:block">
              <div>
                <span class="text-lg font-bold text-white block leading-tight">Andalas</span>
                <span class="text-xs text-green-200 block leading-tight -mt-1  md:block">Publikasi Jaya</span>
              </div>
            </a>
          </div>

          <!-- Desktop Navigation -->
          <div class="hidden md:flex md:items-center">
            <div class="flex space-x-1 font-medium">
              <a href="{{ route('home') }}" class="px-3 py-2 text-white hover:text-white relative group transition-all duration-200 ease-in-out">
                <span class="relative z-10">Home</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform origin-left scale-x-0 group-hover:scale-x-100"></span>
              </a>

              <a href="{{ route('layanan.layanan') }}" class="px-3 py-2 text-white hover:text-white relative group transition-all duration-200 ease-in-out {{ Route::currentRouteName() == 'layanan.layanan' ? 'font-bold' : '' }}">
                <span class="relative z-10">Layanan</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform origin-left scale-x-0 group-hover:scale-x-100 {{ Route::currentRouteName() == 'layanan.layanan' ? 'opacity-100 scale-x-100' : '' }}"></span>
              </a>

              <a href="{{ route('fasilitas.fasilitas') }}" class="px-3 py-2 text-white hover:text-white relative group transition-all duration-200 ease-in-out {{ Route::currentRouteName() == 'fasilitas.fasilitas' ? 'font-bold' : '' }}">
                <span class="relative z-10">Fasilitas</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform origin-left scale-x-0 group-hover:scale-x-100 {{ Route::currentRouteName() == 'fasilitas.fasilitas' ? 'opacity-100 scale-x-100' : '' }}"></span>
              </a>

              <a href="{{ route('team.team') }}" class="px-3 py-2 text-white hover:text-white relative group transition-all duration-200 ease-in-out">
                <span class="relative z-10">Team</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform origin-left scale-x-0 group-hover:scale-x-100"></span>
              </a>
              <a href="https://maps.google.com/maps?q=-0.9356786873818104, 100.36526685649362" target="_blank" class="px-3 py-2 text-white hover:text-white relative group transition-all duration-200 ease-in-out">
                <span class="relative z-10">Lokasi</span>
                <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform origin-left scale-x-0 group-hover:scale-x-100"></span>
              </a>
            </div>

            <!-- Right Side Buttons -->
            <div class="flex items-center ml-6 space-x-3">
              @if (Route::currentRouteName() == 'ai')
              <a href="{{ route('home') }}" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-white bg-green-800 hover:bg-green-900 rounded-lg transition-all duration-300 shadow-md">
                <i class="fas fa-home text-xs"></i>
                <span>Home</span>
              </a>
              @else
              <a href="{{ route('ai') }}" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-white bg-green-800 hover:bg-green-900 rounded-lg transition-all duration-300 shadow-md">
                <i class="fas fa-robot text-xs"></i>
                <span>Tanya AI</span>
              </a>
              @endif
              <a href="https://wa.me/6282288352595" class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-green-700 bg-white hover:bg-gray-100 rounded-lg transition-all duration-300 shadow-md">
                <i class="fas fa-phone-alt text-xs"></i>
                <span>Hubungi Kami</span>
              </a>
            </div>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white transition-colors" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6 block menu-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg class="h-6 w-6 hidden close-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu -->
      <div class="hidden transition-all duration-300 ease-in-out" id="mobile-menu">
        <div class="bg-green-800 px-2 pt-2 pb-3 space-y-1 shadow-inner">
          <a href="{{ route('home') }}" class="mobile-link {{ Route::currentRouteName() == 'home' ? 'bg-green-900' : '' }} block px-4 py-3 text-base font-medium text-white rounded-lg hover:bg-green-900 transition-colors">
            <i class="fas fa-home mr-2"></i> Home
          </a>
          <a href="{{ route('layanan.layanan') }}" class="mobile-link {{ Route::currentRouteName() == 'layanan.layanan' ? 'bg-green-900' : '' }} block px-4 py-3 text-base font-medium text-white rounded-lg hover:bg-green-900 transition-colors">
            <i class="fas fa-cogs mr-2"></i> Layanan
          </a>
          <a href="{{ route('fasilitas.fasilitas') }}" class="mobile-link {{ Route::currentRouteName() == 'fasilitas.fasilitas' ? 'bg-green-900' : '' }} block px-4 py-3 text-base font-medium text-white rounded-lg hover:bg-green-900 transition-colors">
            <i class="fas fa-building mr-2"></i> Fasilitas
          </a>
          <a href="{{ route('team.team') }}" class="mobile-link block px-4 py-3 text-base font-medium text-white rounded-lg hover:bg-green-900 transition-colors">
            <i class="fas fa-users mr-2"></i> Team
          </a>
          <a href="https://maps.google.com/maps?q=-0.9356786873818104, 100.36526685649362" target="_blank" class="mobile-link block px-4 py-3 text-base font-medium text-white rounded-lg hover:bg-green-900 transition-colors">
            <i class="fas fa-map-marker-alt mr-2"></i> Lokasi
          </a>

          <div class="border-t border-green-600 my-3"></div>

          @if (Route::currentRouteName() == 'ai')
          <a href="{{ route('home') }}" class="mobile-link flex items-center px-4 py-3 text-base font-medium text-white rounded-lg bg-green-900 hover:bg-green-950 transition-colors">
            <i class="fas fa-home mr-2"></i> Home
          </a>
          @else
          <a href="{{ route('ai') }}" class="mobile-link flex items-center px-4 py-3 text-base font-medium text-white rounded-lg bg-green-900 hover:bg-green-950 transition-colors">
            <i class="fas fa-robot mr-2"></i> Tanya AI
          </a>
          @endif

          <a href="#contact" class="mobile-link flex items-center px-4 py-3 text-base font-medium text-white rounded-lg bg-green-900 hover:bg-green-950 transition-colors">
            <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
          </a>

          <!-- Mobile social links -->
          <div class="flex items-center space-x-4 px-4 py-3">
            <a href="https://facebook.com/unandpress" class="text-white hover:text-green-300 transition-colors">
              <i class="fab fa-facebook-f text-lg"></i>
            </a>
            <a href="https://www.instagram.com/unandpress_?igsh=d2plazY2NGU4c2Zk" class="text-white hover:text-green-300 transition-colors">
              <i class="fab fa-instagram text-lg"></i>
            </a>
            <a href="https://wa.me/6282288352595" class="text-white hover:text-green-300 transition-colors">
              <i class="fab fa-whatsapp text-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Add margin top to prevent content from hiding behind fixed navbar -->
  <div class="pt-16 md:pt-24">
    @yield('content')
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuButton = document.querySelector('.mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuIcon = document.querySelector('.menu-icon');
      const closeIcon = document.querySelector('.close-icon');
      const mobileLinks = document.querySelectorAll('.mobile-link');

      // Toggle mobile menu
      mobileMenuButton.addEventListener('click', function() {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');

        // Animate icons
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');

        // Add slide-down animation
        if (!expanded) {
          mobileMenu.style.maxHeight = '0';
          setTimeout(() => {
            mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
          }, 10);
        } else {
          mobileMenu.style.maxHeight = '0';
          setTimeout(() => {
            mobileMenu.classList.add('hidden');
          }, 300);
        }
      });

      // Close mobile menu when a link is clicked
      mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
          mobileMenu.classList.add('hidden');
          mobileMenuButton.setAttribute('aria-expanded', 'false');
          menuIcon.classList.remove('hidden');
          closeIcon.classList.add('hidden');
        });
      });

      // Add scroll effect to change navbar appearance
      window.addEventListener('scroll', function() {
        const navbar = document.querySelector('nav');
        if (window.scrollY > 50) {
          navbar.classList.add('navbar-scrolled');
        } else {
          navbar.classList.remove('navbar-scrolled');
        }
      });
    });
  </script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    /* Navbar scroll effect */
    nav {
      transition: all 0.3s ease;
    }

    .navbar-scrolled {
      @apply bg-gradient-to-r from-green-800 to-green-700;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Mobile menu transitions */
    #mobile-menu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
    }

    /* Improve tap target sizes on mobile */
    @media (max-width: 768px) {
      .mobile-link {
        padding: 0.75rem 1rem;
        margin-bottom: 0.25rem;
      }
    }
  </style>
</body>

</html>