<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<section id="box-video" class="container mt-14 md:mt-24 lg:mt-24 mx-auto w-[90%] xs:w-[90%] sm:w-full md:w-[95%] lg:w-[95%] px-4 sm:px-6 lg:px-8 my-4 xs:my-6 sm:my-8 md:my-10">

  <div class="bg-gray-800  backdrop-blur-md border-2 border-green-600 transition duration-300 hover:shadow-lg rounded-xl p-6 xs:p-8 sm:p-10  hover:shadow-green-400/40">
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

  <div class="flex justify-center items-center mt-4  ">
    <div class="flex space-x-8 md:space-x-28 animate-scroll justify-center items-center">
      <!-- Group 1 -->
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-photoshop.png') }}" alt="Code" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Photoshop</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/corel-draw.png') }}" alt="Laptop" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Corel Draw</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-ilustrator.png') }}" alt="Mobile" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Ilustrator</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-indesign.png') }}" alt="Database" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Indesign</p>
      </div>
      <!-- Group 2 (Duplicate untuk efek infinite scroll) -->
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-photoshop.png') }}" alt="Code" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Photoshop</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/corel-draw.png') }}" alt="Mobile" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Corel Draw</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-ilustrator.png') }}" alt="Database" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Ilustrator</p>
      </div>
      <div class="flex-shrink-0 flex flex-col items-center">
        <img src="{{ asset('apps-icons/adobe-indesign.png') }}" alt="Laptop" class="w-10 h-10 md:w-16 md:h-16">
        <p class="text-gray-300 hidden md:block mt-2 text-sm xs:text-base sm:text-lg">Adobe Indesign</p>
      </div>
    </div>
  </div>

</section>

<style>
  .animate-scroll {
    animation: scroll 30s linear infinite;
    min-width: max-content;
    width: 100%;
  }

  @keyframes scroll {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(calc(-50% - 1rem));
      /* Menggeser setengah konten + sedikit spacing */
    }
  }

  /* Tambahkan overflow hidden pada container untuk menyembunyikan scrollbar */
  #box-video {
    overflow: hidden;
  }
</style>