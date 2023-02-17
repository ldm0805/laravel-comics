@extends('layouts.app')
@section('content')
<div class="single-card">
    <div class="position">
        <img class="thumb" src="{{$single['thumb']}}" alt="{{$single['title']}}">
    </div>
    <div class="d-flex">

        <div>
            <div>
                <h2>{{$single['title']}}</h2>
            </div>

            <div class="d-flex">
                <div class="d-flex">
                    <p>U.S. Price: {{$single['price']}}</p>
                    <p>Avaiable</p>
                </div>
                <div>
                    <p>Check Availability</p>
                </div>
            </div>
            
            <div>
                <p>{{$single['description']}}</p>
            </div>
        </div>
        
        <div>
            <p>Advertisement</p>
            <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
        </div>
    </div>

        <div class="talentspecs d-flex">
            <div class="talet">
                <h2>Talent</h2>
                <p>Art by: <a href="#"> {{implode(', ', $single['artists'])}} </a></p>
                <p>Written by: <a href="#"> {{implode(', ', $single['writers'])}} </a></p>
            </div>
            <div>
                <h2>Specs</h2>
                <p>Series: {{$single['series']}}</p>
                <p>U.S. Price: {{$single['price']}}</p>
                <p>On Sale Date: {{$single['sale_date']}}</p>

            </div>
        </div>
    </div>

@endsection