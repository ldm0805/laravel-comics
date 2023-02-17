@extends('layouts.app')
@section('content')
    <div class="container-fluid bg_gray">
        <section>
            <div class="album">
                @foreach($products as $albumcover)
                <div class="album-card">
                    {{-- <a href="{{ route('detail-product', ['param' => $product['titolo']]) }}"> --}}
                        <div class="album-image">
                            <img class="thumb" src="{{$albumcover['thumb']}}" alt="{{$albumcover['title']}}">
                        </div>
                        <h6>{{$albumcover['title']}}</h6>
                    {{-- </a> --}}
                    </div>
                    @endforeach
                </div>
            <div class="text-center">
                <button class="button_load">Load more</button>
            </div>
        </section>
    </div>
    @endsection
