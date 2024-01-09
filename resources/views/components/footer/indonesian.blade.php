<footer class="bg-gray-900 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between md:space-x-8">
            <div class="md:w-1/3 mb-6 md:mb-0 text-gray-500">
                <p class="mt-4 font-semibold text-white">PT. CHITRA PARATAMA Balikpapan
                </p>
                <p>Jln. AMD RT.46/No.69, Kariangau Kel.Graha Indah
                    Balikpapan Utara 76126 Indonesia</p>
                <div class="flex items-center gap-3 mt-3">
                    <i class="fas fa-phone-alt"></i>
                    <span class="text-white">(0542) 7588101</span>
                </div>
                <div class="flex items-center gap-3 mt-3">
                    <i class="far fa-envelope"></i>
                    <span class="text-white">info@chitraparatama.co.id</span>
                </div>
            </div>
            <div class="md:w-2/3 grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-lg font-bold text-white uppercase dark:text-white">Tentang Kami</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <a href="{{ url('tentang-kami/') }}" class="hover:underline">
                                Sejarah
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-bold text-white uppercase dark:text-white">Layanan Kami</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <a href="{{ url('/galeri', []) }}" class="hover:underline">Tire Management


                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/galeri', []) }}" class="hover:underline">Maintenance</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/galeri', []) }}" class="hover:underline">Repair</a>
                        </li>
                        <li>
                            <a href="{{ url('/galeri', []) }}" class="hover:underline">Retread</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-bold text-white uppercase dark:text-white">Produk Kami</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <a href="{{ url('siaran-pers/') }}" class="hover:underline">
                                Earthmover Tire <br> <br>
                                Support Equipment Tire <br><br>
                                Truck & Bus Tire<br class="mb-4"> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">Semua Hak Dilindungi ©
                {{ date('Y') }}
                <a href="{{ url('/', []) }}" class="hover:underline">{{ env('APP_NAME') }}</a>.
            </span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                <a target="_blank" href="#"
                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fab fa-whatsapp fa-lg"></i>
                </a>
                <a target="_blank" href="#"
                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a target="_blank" href="#"
                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a target="_blank" href="#"
                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fab fa-youtube fa-lg"></i>
                </a>
                <a target="_blank" href="mailto:#"
                    class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <i class="fas fa-envelope fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
