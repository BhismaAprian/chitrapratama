@extends('layouts.en')

@section('content')
<div class="relative h-72 w-full bg-black flex justify-center align-items-center"
    style="display: flex; align-items: center;">
    @if (request()->is('en/*'))
    <div class="text-center">
        <div class="text-2xl font-bold text-white mb-4">
            Video
        </div>
        <div class="text-gray-300 text-xs">
            Home / Video / {{ isset($_GET['keyword']) && $_GET['keyword'] != '' ? 'Search /
            '.$_GET['keyword'] :
            'Newest' }}
        </div>
    </div>
    @else
    <div class="text-center">
        <div class="text-2xl font-bold text-white mb-4">
            Video
        </div>
        <div class="text-gray-300 text-xs">
            Beranda / Video / {{ isset($_GET['cari']) && $_GET['cari'] != '' ? 'Pencarian /
            '.$_GET['cari'] :
            'Terbaru' }}
        </div>
    </div>
    @endif
    <div class="w-10 h-10 flex absolute bottom-0">
        <a href="#video" class="m-auto">
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
<section id="video" class="mx-auto sm:px-32 px-4 sm:py-14 py-3">
    <div class="grid lg:grid-cols-3 grid-cols-1 mx-auto lg:gap-8 gap-4">
        @foreach($videos as $video)
        <div class="max-w-sm bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-2xl" src="{{ asset('storage/'. $video->image) }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $video->title }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $video->created_at->diffForHumans() }}
                </p>
                <a href="{{ $video->link }}" target="_blank"
                    class="block px-3 py-2 text-sm font-medium text-center text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                    Tonton Video
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection