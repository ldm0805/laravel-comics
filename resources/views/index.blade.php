@extends('layouts.app')
@section('content')
    <div class="container-fluid bg_gray">
        <section>
            <div class="album">
                @foreach($products as $key => $albumcover)
                        @include('/partials/detail_card')
                @endforeach
            </div>
            <div class="text-center">
                <button class="button_load">Load more</button>
            </div>
        </section>
    </div>
        @include('partials.icon-cont')
    @endsection
