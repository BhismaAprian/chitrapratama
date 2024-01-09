@extends('layouts.en')

@section('content')

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-52 overflow-hidden md:h-[610px]">
        @foreach ($siarans as $siaran)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/'. $siaran->image) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
            </div>
            <div class="absolute sm:bottom-10 bottom-4 left-20 text-white z-50">
                <h5 class="">{{ $siaran->created_at->diffForHumans() }}</h5>
                <h3 class=" text-2xl font-bold">{{ $siaran->title }}</h3>
                <a href="{{ url('siaran-pers/'. $siaran->slug) }}"
                    class=" bg-red-500 hover:bg-red-600 rounded-full py-2 px-4 mt-2 inline-block">
                    See Detail
                </a>
            </div>
        </div>
        @endforeach
        @foreach ($laporans as $laporan)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/'. $laporan->image) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
            </div>
            <div class="absolute sm:bottom-10 bottom-4 left-20 text-white z-50">
                <h5 class="">{{ $laporan->created_at->diffForHumans() }}</h5>
                <h3 class=" text-2xl font-bold">{{ $laporan->title }}</h3>
                <a href="{{ url('laporan/'. $laporan->slug) }}"
                    class=" bg-red-500 hover:bg-red-600 rounded-full py-2 px-4 mt-2 inline-block">
                    See Detail
                </a>
            </div>
        </div>
        @endforeach
        @foreach ($bukus as $buku)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/'. $buku->image) }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black/70 via-black/40 to-black/10">
            </div>
            <div class="absolute sm:bottom-10 bottom-4 left-20 text-white z-50">
                <h5 class="">{{ $buku->created_at->diffForHumans() }}</h5>
                <h3 class=" text-2xl font-bold">{{ $buku->title }}</h3>
                <a href="{{ url('buku/'. $buku->slug) }}"
                    class=" bg-red-500 hover:bg-red-600 rounded-full py-2 px-4 mt-2 inline-block">
                    See Detail
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="mx-auto sm:px-32 px-4 sm:py-20 py-3">
    <div class="grid sm:grid-cols-4 grid-cols-1 sm:gap-6 gap-3">
        <div class="mt-10 sm:mt-0">
            <h1 class="font-bold sm:text-3xl text-2xl sm:mb-4 mb-2">Prees Release</h1>
            <div class="sm:py-[1px] py-[0.5px] bg-red-500 sm:w-1/3 w-1/5"></div>
            @foreach ($siarans as $siaran)
            <div class="grid grid-cols-3 sm:gap-3 gap-2 sm:mt-10 mt-5">
                <img src="{{ asset('storage/'. $siaran->image) }}" class="w-full rounded-xl col-span-1">
                <div class="col-span-2">
                    <a href="{{ $siaran->slug }}" class="sm:text-base text-lg hover:text-red-500 font-semibold">
                        {{ $siaran->title }}
                    </a>
                    <p class="sm:text-sm text-sm text-gray-500 sm:mt-3 mt-5">
                        {{ $siaran->created_at->diffForHumans() }}
                    </p>
                    <div class="py-[0.5px] bg-gray-200 sm:mt-8 mt-5"></div>
                </div>
            </div>

            @endforeach
        </div>
        <div class="">
            <h1 class="font-bold sm:text-3xl text-2xl sm:mb-4 mb-2">Report</h1>
            <div class="sm:py-[1px] py-[0.5px] bg-red-500 sm:w-1/3 w-1/5"></div>
            @foreach ($laporans as $laporan)
            <div class="grid grid-cols-3 sm:gap-3 gap-2 sm:mt-10 mt-5">
                <img src="{{ asset('storage/'. $laporan->image) }}" class="w-full rounded-xl col-span-1">
                <div class="col-span-2">
                    <a href="{{ url('laporan/'.$laporan->slug) }}"
                        class="sm:text-base text-lg hover:text-red-500 font-semibold">
                        {{ $laporan->title }}
                    </a>
                    <p class="sm:text-sm text-sm text-gray-500 sm:mt-3 mt-5">
                        {{ $laporan->created_at->diffForHumans() }}
                    </p>
                    <div class="py-[0.5px] bg-gray-200 sm:mt-8 mt-5"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="">
            <h1 class="font-bold sm:text-3xl text-2xl sm:mb-4 mb-2">Book</h1>
            <div class="sm:py-[1px] py-[0.5px] bg-red-500 sm:w-1/3 w-1/5"></div>
            @foreach ($bukus as $buku)
            <div class="grid grid-cols-3 sm:gap-3 gap-2 sm:mt-10 mt-5">
                <img src="{{ asset('storage/'. $buku->image) }}" class="w-full rounded-xl col-span-1">
                <div class="col-span-2">
                    <a href="{{ url('buku/'. $buku->slug )}}"
                        class="sm:text-base text-lg hover:text-red-500 font-semibold">
                        {{ $buku->title }}
                    </a>
                    <p class="sm:text-sm text-sm text-gray-500 sm:mt-3 mt-5">
                        {{ $buku->created_at->diffForHumans() }}
                    </p>
                    <div class="py-[0.5px] bg-gray-200 sm:mt-8 mt-5"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="">
            <h1 class="font-bold sm:text-3xl text-2xl sm:mb-4 mb-2">Gallery</h1>
            <div class="sm:py-[1px] py-[0.5px] bg-red-500 sm:w-1/3 w-1/5"></div>
            <div class="grid grid-cols-2 sm:gap-6 gap-3 sm:mt-10 mt-5">
                @foreach ($galeris as $galeri)
                <img src="{{ asset('storage/'. $galeri->image) }}" class="w-full rounded-xl col-span-1">
                @endforeach
            </div>
            @if ($galeris)
            <a href="{{ url('/galeri', []) }}"
                class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-3 sm:mt-8 mt-4 text-center flex items-center justify-center gap-4 w-full dark:bg-gray-600 dark:hover:bg-gray-900 dark:focus:ring-gray-800">
                <span>See More</span>
            </a>
            @endif
        </div>
    </div>
</div>
@endsection