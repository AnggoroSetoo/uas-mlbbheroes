@extends('layouts.app')

@section('content')
<div class="detail-hero py-5" style="margin-top:-50px">
    <a href="/" class="btn bg-gold btn-secondary m-3 text-sm text-shadow text-white"><i
            class="bi bi-arrow-left"></i>Back</a>
    <div class="container">
        <div class="container-detail row py-5 px-3 rounded-3 shadow-xl">
            <div class="col-md-5 px-5">
                <div class="img-fluid rounded-3 shadow-xl"
                    style="background-image: url({{ asset('assets/img/' . $hero->poster) }})">
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-description px-5 d-grid justify-content-evenly">
                    <h2 class="bold my-3 text-white text-shadow">
                        {{ $hero->name }}
                    </h2>
                    <div class="product-details my-4 text-shadow">
                        <p class="description text-white fw-bolder fs-6">{{ $hero->description }}</p>
                    </div>
                    <div class="btn-group d-flex justify-content-between">
                        <button type="button"
                            class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->role->name }}</button>
                        <button type="button"
                            class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->weapon }}</button>
                        <button type="button"
                            class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $hero->specialty->name }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-5">
        <div class="container-detail row py-5 px-3 rounded-3 shadow-xl">
            <div class="row row-cols-3">
                @foreach ($randomheroes as $rhero)
                <div class="cols">
                    <div class="col" ontouchstart="this.classList.toggle('hover');">
                        <div class="container-card">
                            <div class="front" style="background-image: url(/assets/img/{{ $rhero->poster }}">
                                <div class="inner">
                                    <p>{{ $rhero->name }}</p>
                                    <span>Tap for details</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <h4 class="card-title font-monospace">
                                        {{ $rhero->name }}
                                    </h4>
                                    <hr>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary bg-gold fw-bold">{{ $rhero->role->name }}</button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary bg-gold fw-bolder">{{ $rhero->specialty->name }}</button>
                                        </div>
                                    </div>
                                    <a href="{{ route('heroes.detail', $rhero->id) }}"
                                        class="btn btn-warning mt-4">Detail
                                        Hero
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection