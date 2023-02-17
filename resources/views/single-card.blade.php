@extends('layouts.app')
@section('content')
<div class="single-card">
    <div class="position">
        <div class="view">
            <img class="thumb" src="{{$single['thumb']}}" alt="{{$single['title']}}">
            <div>View Gallery</div>
            <div class="comic">{{$single['type']}}</div>
        </div>
    </div>
    <div class="d-flex">

        <div class="title-desc">
            <div>
                <h4 class="upbold">{{$single['title']}}</h4>
            </div>

            <div class="green-cont">
                <div class="avaible col-7">
                    <span class="upbold">U.S. Price: <span class="text-white">{{$single['price']}}</span></span>
                    <span class="upbold">Avaiable</span>
                </div>
                <div class="check-avaible col-3">
                    <span class="text-white">Check Availability</span>
                </div>
            </div>
            
            <div class="col-10">
                <p>{{$single['description']}}</p>
            </div>
        </div>
        
        <div class="advertisement">
            <span>Advertisement</span>
            <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
        </div>
    </div>

        <div class="talentspecs">
            <div class="talent col-5">
                <h2>Talent</h2>
                <p>Art by: <a href="#"> {{implode(', ', $single['artists'])}} </a></p>
                <p>Written by: <a href="#"> {{implode(', ', $single['writers'])}} </a></p>
            </div>
            <div class="specs col-5">
                <h2>Specs</h2>
                <p>Series: {{$single['series']}}</p>
                <p>U.S. Price: {{$single['price']}}</p>
                <p>On Sale Date: {{$single['sale_date']}}</p>

            </div>
        </div>
    </div>

@endsection