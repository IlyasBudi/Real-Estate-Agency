@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
    <main>
        <article>

            {{-- Start Hero --}}
            <section class="hero" id="home">
                <div class="container">
        
                  <div class="hero-content">
        
                    <p class="hero-subtitle">
                      <ion-icon name="home"></ion-icon>
        
                      <span>Real Estate Agency</span>
                    </p>
        
                    <h2 class="h1 hero-title">Find Your Dream House By Us</h2>
        
                    <p class="hero-text">
                      Temukan properti impian Anda bersama kami, menawarkan pilihan terbaik dengan kualitas dan harga yang kompetitif.
                    </p>
        
                    <button class="btn">Make An Enquiry</button>
        
                  </div>
        
                  <figure class="hero-banner">
                    <img src="{{ asset('images/hero-banner.png') }}" alt="Modern house model" class="w-100">
                  </figure>
        
                </div>
            </section>
            {{-- End Hero --}}

            {{-- Start About --}}
            <section class="about" id="about">
                <div class="container">
        
                  <figure class="about-banner">
                    <img src="{{ asset('images/about-banner-1.png') }}" alt="House interior">
        
                    <img src="{{ asset('images/about-banner-2.jpg') }}" alt="House interior" class="abs-img">
                  </figure>
        
                  <div class="about-content">
        
                    <p class="section-subtitle">About Us</p>
        
                    <h2 class="h2 section-title text-white">The Leading Real Estate Rental Marketplace.</h2>
        
                    <p class="about-text">
                      Over 39,000 people work for us in more than 70 countries all over the This breadth of global coverage,
                      combined with
                      specialist services
                    </p>
        
                    <ul class="about-list">
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="home-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Smart Home Design</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="leaf-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Beautiful Scene Around</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="wine-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Exceptional Lifestyle</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="shield-checkmark-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Complete 24/7 Security</p>
                      </li>
        
                    </ul>
        
                    <p class="callout">
                      "Kami bangga menjadi bagian dari perjalanan properti klien kami, menyediakan layanan profesional dan personal yang unggul."
                    </p>
        
                    <a href="#service" class="btn">Our Services</a>
        
                  </div>
        
                </div>
            </section>
            {{-- End About --}}

            {{-- Start Services --}}
            <section class="service" id="service">
                <div class="container">
        
                  <p class="section-subtitle">Our Services</p>
        
                  <h2 class="h2 section-title">Our Main Focus</h2>
        
                  <ul class="service-list">
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                            <img src="{{ asset('images/service-1.png') }}" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a href="#">Buy a home</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                            <img src="{{ asset('images/service-2.png') }}" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a href="#">Rent a home</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                            <img src="{{ asset('images/service-3.png') }}" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a href="#">Sell a home</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                  </ul>
        
                </div>
            </section>
            {{-- End Services --}}

            {{-- Start Property --}}
            <section class="properti" id="property">
                <p class="section-subtitle">Properties</p> 
                <h2 class="h2 section-title text-white">Featured Listings</h2>
                {{-- <h1 class="text-center text-4xl font-bold text-white">My Blogs</h1> --}}
                <div class="p-6 lg:p-8 mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        @foreach ($posts as $post)
                            <article class="group">
                                <img alt="{{ $post->title }}" src="{{ $post->getFirstMediaUrl() }}"
                                    class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />

                                <div class="p-4">
                                    <a href="post/{{ $post->id }}">
                                        <h3 class="text-xl font-semibold text-gray-100">{{ $post->title }}</h3>
                                    </a>

                                    <p class="mt-2 line-clamp-3 font-medium text-base/relaxed text-gray-300">
                                        Rp. {{ $post->price }}
                                    </p>
                                    <p class="mt-1 line-clamp-3 text-sm/relaxed text-gray-500">
                                        {{ $post->meta_description }}
                                    </p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- End Property --}}

            {{-- Start CTA --}}
            <section class="cta">
                <div class="container">
        
                  <div class="cta-card">
                    <div class="card-content">
                      <h2 class="h2 card-title">Looking for a dream home?</h2>
        
                      <p class="card-text">We can help you realize your dream of a new home</p>
                    </div>
        
                    <button class="btn cta-btn">
                      <span>Explore Properties</span>
        
                      <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                  </div>
        
                </div>
            </section>
            {{-- End CTA --}}

        </article>
    </main>

 

@endsection