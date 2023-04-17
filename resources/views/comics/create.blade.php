@extends('layouts.app')

@section('content')

    <div>
        <h1>Nuovo comic</h1>
    </div>

    <div class="container">
        <form action="{{ route('comics.store')}}" method="POST">
            @csrf
            <input class="form-control" type="text" placeholder="Title" aria-label=".form-control-lg example" name="title">
            <input class="form-control" type="text" placeholder="Description" aria-label="default input example" name="description">
            <input class="form-control" type="text" placeholder="Price" aria-label=".form-control-sm example" name="price">
            <input class="form-control" type="text" placeholder="Img (URL)" aria-label=".form-control-sm example" name="thumb">
            <input class="form-control" type="text" placeholder="Series" aria-label=".form-control-sm example" name="series">
            <input class="form-control" type="text" placeholder="Date" aria-label=".form-control-sm example" name="sale_date">
            <input class="form-control" type="text" placeholder="Type" aria-label=".form-control-sm example" name="type">
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>

@endsection