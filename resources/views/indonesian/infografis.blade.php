@extends('layouts.id')

@section('content')
<div class="h-96" style="background: url('https://cts-chitraparatama.co.id/webchitra/img/bg-career.jpg')">
    <div class="w-full h-full flex items-center bg-black bg-opacity-50">
        <div class="lg:px-48 md:px-24 px-12">
            <h5 class="text-6xl font-bold text-white mb-8">Career
            </h5>
            <p class="text-2xl font-semibold text-white mb-8">
                Develop the future through your ideas and together we move towards the future
            </p>
        </div>
    </div>
</div>
{{-- End Hero Section --}}

{{-- Start Section Card --}}
<section id="infografis" class="mx-auto sm:px-32 px-4 sm:py-14 py-3">
    <div class="grid lg:grid-cols-3 grid-cols-2 mx-auto lg:gap-8 gap-4">
        <div class="col-span-3 justify-center items-center text-center">
            <img src="{{ asset('images/404.svg') }}" class="w-96 mx-auto">
            <h1 class="sm:text-2xl text-lg font-semibold text-gray-600 mt-10">
                Halaman atau Pencarian Anda <br> Tidak Ditemukan
            </h1>
        </div>
    </div>
</section>

@endsection