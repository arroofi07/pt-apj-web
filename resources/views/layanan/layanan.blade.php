@extends('layouts.navbar')

@section('content')
<div class="min-h-screen py-8 bg-gray-900">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Sidebar -->
      <div class="lg:w-1/4 flex-shrink-0">
        <div class="bg-gray-800 text-white border-l-4 border-green-500 rounded-lg shadow-lg p-6 sticky top-4">
          <h5 class="text-xl font-bold mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            Menu Layanan
          </h5>
          <nav class="space-y-2">
            <a href="{{ route('layanan.filter', 'semua') }}"
              class="block px-4 py-3 rounded-md {{ $activeCategory === 'semua' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-200' }} hover:bg-green-500 transition duration-200 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
              Semua Layanan
            </a>
            <a href="{{ route('layanan.filter', 'layanan-cetak') }}"
              class="block px-4 py-3 rounded-md {{ $activeCategory === 'layanan-cetak' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-200' }} hover:bg-green-500 transition duration-200 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
              </svg>
              Layanan Cetak + Desain
            </a>
            <a href="{{ route('layanan.filter', 'penerbitan-buku') }}"
              class="block px-4 py-3 rounded-md {{ $activeCategory === 'penerbitan-buku' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-200' }} hover:bg-green-500 transition duration-200 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
              Penerbitan Buku
            </a>
          </nav>
        </div>
      </div>

      <!-- Main Content -->
      <div class="lg:w-3/4 flex-grow">
        <div class="bg-gray-800 rounded-xl shadow-xl overflow-hidden border border-gray-700">
          <div class="bg-gradient-to-r from-green-600 to-green-700 p-6">
            <h2 style="color: white;" class="text-2xl font-bold mb-6 text-white flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              Layanan Kami
            </h2>

            <!-- Search Bar -->
            <div class="mb-8">
              <form action="{{ route('layanan.search') }}" method="GET">
                <div class="flex max-w-xl mx-auto">
                  <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <input type="text" name="search" value="{{ request('search') }}" class="block w-full pl-10 pr-3 py-3 border border-gray-600 bg-gray-700 text-white rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Cari layanan...">
                  </div>
                  <button type="submit" class="px-6 py-3 bg-green-500 text-white font-medium rounded-r-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-200">
                    Cari
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- Services Grid -->
          <div class="p-6 bg-gray-800">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
              @foreach ($layananData as $layanan)
              <div class="bg-gray-700 rounded-xl shadow-md overflow-hidden border border-gray-600 transition duration-300 hover:shadow-lg transform hover:-translate-y-1 flex flex-col group">
                <div class="relative overflow-hidden">
                  <img src="{{ $layanan['gambar'] }}" class="w-full h-52 object-cover transition duration-500 group-hover:scale-105" alt="Layanan {{ $layanan['nama'] }}">
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>
                </div>
                <div class="p-5 flex flex-col flex-grow bg-gradient-to-br from-gray-700 to-gray-800">
                  <h5 class="text-xl font-bold mb-3 text-white">{{ $layanan['nama'] }}</h5>
                  <p class="text-gray-300 mb-5 flex-grow">{{ $layanan['deskripsi'] }}</p>
                  <button onclick="orderWhatsApp(this, `{{ $layanan['nama'] }}`)"
                    class="inline-flex cursor-pointer items-center justify-center px-4 py-3 bg-green-600 text-white font-medium rounded-lg hover:bg-green-400 transition duration-200 group-hover:shadow-md">
                    <span id="buttonText">Order via WhatsApp</span>
                    <div id="loading" class="hidden">
                      <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                    </div>
                  </button>
                </div>
              </div>
              @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-10">
              @if ($layananData->hasPages())
              <nav class="flex justify-center gap-2" aria-label="Pagination">
                {{-- Previous Page Link --}}
                @if ($layananData->onFirstPage())
                <span class="px-4 py-2 rounded-md text-gray-500 bg-gray-700 cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </span>
                @else
                <a href="{{ $layananData->previousPageUrl() }}" class="px-4 py-2 rounded-md border border-gray-600 bg-gray-700 text-gray-200 hover:bg-gray-600 hover:border-green-500 transition duration-200 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($layananData->getUrlRange(1, $layananData->lastPage()) as $page => $url)
                @if ($page == $layananData->currentPage())
                <span class="px-4 py-2 rounded-md bg-green-600 text-white font-medium border border-green-600">{{ $page }}</span>
                @else
                <a href="{{ $url }}" class="px-4 py-2 rounded-md border border-gray-600 bg-gray-700 text-gray-200 hover:bg-gray-600 hover:border-green-500 transition duration-200">{{ $page }}</a>
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($layananData->hasMorePages())
                <a href="{{ $layananData->nextPageUrl() }}" class="px-4 py-2 rounded-md border border-gray-600 bg-gray-700 text-gray-200 hover:bg-gray-600 hover:border-green-500 transition duration-200 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </a>
                @else
                <span class="px-4 py-2 rounded-md text-gray-500 bg-gray-700 cursor-not-allowed">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </span>
                @endif
              </nav>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function orderWhatsApp(button, layananNama) {
    const text = button.querySelector('#buttonText');
    const loading = button.querySelector('#loading');

    text.classList.add('hidden');
    loading.classList.remove('hidden');

    const message = `Selamat pagi/siang/malam,

Saya ingin melakukan pemesanan untuk layanan berikut:
*${layananNama}*

Pemesan: 
Nama Produk: ${layananNama}
Ukuran: 
Jumlah: 
Master Design: 

Terima kasih.`;

    setTimeout(() => {
      window.open('https://api.whatsapp.com/send?phone=6282288352595&text=' + encodeURIComponent(message), '_blank');
      text.classList.remove('hidden');
      loading.classList.add('hidden');
    }, 500);
  }
</script>
@endsection