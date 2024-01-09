@extends('layouts.en')

@section('content')
<div class="relative h-72 w-full bg-black flex justify-center align-items-center"
    style="display: flex; align-items: center;">
    <div class="text-center">
        <div class="text-2xl font-bold text-white mb-4">
            Gallery
        </div>
        <div class="text-gray-300 text-xs">
            Home / Gallery / Newest
        </div>
    </div>
    <div class="w-10 h-10 flex absolute bottom-0">
        <a href="#gallery" class="m-auto">
            <svg class="w-3 h-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 8">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
            </svg>
        </a>
    </div>
</div>
{{-- End Hero Section --}}

{{-- Start Section Card --}}
<section id="gallery" class="mx-auto sm:px-32 px-4 sm:py-14 py-3">
    <div class="grid lg:grid-cols-4 grid-cols-2 mx-auto lg:gap-8 gap-4">
        @foreach($galeris as $galeri)
        <div
            class="transform scale-100 hover:scale-105 transition-transform duration-300 ease-in-out my-4 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700 self-start">
            <a data-fancybox="gallery" href="{{ asset('storage/'. $galeri->image) }}">
                <img class="rounded-xl" src="{{ asset('storage/'. $galeri->image) }}" alt="" />
            </a>
        </div>
        @endforeach
    </div>
</section>

@endsection