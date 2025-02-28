@extends('layouts.navbar')

@section('content')
<div class="min-h-screen py-8">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-6">
      <!-- Sidebar -->
      <div class="lg:w-1/4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h5 class="text-xl font-bold mb-4">Menu Layanan</h5>
          <nav class="space-y-2">
            <a href="#" class="block px-4 py-2 rounded-md bg-green-500 text-white hover:bg-green-600">Semua Layanan</a>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-100">Layanan Cetak</a>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-100">Penerbitan Buku</a>
            <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-100">Desain Grafis</a>
          </nav>
        </div>
      </div>

      <!-- Main Content -->
      <div class="lg:w-3/4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-bold mb-6">Layanan Kami</h2>

          <!-- Search Bar -->
          <div class="mb-6">
            <div class="flex">
              <input type="text" class="flex-1 rounded-l-md border-gray-300 focus:border-green-500 focus:ring focus:ring-green-200" placeholder="Cari layanan...">
              <button class="px-4 py-2 bg-green-500 text-white rounded-r-md hover:bg-green-600">
                Cari
              </button>
            </div>
          </div>

          <!-- Services Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 6; $i++)
              <div class="bg-white border-2 border-green-400 rounded-xl shadow-lg p-4 transition duration-300 hover:shadow-xl transform hover:-translate-y-2">
              <img src="https://via.placeholder.com/300x200" class="w-full h-40 object-cover rounded-lg mb-4" alt="Layanan {{ $i }}">
              <h5 class="text-xl font-bold mb-2">Layanan {{ $i }}</h5>
              <p class="text-gray-600 mb-4">Deskripsi singkat tentang layanan yang ditawarkan.</p>
              <a href="#" class="inline-block px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Selengkapnya</a>
          </div>
          @endfor
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-center">
          <nav class="flex space-x-2">
            <a href="#" class="px-3 py-2 rounded-md bg-gray-100 hover:bg-gray-200">Previous</a>
            <a href="#" class="px-3 py-2 rounded-md bg-green-500 text-white">1</a>
            <a href="#" class="px-3 py-2 rounded-md bg-gray-100 hover:bg-gray-200">2</a>
            <a href="#" class="px-3 py-2 rounded-md bg-gray-100 hover:bg-gray-200">3</a>
            <a href="#" class="px-3 py-2 rounded-md bg-gray-100 hover:bg-gray-200">Next</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection