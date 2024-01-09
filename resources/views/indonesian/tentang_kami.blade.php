@extends('layouts.id')

@section('content')
    <div class="h-96" style="background: url('https://cts-chitraparatama.co.id/webchitra/img/aboutus2.jpg')">
        <div class="w-full h-full flex items-center bg-black bg-opacity-50">
            <div class="lg:px-48 md:px-24 px-12">
                <h5 class="text-6xl font-bold text-white mb-8">About Us
                </h5>
                <p class="text-1xl font-semibold text-white mb-8">
                    PT Chitra Paratama is the sole importer for Michelin (earthmover series) tires in Indonesia. The Company
                    has since grown to provide other products supporting, such as wheels & rims, tire handler, tools &
                    accessories with a number of leading brands in its product line and currently provides integrated
                    solutions for tires including repair, retread, service & tire management. </p>
            </div>
        </div>
    </div>
    {{-- End Hero Section --}}

    <section id="tentang-kami" class="2xl:px-56 2xl:py-16 xl:px-72 xl:py-12 lg:px-48 lg:py-8 md:px-24 md:py-8 px-12 py-4">
        <div class="flex flex-nowrap items-center justify-between">
            <img class="h-56  rounded-lg shadow-xl dark:shadow-gray-800"
                src="https://cts-chitraparatama.co.id/webchitra/admin/images/aboutus3.jpg" alt="image description">


            <div id="accordion-open" data-accordion="open" class="w-full md:w-1/2 mb-4 md:mb-0">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> History</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">PT Chitra Paratama (Company) is subsidiary of PT
                            Mahadana Dasha Utama (Mahadasha), part of PT Tiara Marga Trakindo Group (TMT Group). Commencing
                            its operation since 1993, Perusahaan in its early is part of the tire business unit division
                            named PT Trakindo Utama. In 1996, Perusahaan was appointed as a sole agent of tire Michelin
                            earthmover in Indonesia, and then it was established as a separate company on February 18th,
                            2000.
                        </p>

                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>Core Values</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Integrity
                            We enforce the highest ethical and moral standards, demonstrating honesty and fairness in all
                            activities
                            Continuous Development
                            We are committed to continuously developing both our companies and employees
                            Excellence
                            We countinuously strive to achieve the highest standar of result
                            Proactive
                            We pursue and adopt new techniques and approaches to improve our business quality
                            Accountability
                            We assume responsibility to stakeholders for all the decisions and action taken
                            Teamwork
                            We promote and support a multicultural workforce based on trust and respect, achieving goals by
                            communicationg appropriately</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex flex-nowrap items-center justify-between">
            <div class="p-5 border-l border-red-800 ms-5">
            <p
                class="mb-3 me-5 text-1xl text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">
                Management
                <br>
                <br>
                "As one of the most complete tire solution providers, The Company always exerts its best to improve the
                comprehensive service and keep on innovating to fulfill customers’ need. The Company is always dynamic in
                managing and running its business, willing to learn, fast in adapting to the industrial change or market
                condition thereby able to provide high quality and prime products and service to the customers."
                <br>
                <br>
                "Series of product and service offered by the Company as the most complete tire solution supplier in
                Indonesia ie providing tire, rim, tire tools, and accessories, repair service and tire retread, tire service
                management, as well as tire handler product."
            </p>
        </div>

            <img class="h-96  rounded-lg shadow-xl dark:shadow-gray-800"
                src="https://cts-chitraparatama.co.id/webchitra/admin/images/13112020054021Foto%20Bapak%20Herry%20Herman.png"
                alt="image description">

        </div>
        <div class=" mt-4">

            <div class="flex flex-nowrap items-center justify-between">
                <img class="ms-3 h-56  rounded-lg shadow-xl dark:shadow-gray-800"
                    src="https://cts-chitraparatama.co.id/webchitra/admin/images/14072022073759safety%201ikeee.jpg"
                    alt="image description">
                    <div class="p-5 border-l border-red-800 ms-5">

                <p
                    class="mb-3 ms-3 me-5 text-1xl text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">
                    Health, Safety & Environment

                    <br>
                    <br>
                    With the Occupational Safety & Health, Environment and Security (K3LK) Policy, PT Chitra Paratama is
                    determined and committed to achieve performance standards in the field of K3LK Management throughout its
                    working area as the company of choice for the most complete tire solution provider in Indonesia
                </p>

                    </div>


            </div>
        </div>
    </section>
@endsection
