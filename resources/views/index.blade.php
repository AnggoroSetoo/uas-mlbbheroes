@extends('layouts.app')

@section('content')
<section class="hero-wrapper h-50">
    <div class="news-item hero-item">
    </div>
    <div class="news-item standard-item">
    </div>
    <div class="news-item standard-item">
    </div>
    <div class="news-item standard-item">
        <video autoplay muted loop>
            <source src="../assets/vid/anima-1.mp4" type="video/mp4">
        </video>
    </div>
    <img src="../assets/img/logo-nmlbb.png" alt="logo mlbb" class="logo w-25">
</section>

<section id="guides" class="homeA">
    <div class="news-title justify-center mx-auto my-5">
        <h2 class="text-white text-shadow text-center fw-bold">Guides & News</h2>
    </div>

    <div class="container">
        <div class="homeB wow">
            <div class="hSwiper1 a-fadeinB2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="#guides">
                                <div class="img"><img src="../assets/img/news-onic.jpg" width="100%" />
                                </div>
                                <!-- <div class="top"><span class="d">2023/06/28</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">ONIC ID takes the globe by storm to
                                        become the
                                        MSC 2023
                                        Champion
                                    </p>
                                    <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="guides">
                                <div class="img"><img src="../assets/img/news-mpls.jpg" width="100%" />
                                </div>
                                <!-- <div class="top"><span class="d">2023/02/20</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">MPL Singapore is back with teams looking
                                        to
                                        replay, and reset
                                    </p>
                                    <span href="" class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="#guides">
                                <div class="img"><img src="../assets/img/news-echo.png" width="100%" />
                                </div>
                                <!-- <div class="top"><span class="d">2023/01/30</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">ECHO shows that they are made of
                                        greatness in the
                                        M4 World
                                        Championship!
                                    </p>
                                    <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="#guides">
                                <div class="img"><img src="../assets/img/news-emblem.jpg" width="100%" />
                                </div>
                                <!-- <div class="top"><span class="d">2023/01/30</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">Guides & Setup new talent emblem in new patch
                                        from profesional player's</p>
                                    <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="#guides">
                                <div class="img"><img src="../assets/img/news-tutor.webp" width="100%" />
                                </div>
                                <!-- <div class="top"><span class="d">2022/11/25</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">How become to be the best player assasins
                                        use Fanny </p>
                                    <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="homeB-a">
                            <a href="/news/11.html">
                                <div class="home-img"><img src="../assets/img/news-black.jpg" class="img"
                                        width="100%" /></div>
                                <!-- <div class="top"><span class="d">2022/11/11</span> <span class="tag">News</span></div> -->
                                <div class="homeB-e">
                                    <p class="t card-text text-shadow">Blacklist International reclaims their
                                        MPL
                                        Philippines Crown
                                    </p>
                                    <span class="smallMore text-gold bi bi-arrow-right-circle-fill"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="mainQh swiper-button-next"></div>
                <div class="mainQh swiper-button-prev"></div> --}}
        </div>
    </div>
</section>

<section id="hero" class="container-heroes py-4 px-md-5 px-2">
    <div class="heroes-wrapper my-5 py-3 px-md-5 rounded-3 shadow-xl">
        <div class="hero-title text-center px-1 mx-auto mb-1">
            <h2 class="text-white text-shadow fw-bold">
                Heroes
            </h2>
        </div>
        <div class="row">
            <div class="container col-md-9">
                <div class="homeB py-2">
                    <div class="hSwiper2 a-fadeinB2">
                        <div class="swiper-wrapper">
                            @foreach ($heroes as $hero)
                            <div class="swiper-slide">
                                <div class="cols">
                                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                                        <div class="container-card">
                                            <div class="front"
                                                style="background-image: url('/assets/img/{{ $hero->poster }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                                <div class="inner">
                                                    <p>{{ $hero->name }}</p>
                                                    <span>Tap for details</span>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="inner">
                                                    <h4 class="card-title font-monospace">
                                                        {{ $hero->name }}
                                                    </h4>
                                                    <hr>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->role->name }}</button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div class="btn-group">
                                                            <button type="button"
                                                                class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $hero->specialty->name }}</button>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('heroes.detail', $hero->id) }}"
                                                        class="btn bg-gold fw-bold mt-4">Detail
                                                        Hero
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="mainQh swiper-button-next"></div>
                    <div class="mainQh swiper-button-prev"></div> --}}
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-start align-items-center">
                <div>
                    <div class="card bg-transparent">
                        <div class="card-header">
                            <h4 class="fw-bold text-white text-shadow">Heroes</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-white text-shadow fw-semibold">Mobile Legends heroes are more than
                                100+ unique characters
                                with distinct abilities and
                                roles, chosen to form strategic teams for victory.
                            </p>
                            <a href="/listheroes"
                                class="btn bg-gold fw-bold fs-5 font-monospace text-white text-shadow shadow-xl">
                                View More
                                <span class="bi bi-arrow-right fw-bold"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="favheroes-wrapper my-5 py-3 px-md-5 rounded-3 shadow-xl" id="favhero"> 
        @auth
        <button type="button" class="btn bg-gold fs-6 font-monospace text-white text-shadow shadow-xl" data-bs-toggle="modal" data-bs-target="#favoriteHeroModal">
            Set Your Favorite Hero
        </button>
        @endauth
        <div class="hero-title text-center px-1 mx-auto mb-1">
            <h2 class="text-white text-shadow fw-bold">
                Your Favorite Heroes
            </h2>
        </div>
        @if (empty($favhero))
        <div class="row my-5">
            <div class="col-9">
                <h1 class="text-white text-shadow">You Have No Favorite Hero :(</h1>
            </div>
            <div class="col-3">
            </div>
        </div>
        @else
        <div class="row row-cols-3">
            @foreach ($favhero as $fhero)
            <div class="cols">
                <div class="col" ontouchstart="this.classList.toggle('hover');">
                    <div class="container-card">
                        <div class="front"
                            style="background-image: url('/assets/img/{{ $fhero->hero->poster }}'); background-size:cover; background-position: center; background-repeat: no-repeat;">
                            <div class="inner">
                                <p>{{ $fhero->hero->name }}</p>
                                <span>Tap for details</span>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <h4 class="card-title font-monospace">
                                    {{ $fhero->hero->name }}
                                </h4>
                                <hr>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $fhero->hero->role->name }}</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $fhero->hero->specialty->name }}</button>
                                    </div>
                                </div>
                                <a href="{{ route('heroes.detail', $fhero->id) }}"
                                    class="btn btn-warning bg-bold fw-bold mt-4">Detail
                                    Hero
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        </div>
    </div>
</section>
<div class="modal fade" id="favoriteHeroModal" tabindex="-1" aria-labelledby="favoriteHeroModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="favoriteHeroModalLabel">Set Favorite Hero</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('saveFavoriteHero') }}#favhero" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        @auth
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                        @endauth
                    </div>
                    <div class="mb-3">
                        <label for="heroes_id" class="form-label">Heroes:</label>
                        <select id="heroes_id" name="heroes_id" class="form-select">
                            @foreach ($heroes as $hero)
                            <option value="{{ $hero->id }}">{{ $hero->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" id="date" name="date" class="form-control" value="{{ date('Y-m-d') }}">
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes:</label>
                        <textarea class="form-control" style="height:150px" name="notes" placeholder="Notes"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating:</label>
                        <input type="number" id="rating" name="rating" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection