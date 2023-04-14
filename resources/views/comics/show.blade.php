@extends('layouts.app')

@section('content')

    <div>
        <div class="container">
            <h2>
                Fumetto {{$comic->title}}
            </h2>
        </div>
        <div class="">
            <div class="">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <p>
                {{$comic->description}}
            </p>
            <ul>
                <li>{{$comic->series}}</li>
                <li>{{$comic->type}}</li>
                <li>{{$comic->price}}</li>
            </ul>
        </div>
    </div>

@endsection