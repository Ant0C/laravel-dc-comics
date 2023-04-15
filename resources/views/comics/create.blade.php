@extends('layouts.app')

@section('content')

    <div>
        <h1>Nuovo comic</h1>
    </div>

    <div class="container">
        <input class="form-control form-control-lg" type="text" placeholder="Title" aria-label=".form-control-lg example">
        <input class="form-control" type="text" placeholder="description" aria-label="default input example">
        <input class="form-control form-control-sm" type="text" placeholder="price" aria-label=".form-control-sm example">
    </div>

@endsection