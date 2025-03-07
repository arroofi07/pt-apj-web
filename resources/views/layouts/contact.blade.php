<section id="contact" class="py-6 xs:py-8 sm:py-12 md:py-16 lg:py-20">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 md:gap-12">
      <!-- Kolom Kiri: Informasi Kontak -->
      <div class="flex flex-col w-full">
        <div class="text-center mb-8">
          <span class="inline-block text-green-400 font-bold uppercase tracking-wider text-xs xs:text-sm bg-green-400/10 px-3 py-1 rounded-full">
            Kontak Kami
          </span>
          <h2 style="color: white;" class="text-2xl xs:text-3xl sm:text-4xl lg:text-5xl font-bold mt-3 mb-4 text-white">
            Mari Diskusikan Proyek Anda
          </h2>
          <p class="text-sm xs:text-base sm:text-lg text-gray-300 mb-6">
            Kami siap membantu mewujudkan ide kreatif Anda menjadi karya nyata.
          </p>
        </div>

        <div class="space-y-6 w-full max-w-md">
          <!-- Lokasi -->
          <div class="flex items-start space-x-4 transform transition-transform hover:translate-x-2">
            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-shrink-0 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white shadow-lg">
              <x-entypo-location class="w-5 h-5 sm:w-6 sm:h-6" />
            </div>
            <div>
              <h4 class="text-base sm:text-lg font-bold text-white">Lokasi</h4>
              <p class="text-xs sm:text-sm text-gray-300">
                Jalan Situjuh No. 1 Padang, Sumatera Barat - 25129
              </p>
            </div>
          </div>

          <!-- Telepon -->
          <div class="flex items-start space-x-4 transform transition-transform hover:translate-x-2">
            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-shrink-0 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white shadow-lg">
              <x-entypo-phone class="w-5 h-5 sm:w-6 sm:h-6" />
            </div>
            <div>
              <h4 class="text-base sm:text-lg font-bold text-white">Telepon</h4>
              <p class="text-xs sm:text-sm text-gray-300">0822-8835-2595</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start space-x-4 transform transition-transform hover:translate-x-2">
            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-shrink-0 flex items-center justify-center rounded-full bg-gradient-to-br from-green-400 to-green-600 text-white shadow-lg">
              <x-entypo-mail class="w-5 h-5 sm:w-6 sm:h-6" />
            </div>
            <div>
              <h4 class="text-base sm:text-lg font-bold text-white">Email</h4>
              <p class="text-xs sm:text-sm text-gray-300">cebitunand@gmail.com</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Kolom Kanan: Form Kontak -->
      <div>
        <div class="w-full  bg-gradient-to-br from-gray-700 to-gray-800 rounded-2xl p-4 sm:p-6 md:p-8 shadow-2xl border-2 border-green-400/50 hover:border-green-400 transition-all duration-300">
          <form>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-4">
              <div>
                <input
                  type="text"
                  class="w-full px-3 py-2 sm:px-4 sm:py-3 text-xs text-white sm:text-base placeholder:text-white/60 bg-white/5 border border-green-400/50 rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400 outline-none transition-all"
                  placeholder="Nama Lengkap">
              </div>
              <div>
                <input
                  type="email"
                  class="w-full px-3 py-2 sm:px-4 sm:py-3 text-xs text-white sm:text-base placeholder:text-white/60 bg-white/5 border border-green-400/50 rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400 outline-none transition-all"
                  placeholder="Email">
              </div>
            </div>
            <div class="mb-4">
              <input
                type="text"
                class="w-full px-3 py-2 sm:px-4 sm:py-3 text-xs text-white sm:text-base placeholder:text-white/60 bg-white/5 border border-green-400/50 rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400 outline-none transition-all"
                placeholder="Subjek">
            </div>
            <div class="mb-4">
              <textarea
                rows="4"
                class="w-full px-3 py-2 sm:px-4 sm:py-3 text-xs text-white sm:text-base placeholder:text-white/60 bg-white/5 border border-green-400/50 rounded-lg focus:ring-2 focus:ring-green-400 focus:border-green-400 outline-none transition-all"
                placeholder="Pesan Anda"></textarea>
            </div>
            <button
              type="submit"
              class="w-full bg-gradient-to-r from-green-600 to-green-400 hover:from-green-500 hover:to-green-300 text-white font-medium py-2 sm:py-3 text-xs sm:text-base rounded-lg transition-all transform hover:-translate-y-1 hover:shadow-lg hover:shadow-green-400/20">
              Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>