<!-- Footer -->
<footer class="bg-gradient-to-r from-green-600 to-green-800 text-white py-16">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-12">
      <div class="space-y-4 md:col-span-2">
        <h3 class="text-2xl font-bold mb-6">Andalas Publikasi Jaya</h3>
        <p class="text-green-100">Solusi lengkap untuk kebutuhan percetakan dan penerbitan ISBN dengan kualitas terbaik.</p>
      </div>

      <div class="md:col-span-2">
        <!-- Jam kerja -->
        <div class="bg-gradient-to-br from-green-900/50 to-green-800/30 rounded-xl p-6 border border-green-500/20">
          <h4 class="text-xl font-bold mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Jam Operasional
          </h4>
          <ul class="space-y-4 text-base text-gray-300">
            <li class="flex justify-between">
              <span>Senin - Jumat</span>
              <span>08:00 - 16:30 WIB</span>
            </li>
            <li class="flex justify-between">
              <span>Sabtu</span>
              <span>08:00 - 12:00 WIB</span>
            </li>
            <li class="flex justify-between">
              <span>Minggu</span>
              <span class="text-white">Tutup</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="md:col-span-2">
        <div class="bg-gradient-to-br from-green-900/50 to-green-800/30 p-6 rounded-xl backdrop-blur-sm border border-green-600/20">
          <h3 class="text-xl font-bold mb-4 text-white flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Lokasi Kami
          </h3>

          <div class="w-full h-[300px] rounded-lg overflow-hidden shadow-lg shadow-green-900/20 border border-green-600/20 mb-4">
            @include('layouts.map-location')
          </div>

          <div class="flex items-center justify-between text-sm text-green-100/80">
            <p>PT. Andalas Publikasi Jaya</p>
            <a href="https://maps.google.com/maps?q=-0.9356786873818104,100.36526685649362"
              target="_blank"
              class="flex items-center gap-1 bg-gray- hover:text-green-400 transition-colors">
              <span>Buka di Maps</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Copyright section -->
    <div class="mt-12 pt-8 border-t border-green-500/30 text-center text-green-200">
      <p>Andalas Publikasi Jaya. Layanan Terbaik untuk Anda.</p>
    </div>
  </div>
</footer>