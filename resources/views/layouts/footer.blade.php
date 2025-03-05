<footer class="bg-green-700 text-[#f0f9ff] py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Services -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-xl mb-3">Layanan</h3>
                <ul class="text-sm leading-6">
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Percetakan</a></li>
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Penerbitan</a></li>
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Desain Grafis</a></li>
                </ul>
            </div>

            <!-- About -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-xl   mb-3">Tentang Kami</h3>
                <ul class="text-sm leading-6">
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Company</a></li>
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Team</a></li>
                    <li><a href="#" class="text-gray-200 hover:opacity-80 transition-opacity">Careers</a></li>
                </ul>
            </div>

            <!-- Company Description -->
            <div class="lg:col-span-2">
                <h3 class="font-bold text-xl mb-3 text-center md:text-left">PT. Andalas Publikasi Jaya</h3>
                <p class="text-sm text-gray-200 text-center md:text-left">
                    Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus.
                    Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget
                    velit pulvinar dictum vel in justo.
                </p>
            </div>
        </div>

        <!-- Social Icons -->
        <div class="text-center mt-8">
            <div class="space-x-4">
                <a href="#" class="inline-flex items-center justify-center w-9 h-9  text-white opacity-75 hover:opacity-90 transition-opacity">
                    <x-entypo-facebook class="text-xl"></x-entypo-facebook>
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9  text-white opacity-75 hover:opacity-90 transition-opacity">
                    <x-entypo-twitter class="text-xl"></x-entypo-twitter>
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9  text-white opacity-75 hover:opacity-90 transition-opacity">
                    <x-ri-whatsapp-line class="text-xl" />
                </a>
                <a href="#" class="inline-flex items-center justify-center w-9 h-9  text-white opacity-75 hover:opacity-90 transition-opacity">
                    <x-entypo-instagram class="text-xl"></x-entypo-instagram>
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-6">
            <p class="text-sm text-gray-200">PT. Andalas Publikasi Jaya © {{ date('Y') }}</p>
        </div>
    </div>
</footer>