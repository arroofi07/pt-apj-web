<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<section id="box-video" class="container mt-14 md:mt-24 lg:mt-24 mx-auto w-[90%] xs:w-[90%] sm:w-full md:w-[95%] lg:w-[95%] px-4 sm:px-6 lg:px-8 my-4 xs:my-6 sm:my-8 md:my-10">

  <div class=" bg-gradient-to-br from-gray-700 to-gray-800 border-2 border-green-600 transition duration-300 hover:shadow-lg rounded-xl p-6 xs:p-8 sm:p-10  hover:shadow-green-400/40">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 xs:gap-8 sm:gap-10 items-center">
      <div class="col-span-1 w-[95%] xs:w-full mx-auto">
        <div class="video-container relative rounded-xl overflow-hidden shadow-2xl aspect-video transform transition-transform duration-300 hover:scale-[1.02]">
          <video id="promoVideo" class="w-full h-full object-cover" autoplay muted playsinline>
            <source src="{{ asset($promoData[0]['video_url']) }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="video-overlay absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
      </div>


      <div id="promoContent" class="col-span-1 w-[95%] xs:w-full mx-auto px-2 xs:px-4 sm:px-0">
        <h2 style="color: white" class="text-xl xs:text-2xl sm:text-3xl md:text-4xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">
          {{ $promoData[0]['title'] }}
        </h2>
        <p class="text-gray-300 mb-6 text-sm xs:text-base sm:text-lg leading-relaxed">
          {{ $promoData[0]['description'] }}
        </p>
      </div>
    </div>
  </div>
  <!-- Tool Showcase Section -->
  <div class="mt-20 text-center">
    <h3 class="text-xl sm:text-2xl font-semibold text-white mb-8">Tools We Use</h3>
    <div class="relative w-full mx-auto overflow-hidden">
      <div class="flex justify-center items-center">
        <div class="flex space-x-12 md:space-x-16 md:mt-8 lg:space-x-24 animate-scroll">
          <!-- Tools Group 1 -->
          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-photoshop.png') }}" alt="Adobe Photoshop" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe Photoshop</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/corel-draw.png') }}" alt="Corel Draw" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Corel Draw</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-ilustrator.png') }}" alt="Adobe Illustrator" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe Illustrator</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-indesign.png') }}" alt="Adobe InDesign" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe InDesign</p>
          </div>

          <!-- Tools Group 2 (Duplicate for infinite scroll) -->
          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-photoshop.png') }}" alt="Adobe Photoshop" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe Photoshop</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/corel-draw.png') }}" alt="Corel Draw" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Corel Draw</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-ilustrator.png') }}" alt="Adobe Illustrator" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe Illustrator</p>
          </div>

          <div class="tool-item group">
            <div class="w-16 h-16 md:w-20 md:h-20 bg-slate-800/80 rounded-xl p-3 flex items-center justify-center mb-3 shadow-lg group-hover:bg-slate-700 transition-all duration-300 mx-auto border border-slate-700">
              <img src="{{ asset('apps-icons/adobe-indesign.png') }}" alt="Adobe InDesign" class="w-10 h-10 md:w-12 md:h-12">
            </div>
            <p class="text-gray-300 group-hover:text-white text-sm md:text-base transition-colors duration-300">Adobe InDesign</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .animate-scroll {
    animation: scroll 40s linear infinite;
    min-width: max-content;
  }

  @keyframes scroll {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(calc(-50%));
    }
  }

  .tool-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 120px;
    transition: all 0.3s ease;
  }

  .tool-item:hover {
    transform: translateY(-5px);
  }


  /* Tambahkan overflow hidden pada container untuk menyembunyikan scrollbar */
  #box-video {
    overflow: hidden;
  }
</style>