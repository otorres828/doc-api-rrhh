@extends('layouts.base')
@section('title', 'Documentacion')
@section('main')
    <div class="bg-white font-sans leading-normal">
        {{-- CUERPO --}}
        <div class=" text-gray-700 py-10">
            <div class="grid md:grid-flow-col  px-7 sm:px-16 md:px-10 lg:px-28 ">
                <div class=" md:w-1/4  ">
                    <div class="max-w-md md:float-left md:text-left leading-loose tracking-tight md:sticky md:top-0 ">
                        <p class="py-3  font-bold break-normal text-2xl md:text-4xl">Documentacion</p>
                        <ul class="flex flex-wrap justify-between flex-col ">
                            @foreach ($categorias as $documento)
                                <li>
                                    <a href="{{ route('documentacion_show', $documento->slug) }}">{{ $documento->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="md:ml-6 w-full md:w-3/4 ">
                    <div class="flex flex-col items-end border-b border-gray-200 py-1 transition-colors dark:border-gray-700 lg:mt-8 lg:flex-row-reverse">
            
                        <div class="relative mt-8 flex items-center justify-end w-full h-10 lg:mt-0 ">
                            <div class="flex-1 flex items-center">
                                <button class="relative inline-flex items-center text-gray-800 transition-colors dark:text-gray-400 w-full" @click.prevent="$dispatch('toggle-search-modal')">
                                    <svg class="w-5 h-5 text-gray-700 pointer-events-none transition-colors dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <span class="ml-3">Buscar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <blockquote>
                        <div class="mt-10 bg-white mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg dark:bg-dark-600 lg:flex lg:items-center">
                            <div class="w-20 h-20 mb-6 flex items-center justify-center shrink-0 bg-orange-600 lg:mb-0">
                                <img src="https://laravel.com/img/callouts/exclamation.min.svg" alt="Icon" class="opacity-75">
                            </div>

                            <p class="mb-0 lg:ml-4">
                                <strong>Advertencia</strong> Estás navegando por la documentación de la Api del panel de Recursos Humanos, te aconsejamos leer detalladamente para hacer un buen uso de la misma.
                            </p>
                        </div>
                    </blockquote>
                    <div class=" leading-loose tracking-tight">
                        @foreach ($documentos as $documento)
                        <h1 class="py-3 font-bold break-normal text-3xl md:text-5xl">{{ $documento->name }}</h1>
                        <div class="prose md:prose-lg lg:prose-xl text-justify">
                            {!! $documento->body !!}
                        </div>     
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
