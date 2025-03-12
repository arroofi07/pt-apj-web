@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<!-- Hero Section dengan Background Image -->
<section class="relative h-screen bg-cover bg-center bg-fixed" style="background-image: url('printing-workshop.jpg')">
  <!-- Overlay dengan gradient yang lebih profesional -->
  <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-800 bg-opacity-80 opacity-90"></div>
  
  <!-- Elemen dekoratif - garis grafis -->
  <!-- <div class="absolute inset-0 overflow-hidden">
    <div class="absolute left-0 top-0 w-1/2 h-1 bg-green-500 opacity-70"></div>
    <div class="absolute right-0 bottom-0 w-1/2 h-1 bg-green-500 opacity-70"></div>
    <div class="absolute right-20 top-20 w-32 h-32 border-r-2 border-t-2 border-green-500 opacity-20"></div>
    <div class="absolute left-20 bottom-20 w-32 h-32 border-l-2 border-b-2 border-green-500 opacity-20"></div>
  </div> -->
  
  <div class="container relative z-10 mx-auto px-4 h-full flex items-center">
    <div class="max-w-4xl">
      <!-- Desain heading yang lebih presisi -->
      <div class="mb-2">
        <span class="inline-block px-4 py-1 bg-green-500 text-sm font-bold text-gray-900 tracking-wider uppercase rounded-sm mb-4">Solusi Percetakan Profesional</span>
      </div>
      
      <h1 class="text-5xl md:text-6xl font-extrabold mb-6 text-white leading-tight">
        Teknologi <span class="text-green-500 relative">Premium<span class="absolute -bottom-2 left-0 h-1 w-full bg-green-500 opacity-50"></span></span> 
        <br class="hidden md:block">untuk Bisnis Anda
      </h1>
      
      <p class="text-xl md:text-2xl text-gray-300 mb-10 max-w-2xl font-light leading-relaxed">
        Menghadirkan peralatan percetakan terkini dengan presisi tinggi untuk menghasilkan cetakan berkualitas.
      </p>
      
      <!-- Tombol yang lebih elegan -->
      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <a href="#peralatan" class="group inline-flex items-center justify-center px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-sm transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl">
          <span>Jelajahi Peralatan</span>
          <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      
      </div>
      
      <!-- Metrik perusahaan - menambah kredibilitas -->
      <!-- <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-gray-700 pt-8">
        <div class="text-center">
          <div class="text-3xl font-bold text-green-500">15+</div>
          <div class="text-sm text-gray-400 mt-1">Tahun Pengalaman</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-green-500">250+</div>
          <div class="text-sm text-gray-400 mt-1">Klien Perusahaan</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-green-500">12</div>
          <div class="text-sm text-gray-400 mt-1">Peralatan Canggih</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-green-500">99%</div>
          <div class="text-sm text-gray-400 mt-1">Klien Puas</div>
        </div>
      </div> -->
    </div>
  </div>
  
  <!-- Elemen visual untuk scroll down -->
</section>


<!-- Peralatan Showcase -->
<section id="peralatan" class="py-16">
  <div class="container mx-auto px-4">
    <h2 style="color: white;" class="text-3xl font-bold  text-white text-center mb-16 relative">
      <!-- <span class="bg-yellow-400 h-1 w-24 absolute left-1/2 -translate-x-1/2 bottom-0"></span> -->
      Peralatan Unggulan
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Peralatan 1 -->

      @foreach ($fasilitasData as $fasilitas)
      <div class="bg-gradient-to-br from-gray-700 to-gray-800 border-[1px] rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('images-fasility/' . $fasilitas['gambar']) }}" alt="Digital Printer" class="w-full h-full object-cover transition duration-500 hover:scale-110">
        </div>
        <div class="p-6">
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-2xl font-bold text-white">{{ $fasilitas['nama'] }}</h3>
            <!-- <span class="bg-green-500 text-white text-xs uppercase font-bold rounded-full px-3 py-1">{{ $fasilitas['kategori'] }}</span> -->
          </div>
          <p class="text-gray-300 mb-4">{{ $fasilitas['deskripsi'] }}</p>
          <!-- <a href="#" class="mt-6 inline-block px-6 py-2 bg-green-500 text-gray-900 font-medium rounded hover:bg-green-600 transition duration-300">Detail Peralatan</a> -->
        </div>
      </div>
      @endforeach

      <!-- <div class="flex justify-center mt-16">
      <a href="#" class="px-8 py-3 bg-gray-800 hover:bg-gray-700 text-white font-bold rounded-full transition duration-300 inline-flex items-center">
        Lihat Semua Peralatan
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div> -->
    </div>
</section>

<!-- Keunggulan -->
<section class="py-20 bg-gray-900 text-white">
  <div class="container mx-auto px-4">
    <h2 style="color: white;" class="text-3xl font-bold text-center mb-16 relative">
      <!-- <span class="bg-yellow-400 h-1 w-24 absolute left-1/2 -translate-x-1/2 bottom-0"></span> -->
      Keunggulan Teknologi Kami
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-gradient-to-br from-gray-700 to-gray-800  p-8 rounded-lg text-center">
        <div class="bg-green-500 text-gray-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4">Kecepatan Tinggi</h3>
        <p class="text-gray-300">Waktu produksi cepat dengan hasil berkualitas untuk memenuhi deadline ketat Anda</p>
      </div>

      <div class="bg-gradient-to-br from-gray-700 to-gray-800  p-8 rounded-lg text-center">
        <div class="bg-green-500 text-gray-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4">Kualitas Premium</h3>
        <p class="text-gray-300">Resolusi tinggi dengan warna yang akurat dan detail yang tajam pada setiap cetakan</p>
      </div>

      <div class="bg-gradient-to-br from-gray-700 to-gray-800  p-8 rounded-lg text-center">
        <div class="bg-green-500 text-gray-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4">Teknologi Modern</h3>
        <p class="text-gray-300">Menggunakan peralatan generasi terbaru untuk hasil optimal dalam setiap proyek</p>
      </div>

      <div class="bg-gradient-to-br from-gray-700 to-gray-800  p-8 rounded-lg text-center">
        <div class="bg-green-500 text-gray-900 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4">Harga Bersaing</h3>
        <p class="text-gray-300">Menawarkan nilai terbaik dengan perbandingan kualitas dan harga yang menguntungkan</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<!-- <section class="py-20 bg-gradient-to-r from-yellow-400 to-yellow-600">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-6">Siap Untuk Memulai Proyek Anda?</h2>
    <p class="text-lg text-gray-800 mb-8 max-w-2xl mx-auto">Konsultasikan kebutuhan cetak Anda dengan tim profesional kami dan dapatkan solusi terbaik dengan teknologi modern.</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#" class="px-8 py-3 bg-gray-900 hover:bg-gray-800 text-white font-bold rounded-full transition duration-300 inline-flex items-center">
        Hubungi Kami
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
      </a>
      <a href="#" class="px-8 py-3 bg-white hover:bg-gray-100 text-gray-900 font-bold rounded-full transition duration-300 inline-flex items-center">
        Lihat Portfolio
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
      </a>
    </div>
  </div>
</section> -->

<!-- Footer -->
@include('layouts.footer')
@endsection