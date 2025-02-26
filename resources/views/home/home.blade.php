@extends('layouts.navbar')
@section('title', 'home')

@section('content')

<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<body class="font-sans">
  <!-- Hero Section -->
  <section class="container-fluid relative min-h-[95vh] xs:min-h-screen flex items-center">
    <div id="logo-dekstop" class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-fade-in hidden md:block opacity-90" style="background-image: url('{{ asset("images/logo-apj.png") }}');"></div>
    <div id="logo-mobile" class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-fade-in md:hidden opacity-90" style="background-image: url('{{ asset("images/logo-apj-mobile.png") }}');"></div>
    <div class="absolute inset-0 bg-black/30 animate-fade-in"></div>

    <!-- title -->
    <div class="container mx-auto w-full px-4 sm:px-6 lg:px-8 relative z-10 ">
      <div class="grid md:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 items-center  ">
        <div class="md:col-start-2 col-span-1 w-full ">
          <h1 class="text-xl xs:text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-3 sm:mb-4 md:mb-6 animate-fade-in-up text-center md:text-left leading-tight">
            Wujudkan Ide Kreatif Anda Bersama Kami
          </h1>
          <p class="text-sm xs:text-base sm:text-lg md:text-xl text-white/90 mb-4 sm:mb-6 md:mb-8 animate-fade-in-up delay-300 text-center md:text-left leading-relaxed">
            Andalas Publikasi Jaya - Partner terpercaya untuk solusi percetakan dan penerbitan berkualitas
          </p>
          <div class="flex xs:flex-row gap-2 xs:gap-3 sm:gap-4 animate-fade-in-up delay-500 items-center md:justify-end">
            <a href="#layanan" class="w-full md:w-2/2 lg:w-2/2 xs:w-auto px-3 xs:px-4 sm:px-6 py-2 sm:py-3 bg-green-400/70 hover:bg-green-400 text-white font-medium rounded-lg transition duration-300 transform hover:-translate-y-1 text-center text-sm sm:text-base">Jelajahi Layanan</a>
            <a href="#contact" class="w-full md:w-2/2 lg:w-2/2 xs:w-auto px-3 xs:px-4 sm:px-6 py-2 sm:py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white/10 transition duration-300 transform hover:-translate-y-1 text-center text-sm sm:text-base">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- banner promosi -->
  <section id="box-video" class="container mt-14 md:mt-24 lg:mt-24 mx-auto w-[90%] xs:w-[90%] sm:w-full md:w-[95%] lg:w-[95%] px-4 sm:px-6 lg:px-8 my-4 xs:my-6 sm:my-8 md:my-10 border-2 border-green-400/70 py-4 xs:py-6 sm:py-8 rounded-xl">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 xs:gap-6 sm:gap-8 items-center">
      <div class="col-span-1 w-[95%] xs:w-full mx-auto">
        <div class="video-container relative rounded-xl overflow-hidden shadow-2xl aspect-video">
          <video id="promoVideo" class="w-full h-full object-cover" autoplay muted playsinline>
            <source src="{{ asset($promoData[0]['video_url']) }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="video-overlay absolute inset-0 bg-black/20"></div>
        </div>
      </div>
      <div id="promoContent" class="col-span-1 w-[95%] xs:w-full mx-auto px-2 xs:px-4 sm:px-0">
        <h2 style="color: white" class="text-xl xs:text-2xl sm:text-3xl md:text-4xl font-bold mt-2">{{ $promoData[0]['title'] }}</h2>
        <p class="text-white/80 mb-3 xs:mb-4 sm:mb-6 text-sm xs:text-base sm:text-lg leading-relaxed">{{ $promoData[0]['description'] }}</p>
      </div>
    </div>
  </section>

  <!-- Layanan Section -->
  @include('layouts.layanan')

  <!-- Contact Section -->
  <section id="contact" class="py-6 xs:py-8 sm:py-12 md:py-16 lg:py-20">
    <div class="container mx-auto w-[95%] xs:w-[90%] sm:w-full px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-4 xs:gap-6 sm:gap-8 md:gap-12">
        <div class="order-2 lg:order-1 w-[95%] xs:w-full mx-auto">
          <span class="text-blue-600 font-bold uppercase tracking-wider text-sm xs:text-base">Kontak Kami</span>
          <h2 class="text-2xl xs:text-3xl md:text-4xl lg:text-5xl font-bold mt-2 mb-3 xs:mb-4 md:mb-6">Mari Diskusikan Proyek Anda</h2>
          <p class="text-base xs:text-lg md:text-xl text-gray-600 mb-6 xs:mb-8 md:mb-10">Kami siap membantu mewujudkan ide kreatif Anda menjadi karya nyata.</p>

          <div class="space-y-8">
            <div class="flex items-start">
              <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-bold mb-1">Lokasi</h4>
                <p class="text-gray-600">Jl. Andalas No. 123, Padang, Sumatera Barat</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-bold mb-1">Telepon</h4>
                <p class="text-gray-600">+62 812-3456-7890</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-bold mb-1">Email</h4>
                <p class="text-gray-600">info@andalaspublikasi.com</p>
              </div>
            </div>
          </div>
        </div>

        <div class="order-1 lg:order-2">
          <div class="w-[95%] xs:w-full mx-auto bg-white rounded-2xl p-3 xs:p-4 sm:p-6 md:p-8 shadow-xl">
            <form>
              <div class="grid md:grid-cols-2 gap-3 xs:gap-4 md:gap-6 mb-4 md:mb-6">
                <div>
                  <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Nama Lengkap">
                </div>
                <div>
                  <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Email">
                </div>
              </div>
              <div class="mb-6">
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Subjek">
              </div>
              <div class="mb-6">
                <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" placeholder="Pesan Anda"></textarea>
              </div>
              <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300 transform hover:-translate-y-1">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const promoVideo = document.getElementById('promoVideo');
      const promoContent = document.getElementById('promoContent');
      const promoData = JSON.parse('@json($promoData)');
      let currentVideoIndex = 0;

      // Function to update content
      function updateContent(index) {
        const promo = promoData[index];
        promoVideo.src = '{{ asset("") }}' + promo.video_url;
        promoVideo.poster = '{{ asset("") }}' + promo.thumbnail;

        promoContent.querySelector('h2').textContent = promo.title;
        promoContent.querySelector('p').textContent = promo.description;
        promoContent.querySelector('a').href = promo.link;

        promoVideo.load();
        promoVideo.play();
      }

      // When current video ends, play next video
      promoVideo.addEventListener('ended', function() {
        currentVideoIndex = (currentVideoIndex + 1) % promoData.length;
        updateContent(currentVideoIndex);
      });

      // Handle video errors
      promoVideo.addEventListener('error', function() {
        console.log('Video error occurred, playing next video');
        currentVideoIndex = (currentVideoIndex + 1) % promoData.length;
        updateContent(currentVideoIndex);
      });

      // Start playing first video
      promoVideo.play().catch(function(error) {
        console.log("Video autoplay failed:", error);
      });
    });
  </script>

</body>
@endsection