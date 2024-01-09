@extends('layouts.en')

@section('content')
<section class="sm:h-screen h-full w-full">
    <div class="h-screen bg-no-repeat bg-center relative"
        style="background: url('{{ asset('storage/'. $data->image) }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center">
            <div class="lg:px-48 md:px-24 px-12 py-10">
                <h5 class="sm:text-3xl text-xl font-bold text-white mb-8">
                    {{ $data->title }}
                </h5>
                <p class="font-normal text-white sm:text-base text-xs mb-8">
                    {{ $data->created_at->diffForHumans() }} BY {{ $data->publisher }}
                </p>
                <a href="#detail"
                    class="text-white border border-white hover:bg-white hover:text-black focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-white dark:text-white dark:hover:text-white dark:focus:ring-white dark:hover:bg-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="detail">
    <div class="2xl:px-96 2xl:py-16 xl:px-72 xl:py-12 lg:px-48 lg:py-8 md:px-24 md:py-8 px-12 py-4 prose">
        {!! $data->content !!}
    </div>
</section>
@endsection