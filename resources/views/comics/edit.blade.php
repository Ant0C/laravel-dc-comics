@extends('layouts.app')

@section('content')

    <div>
        <h1>Modifica : {{$id->title}}</h1>
    </div>

    <div class="container">
        <form action="{{route('comics.update',$id)}}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control" type="text" placeholder="Title" aria-label=".form-control-lg example" name="title" value="{{$id->title}}">
            <input class="form-control" type="text" placeholder="Description" aria-label="default input example" name="description" value="{{$id->description}}">
            <input class="form-control" type="text" placeholder="Price" aria-label=".form-control-sm example" name="price" value="{{$id->price}}">
            <input class="form-control" type="text" placeholder="Img (URL)" aria-label=".form-control-sm example" name="thumb" value="{{$id->thumb}}">
            <input class="form-control" type="text" placeholder="Series" aria-label=".form-control-sm example" name="series" value="{{$id->series}}">
            <input class="form-control" type="text" placeholder="Date" aria-label=".form-control-sm example" name="sale_date" value="{{$id->sale_date}}">
            <input class="form-control" type="text" placeholder="Type" aria-label=".form-control-sm example" name="type" value="{{$id->type}}">
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>

@endsection