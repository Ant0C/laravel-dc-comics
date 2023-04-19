@extends('layouts.app')

@section('content')

    <div>
        <h1>Nuovo comic</h1>
    </div>

    <div class="container">
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <input class="form-control" type="text" placeholder="Title" aria-label=".form-control-lg example" name="title" value="{{old('title')}}">
            <input class="form-control" type="text" placeholder="Description" aria-label="default input example" name="description" value="{{old('description')}}">
            <input class="form-control" type="text" placeholder="Price" aria-label=".form-control-sm example" name="price" value="{{old('price')}}">
            <input class="form-control" type="text" placeholder="Img (URL)" aria-label=".form-control-sm example" name="thumb" value="{{old('thumb')}}">
            <input class="form-control" type="text" placeholder="Series" aria-label=".form-control-sm example" name="series" value="{{old('series')}}">
            <input class="form-control" type="text" placeholder="Date" aria-label=".form-control-sm example" name="sale_date" value="{{old('sale_date')}}">
            <input class="form-control" type="text" placeholder="Type" aria-label=".form-control-sm example" name="type" value="{{old('type')}}">
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