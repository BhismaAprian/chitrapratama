@extends('layouts.en')

@section('content')
<div class="relative h-72 w-full bg-black flex justify-center align-items-center"
    style="display: flex; align-items: center;">
    <div class="text-center">
        <div class="text-2xl font-bold text-white mb-4">
            Tentang Kami
        </div>
        <div class="text-gray-300 text-xs">
            Beranda / Tentang Kami / {{ $data->title }}
        </div>
    </div>
    <div class="w-10 h-10 flex absolute bottom-0">
        <a href="#tentang-kami" class="m-auto">
            <svg class="w-3 h-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 8">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
            </svg>
        </a>
    </div>
</div>
{{-- End Hero Section --}}

<section id="tentang-kami" class="2xl:px-96 2xl:py-16 xl:px-72 xl:py-12 lg:px-48 lg:py-8 md:px-24 md:py-8 px-12 py-4">
    <h3 class="text-3xl font-bold text-black mb-4">
        {{ $data->title }}
    </h3>
    <div class="unreset">
        {!! $data->content !!}
    </div>
</section>
@endsection
