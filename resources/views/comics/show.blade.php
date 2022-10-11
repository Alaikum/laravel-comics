@extends('layouts.app')
@section('metaTitle', $comic['series'] . '-' . 'Dc-Comics')


@section('content')
    <div class="comic__detail ">
        <figure class="img__comic">
            <img src="{{ $comic['thumb'] }}" alt="">
        </figure>
        <div class="main__comic container">
            <div class="col__text">
                <h2>{{ $comic['title'] }}</h2>
                <p class="price__comic">U.S. Price:{{ $comic['price'] }}</p>
                <p class="description__comic">{{ $comic['description'] }}</p>
            </div>
            <div class="col">
                <figure>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </figure>

            </div>
        </div>

        <div class="background__t_s">
            <div class="talent__spec container">
                <div class="talent">
                    <span>Art by:</span>
                    @foreach ($comic['artists'] as $item)
                        <a href="##">{{ $item }}</a>
                    @endforeach
                </div>
                <div class="writers">
                    <span>Written by:</span>
                    @foreach ($comic['writers'] as $item)
                        <a href="##">{{ $item }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
