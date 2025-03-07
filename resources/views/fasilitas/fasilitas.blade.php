@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-24">
  <div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-6">Fasilitas Modern Kami</h1>
      <p class="text-xl text-blue-100">Dilengkapi dengan teknologi terkini untuk memberikan hasil terbaik</p>
    </div>
  </div>
  <div class="absolute bottom-0 left-0 right-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>
</section>

<!-- Fasilitas Section -->
<section class="py-20">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Item 1 -->
      <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-blue-600 opacity-10 group-hover:opacity-20 transition-opacity"></div>
        <div class="relative">
          <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl w-16 h-16 flex items-center justify-center mb-8">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Digital Printing</h3>
          <p class="text-gray-600">Mesin digital printing terbaru dengan kualitas cetak tinggi dan waktu pengerjaan cepat. Hasil maksimal untuk setiap proyek Anda.</p>
          <a href="#" class="inline-flex items-center mt-6 text-blue-600 hover:text-blue-700 font-medium">
            Pelajari lebih lanjut
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-green-600 opacity-10 group-hover:opacity-20 transition-opacity"></div>
        <div class="relative">
          <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-xl w-16 h-16 flex items-center justify-center mb-8">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Offset Printing</h3>
          <p class="text-gray-600">Percetakan offset untuk kebutuhan skala besar dengan hasil presisi dan konsisten. Ideal untuk produksi massal berkualitas tinggi.</p>
          <a href="#" class="inline-flex items-center mt-6 text-green-600 hover:text-green-700 font-medium">
            Pelajari lebih lanjut
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
        <div class="absolute top-0 right-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-yellow-600 opacity-10 group-hover:opacity-20 transition-opacity"></div>
        <div class="relative">
          <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl w-16 h-16 flex items-center justify-center mb-8">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Large Format Printing</h3>
          <p class="text-gray-600">Pencetakan banner, poster, dan material promosi berukuran besar dengan detail yang tajam dan warna yang hidup.</p>
          <a href="#" class="inline-flex items-center mt-6 text-yellow-600 hover:text-yellow-700 font-medium">
            Pelajari lebih lanjut
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
      <div class="relative">
        <div class="absolute inset-0 bg-blue-600 rounded-2xl transform rotate-6 opacity-10"></div>
        <img src="printing-machine.jpg" alt="Peralatan Percetakan" class="relative rounded-2xl shadow-xl">
      </div>
      <div>
        <h2 class="text-4xl font-bold text-gray-800 mb-8">Mengapa Memilih Kami?</h2>
        <div class="space-y-6">
          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div class="bg-blue-600 rounded-full p-2">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Peralatan Modern</h3>
              <p class="text-gray-600">Menggunakan teknologi terkini untuk hasil yang maksimal</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div class="bg-blue-600 rounded-full p-2">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Tim Profesional</h3>
              <p class="text-gray-600">Didukung oleh tenaga ahli berpengalaman di bidangnya</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <div class="flex-shrink-0">
              <div class="bg-blue-600 rounded-full p-2">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800 mb-2">Kualitas Terjamin</h3>
              <p class="text-gray-600">Hasil cetak berkualitas tinggi dengan harga bersaing</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
@include('layouts.footer')
@endsection