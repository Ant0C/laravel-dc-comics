@extends('layouts.app')

@section('content')

    <div>
        <div class="container">
            <h2>
                Fumetti
            </h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($comics as $item)
                    <img src="{{$item->thumb}}" alt="" class="">
                    <h3>{{ $item->title}}</h3>
                @endforeach
            </div>
        </div>
    </div>

@endsection

