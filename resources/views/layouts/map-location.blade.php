<div id="map-nih" class="relative border-2 border-green-500 rounded-xl">
  <!-- Map Container with improved styling -->
  <div class="w-full h-[500px] rounded-xl overflow-hidden shadow-lg relative" id="map"></div>

  <!-- Floating Card with Location Details -->
  <!-- <div class="absolute  top-4 left-4 bg-gradient-to-r from-gray-600 to-gray-700  p-6 rounded-xl shadow-lg max-w-sm z-[999] backdrop-blur-sm ">
    <h3 class="text-xl font-semibold text-white mb-2">PT. Andalas Publikasi Jaya</h3>
    <p class="text-white mb-4">PT Andalas Publikasi Jaya, Padang, Sumatera Barat</p> -->

  <!-- Direction Buttons -->
  <!-- <div class="flex gap-3 bg-gradient-to-r ">
      <a href="https://maps.google.com/maps?q=-0.9356786873818104,100.36526685649362"
        target="_blank"
        class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300 shadow-md hover:shadow-lg">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        Buka di Google Maps
      </a>
    </div>
  </div> -->
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize the map
    var map = L.map('map', {
      zoomControl: false, // Disable default zoom control
    }).setView([-0.9356786873818104, 100.36526685649362], 16);

    // Add custom zoom control to the right
    L.control.zoom({
      position: 'bottomright'
    }).addTo(map);

    // Add OpenStreetMap tiles with custom styling
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: 'NAA'
    }).addTo(map);

    // Custom marker icon
    var customIcon = L.divIcon({
      className: 'custom-div-icon',
      html: `<div class="marker-pin"></div>`,
      iconSize: [30, 42],
      iconAnchor: [15, 42]
    });

    // Add a marker
    var marker = L.marker([-0.9356786873818104, 100.36526685649362], {
      icon: customIcon
    }).addTo(map);

    // Add a popup to the marker
    marker.bindPopup(`
            <div class="custom-popup">
                <h4 class="font-semibold">PT. Andalas Publikasi Jaya</h4>
                <p class="text-sm text-gray-600">Percetakan dan Penerbitan Universitas Andalas</p>
            </div>
        `);
  });
</script>

<style>
  .custom-div-icon {
    background: transparent;
    border: none;
  }

  .marker-pin {
    width: 30px;
    height: 30px;
    border-radius: 50% 50% 50% 0;
    background: #22c55e;
    /* warna hijau */
    position: absolute;
    transform: rotate(-45deg);
    left: 50%;
    top: 50%;
    margin: -15px 0 0 -15px;
    animation: bounce 0.5s ease-in-out infinite alternate;
  }

  .marker-pin::after {
    content: '';
    width: 14px;
    height: 14px;
    margin: 8px 0 0 8px;
    background: #fff;
    position: absolute;
    border-radius: 50%;
  }

  @keyframes bounce {
    from {
      transform: rotate(-45deg) translateY(0);
    }

    to {
      transform: rotate(-45deg) translateY(-5px);
    }
  }

  .custom-popup {
    padding: 10px;
  }

  .custom-popup h4 {
    margin: 0 0 5px;
    color: #333;
  }

  .custom-popup p {
    margin: 0;
  }
</style>