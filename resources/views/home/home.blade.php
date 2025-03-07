@extends('layouts.navbar')
@section('title', 'home')

@section('content')

<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<body class="font-sans">
  <!-- Hero Section -->
  <section class="container-fluid relative min-h-[100vh] xs:min-h-screen flex items-center">
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
            <a href="#layanan" class="w-full md:w-2/2 lg:w-2/2 xs:w-auto px-3 xs:px-4 sm:px-6 py-2 sm:py-3 bg-green-400/70 hover:bg-green-400 text-white font-medium rounded-lg transition duration-300 transform hover:-translate-y-1 text-center text-sm sm:text-base"> Jelajahi Layanan</a>
            <a href="#contact" class="w-full md:w-2/2 lg:w-2/2 xs:w-auto px-3 xs:px-4 sm:px-6 py-2 sm:py-3 border-2 border-gray-600  bg-gradient-to-br from-gray-700 to-gray-800 text-white font-medium rounded-lg hover:border-green-400 transition duration-300 transform hover:-translate-y-1 text-center text-sm sm:text-base"> Hubungi Kami</a>
          </div>
          <!-- icons -->
          <div class="flex mt-6 gap-4 animate-fade-in-up delay-500 items-center justify-center md:justify-start">
            <a href="https://wa.me/6282288352595"
              class="p-2 rounded-lg transition-all duration-300 hover:scale-110 animate-bounce delay-300 hover:bg-green-500/10 text-green-600">
              <x-fab-square-whatsapp class="w-8 h-8 sm:w-14 sm:h-14" />
            </a>
            <a href="https://www.instagram.com/unandpress_?igsh=d2plazY2NGU4c2Zk"
              class="p-2 rounded-lg transition-all duration-300 hover:scale-110 animate-bounce delay-400 hover:bg-pink-500/10 text-pink-600 ">
              <x-fab-square-instagram class="w-8 h-8 sm:w-14 sm:h-14" />
            </a>
            <a href="https://www.facebook.com/unandpress"
              class="p-2 rounded-lg transition-all duration-300 hover:scale-110 animate-bounce delay-500 hover:bg-blue-500/10 text-blue-600">
              <x-fab-square-facebook class="w-8 h-8 sm:w-14 sm:h-14" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- tentang kami -->
  @include('layouts.about')


  <!-- Layanan Section -->
  @include('layouts.layanan')

  <!-- Contact Section -->
  @include('layouts.contact')

  <!-- footer -->
  @include('layouts.footer')

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