@extends('layouts.app')
@section('metaTitle', 'Dc-Comics')


@section('content')
    <div class="main">

        <div class="container">
            <button class="button">current series</button>
            <button class="load__button">load more</button>
            <div class="cards">
                @include('partials.cards')
           
            </div>
        </div>
    </div>
@endsection
