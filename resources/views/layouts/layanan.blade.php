<section id="layanan" class="py-8 xs:py-12 md:py-16 lg:py-20 text-white ">
  <div class="container mx-auto w-[95%] xs:w-[90%] sm:w-full px-4">
    <div class="text-center mb-8 xs:mb-12 md:mb-16">
      <span class="inline-block text-green-400 font-bold uppercase tracking-wider text-sm xs:text-base bg-green-400/10 px-4 py-2 rounded-full">Layanan Kami</span>
      <h2 style="color: white;" class="text-2xl xs:text-3xl md:text-4xl lg:text-5xl font-bold mt-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">Solusi Lengkap untuk Kebutuhan Anda</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 xs:gap-6 md:gap-8 text-black">
      <!-- Card 1 -->
      <div class="w-[95%] xs:w-full mx-auto text-white bg-gray-800 backdrop-blur-md border-2 border-green-600 hover:border-green-400 rounded-xl shadow-lg p-4 xs:p-6 md:p-8 transition-all duration-300 hover:shadow-xl hover:shadow-green-400/20 transform hover:-translate-y-2">
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white mb-6 shadow-lg shadow-green-400/20">
          <x-entypo-print class="h-8 w-8" />
        </div>
        <h3 class="text-2xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">Solusi Cetak Hari ini</h3>
        <p class="text-gray-300 mb-6">Hasil cetakan berkualitas tinggi dengan teknologi modern untuk berbagai kebutuhan</p>

        <div class="grid grid-cols-2 gap-4 text-sm">
          <!-- ul 1 -->
          <ul class="space-y-3">
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Buku + ISBN</span>
            </li>
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Y-Banner</span>
            </li>
          </ul>
          <!-- ul 2 -->
          <ul class="space-y-3">
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Spanduk</span>
            </li>
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Sertifikat/Piagam</span>
            </li>
          </ul>
        </div>

        <div class="mt-6">
          <a href={{ route('layanan.layanan') }} class="block">
            <button class="w-full bg-gradient-to-r from-green-600 to-green-400 hover:from-green-500 hover:to-green-300 text-white font-medium py-2 px-6 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-green-400/20">
              Selengkapnya
            </button>
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="w-[95%] xs:w-full mx-auto text-white bg-gray-800 backdrop-blur-md border-2 border-green-600 hover:border-green-400 rounded-xl shadow-lg p-4 xs:p-6 md:p-8 transition-all duration-300 hover:shadow-xl hover:shadow-green-400/20 transform hover:-translate-y-2">
        <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white mb-6 shadow-lg shadow-green-400/20">
          <x-entypo-open-book class="h-8 w-8" />
        </div>
        <h3 class="text-2xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">Penerbitan Buku</h3>
        <p class="text-gray-300 mb-6">Layanan penerbitan profesional dari manuscript hingga buku siap edar</p>

        <div class="grid grid-cols-2 gap-4 text-sm">
          <ul class="space-y-3 col-span-2">
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">ISBN Resmi</span>
            </li>
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Editor Profesional</span>
            </li>
            <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
              <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
              <span class="text-gray-200">Distribusi Nasional</span>
            </li>
          </ul>
        </div>

        <div class="mt-6">
          <a href={{ route('layanan.layanan') }} class="block">
            <button class="w-full bg-gradient-to-r from-green-600 to-green-400 hover:from-green-500 hover:to-green-300 text-white font-medium py-2 px-6 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-green-400/20">
              Selengkapnya
            </button>
          </a>
        </div>
      </div>

      <!-- Card 3 -->
        <div class="w-[95%] xs:w-full mx-auto text-white bg-gray-800 backdrop-blur-md border-2 border-green-600 hover:border-green-400 rounded-xl shadow-lg p-4 xs:p-6 md:p-8 transition-all duration-300 hover:shadow-xl hover:shadow-green-400/20 transform hover:-translate-y-2 flex flex-col justify-between">
        <div>
          <div class="w-16 h-16 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white mb-6 shadow-lg shadow-green-400/20">
            <x-entypo-images class="h-8 w-8" />
          </div>
          <h3 class="text-2xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">Desain Grafis</h3>
          <p class="text-gray-300 mb-6">Tim kreatif yang siap mewujudkan konsep desain sesuai kebutuhan Anda</p>

          <div class="grid grid-cols-2 gap-4 text-sm">
            <ul class="space-y-3 col-span-2">
              <li class="flex items-center transform transition-transform duration-300 hover:translate-x-2">
                <x-entypo-check class="w-5 h-5 text-green-400 mr-2" />
                <span class="text-gray-200">Desain Kustom</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="mt-6">
          <a href={{ route('layanan.layanan') }} class="block">
            <button class="w-full bg-gradient-to-r from-green-600 to-green-400 hover:from-green-500 hover:to-green-300 text-white font-medium py-2 px-6 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg hover:shadow-green-400/20">
              Selengkapnya
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>