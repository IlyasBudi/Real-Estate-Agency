@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
    <section class="relative pt-12 p-12 bg-blueGray-50 detail-post">
        <p class="section-subtitle">Properties</p> 
        <h2 class="h2 section-title text-black">Featured Listings</h2>
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img alt="{{ $post->title }}" class="max-w-full scale-125 rounded-lg shadow-lg" src="{{ $post->getFirstMediaUrl() }}">
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    {{-- <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-red-200 mt-8">
                        <i class="fas fa-building text-xl"></i>
                    </div> --}}
                    <h3 class="text-3xl font-bold">{{ $post->title }}</h3>
                    <p class="mt-4 text-lg leading-relaxed font-semibold text-blue-blueGray-500 detail-content">
                        Rp. {{ $post->price }}
                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-blueGray-500 detail-content">
                        {!! $post->content !!}
                    </p>
                    <ul class="list-none mt-6">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-hotel"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-blueGray-500">
                                        Luas Bangunan: {{ $post->building }} m²
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                              <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-expand"></i></span>
                              </div>
                              <div>
                                <h4 class="text-blueGray-500">Luas Tanah: {{ $post->land }} m²</h4>
                              </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                              <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-bed"></i></span>
                              </div>
                              <div>
                                <h4 class="text-blueGray-500">Kamar Tidur: {{ $post->bed }}</h4>
                              </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-bath"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-blueGray-500">
                                        Kamar Mandi: {{ $post->bath }}
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                              <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-scroll"></i></span>
                              </div>
                              <div>
                                <h4 class="text-blueGray-500">Sertifikasi: {{ $post->sertif }}</h4>
                              </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                              <div>
                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-map"></i></span>
                              </div>
                              <div>
                                <h4 class="text-blueGray-500">Alamat Lokasi: {{ $post->location }}</h4>
                              </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>


@endsection