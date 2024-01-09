@extends('layouts.id')

@section('content')
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[610px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>

                    <img src="https://cts-chitraparatama.co.id/webchitra/img/slides/slitslider/12.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
                    </div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-50 text-center">
                        <h1 class="text-8xl">Our Track Record Speak For Itself</h1>
                        <h3 class="text-2xl font-bold">Our more than 17 years of exprience in tire management will maximize
                            your tire lifetime and productivity.

                        </h3>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://cts-chitraparatama.co.id/webchitra/img/slides/slitslider/13.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
                    </div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-50 text-center">
                        <h1 class="text-8xl">Bring Tire Planning To Your Company</h1>
                        <h3 class="text-2xl font-bold">With our certified engineer, we scheduled and planning your tire
                            needed to eliminate tire shortages also reduce operational cost.

                        </h3>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://cts-chitraparatama.co.id/webchitra/img/slides/slitslider/14.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
                    </div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-50 text-center">
                        <h1 class="text-8xl">Full Maintenance To Your Valuable Tire</h1>
                        <h3 class="text-2xl font-bold">Our highly trained service team will make sure your tires keep in
                            touch and running on peak performance.

                        </h3>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://cts-chitraparatama.co.id/webchitra/img/slides/slitslider/15.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
                    </div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-50 text-center">
                        <h1 class="text-8xl">Maximal Lifetime To Fullfill Your Target</h1>
                        <h3 class="text-2xl font-bold">Our skillfull repair team will improve tire lifetime by providing
                            preventive repair.

                        </h3>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://cts-chitraparatama.co.id/webchitra/img/slides/slitslider/16.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div
                        class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
                    </div>
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-50 text-center">
                        <h1 class="text-8xl">
                            Supply Your Tire And Acessories Needed</h1>
                        <h3 class="text-2xl font-bold">Our specialist will make sure you get what you need, whether you are
                            operating in jungle with muddy terrain or in the rocky mountain.

                        </h3>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
        </div>


        {{-- Start Campaign --}}
        <div class="flex justify-center align-items-center text-center mt-10">
            <div class="bungkus">
                <div class="font-bold text-4xl">Campaign</div>
                <div class="text-center border-t border-2 border-red-400 my-2 w-full"></div>
                
            </div>
            
        </div>
        <div class="flex justify-center align-items-center text-center my-10 mx-auto max-w-6xl">
            <div class="flex flex-col">
            <p
                class="mb-3 text-2xl text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">
                Initially established in 1999 as a supporting company for the TMT Group, PT Chitra Paratama (Chitra) is the
                sole importer for Michelin (earthmover series) tires in Indonesia. The Company has since grown to provide
                other products supporting, such as wheels & rims, tire handler, tools & accessories with a number of leading
                brands in its product line and currently provides integrated solutions for tires including repair, retread,
                service & tire management.
            </p>
            <video class="w-full mt-5" controls>
                <source src="https://cts-chitraparatama.co.id/webchitra/WEB%20Consume.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
        </div>
        {{-- End Campaign --}}
        <div class="sm:flex justify-center align-items-center sm:space-x-4 my-24">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-auto max-w-full"
                        src="https://cts-chitraparatama.co.id/webchitra/admin/images/0912202208595812012021025403TM.jpg"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tire Management
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">We do not only provide products that
                        are goods, but also provide service products. This is to meet customer needs in replacing tires
                        on the unit</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-64" src="https://cts-chitraparatama.co.id/webchitra/admin/images/repair3.jpg"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Maintenance Team
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">To support our costumer need, we provide
                        fully skilled and trained maintenance team. Our on-site tire service management has been proved as
                        the best supportavailable in the market.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-64" src="https://cts-chitraparatama.co.id/webchitra/admin/images/supply.jpg"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Supply
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Retread is one of our products to meet the
                        needs of customers who want to maximize tire life by creating a new pattern on the tire tread

                    </p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-red-500 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>


        <!-- Slider controls -->
        <i class="ri-separator"></i>

        <div class="mx-auto sm:px-40 px-4 sm:py-20 py-3">
            <div class="grid sm:grid-cols-4 grid-cols-1 sm:gap-6 gap-3">
                <div class="justify-items-start">
                    <div class="flex flex-row">
                        <h2 class="text-3xl me-1">Latest</h2>
                        <h2 class="text-3xl font-bold">News</h2>
                    </div>

                </div>


            </div>
            <div class="flex flex-row">
                <div class="flex flex-col max-w-sm me-2">
                    <p class="font-light mt-4">14 Desember 2024</p>
                    <h2 class="text-2xl font-bold mb-4">Annual meeting Chitra paratama, Michelin dan Putra Perkasa Abadi Group
                    </h2>
                    <div class="flex flex-row">
                        <img class="h-36 max-w-full" src="https://cts-chitraparatama.co.id/webchitra/admin/images/news/19122023142801ppa1.jpg" alt="image description">
                        <div class="flex flex-col">
                            <p class="font-light ms-2">Excellence Synergy Partnership merupakan tema dari annual meeting tire antara Ch...</p>
                        <a class="ms-2" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col max-w-sm me-2">
                    <p class="font-light mt-4">7 Juli 2023</p>
                    <h2 class="text-2xl font-bold mb-4">Trakindo Roadshow
                    </h2>
                    <div class="flex flex-row">
                        <img class="h-36 max-w-full" src="https://thumb.viva.id/vivamedan/1265x711/2023/05/25/646f43ee6f135-general-manager-sumatra-area-trakindo-palti-timeyer-hutajulu_medan.jpg" alt="image description">
                        <div class="flex flex-col">
                            <p class="font-light ms-2">Trakindo Roadshow merupakan salah satu event yang di adakan oleh PT. Trakindo Utama.. </p>
                        <a class="ms-2" href="#">Read More</a>
                        </div>
                        
                    </div>

                </div>
                <div class="flex flex-col max-w-sm me-2">
                    <p class="font-light mt-4">14 Desember 2024</p>
                    <h2 class="text-2xl font-bold mb-4">Annual meeting Chitra paratama, Michelin dan Putra Perkasa Abadi Group
                    </h2>
                    <div class="flex flex-row">
                        <img class="h-36 max-w-full" src="https://cts-chitraparatama.co.id/webchitra/admin/images/news/19052023074513news8.jpg" alt="image description">
                        <div class="flex flex-col">
                            <p class="font-light ms-2">Excellence Synergy Partnership merupakan tema dari annual meeting tire antara Ch...</p>
                        <a class="ms-2" href="#">Read More</a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    @endsection
    {{-- <div class="flex flex-nowrap items-center justify-between">
        <div class="columns-6">
            <p class="font-light mt-4">14Desember2024</p>
        </div>
        <div class="columns-6">
            <h4>AAAA</h4>
        </div>
        <div class="columns-6">
            <h4>AAAA</h4>
        </div>
    </div> --}}
