@extends('layouts.app')

@section('content')

    <div>
        <h1>Modifica : {{$id->title}}</h1>
    </div>

    <div class="container">
        <form action="{{route('comics.update',$id)}}" method="POST">
            @csrf
            @method('PUT')
            <input class="form-control" type="text" placeholder="Title" aria-label=".form-control-lg example" name="title" value="{{old('title',$id->title)}}">
            <input class="form-control" type="text" placeholder="Description" aria-label="default input example" name="description" value="{{old('description',$id->description)}}">
            <input class="form-control" type="text" placeholder="Price" aria-label=".form-control-sm example" name="price" value="{{old('price',$id->price)}}">
            <input class="form-control" type="text" placeholder="Img (URL)" aria-label=".form-control-sm example" name="thumb" value="{{old('thumb',$id->thumb)}}">
            <input class="form-control" type="text" placeholder="Series" aria-label=".form-control-sm example" name="series" value="{{old('series',$id->series)}}">
            <input class="form-control" type="text" placeholder="Date" aria-label=".form-control-sm example" name="sale_date" value="{{old('sale_date',$id->sale_date)}}">
            <input class="form-control" type="text" placeholder="Type" aria-label=".form-control-sm example" name="type" value="{{old('type',$id->type)}}">
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection