@extends('layouts.en')

@section('content')
<div class="relative h-72 w-full bg-black flex justify-center align-items-center"
    style="display: flex; align-items: center;">
    <div class="text-center">
        <div class="text-2xl font-bold text-white mb-4">
            Product Knowladge - Book
        </div>
        <div class="text-gray-300 text-xs">
            Home / Product Knowladge / Book / {{ isset($_GET['search']) && $_GET['search'] != '' ? 'Search /
            '.$_GET['search'] :
            'Newest' }}
        </div>
    </div>
    <div class="w-10 h-10 flex absolute bottom-0">
        <a href="#book" class="m-auto">
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
<section id="book" class="mx-auto sm:px-32 px-4 sm:py-14 py-3">
    <div class="grid lg:grid-cols-3 grid-cols-2 mx-auto lg:gap-8 gap-4">
        @forelse($bukus as $buku)
        <div
            class="transform scale-100 hover:scale-105 transition-transform duration-300 ease-in-out my-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 group">
            <a href="{{ url('buku/'.$buku->slug) }}" class="relative overflow-hidden">
                <img class="rounded-t-lg" src="{{ asset('storage/'. $buku->image) }}" alt="" />
            </a>
            <div class="sm:p-7 p-4">
                <a href="{{ url('buku/'.$buku->slug) }}">
                    <h5
                        class="mb-2 lg:text-2xl hover:text-red-500 text-sm font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $buku->title }}
                    </h5>
                </a>
                <p class="mb-3 font-normal lg:text-base text-xs text-gray-600 dark:text-gray-400">
                    {!! Str::limit($buku->content, 75, '...') !!}
                </p>
                <div class="py-[0.5px] bg-gray-200 sm:mt-5 mt-3"></div>

                <div class="flex items-center sm:mt-5 mt-3 gap-3 sm:text-base text-xs">
                    <i class="fas fa-user-edit fa-lg"></i>
                    <span class="font-semibold">by {{ $buku->publisher }}</span>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-3 justify-center items-center text-center">
            <img src="{{ asset('images/404.svg') }}" class="w-96 mx-auto">
            <h1 class="sm:text-2xl text-lg font-semibold text-gray-600 mt-10">
                Your Page or Search <br> Not Found
            </h1>
        </div>
        @endforelse
    </div>
</section>

@endsection