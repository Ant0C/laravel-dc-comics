@extends('layouts.app')

@section('content')

    <div>
        <div class="container">
            <h2>
                Fumetti
            </h2>
        </div>
        <div class="">
            <div class="">
                @foreach ($comics as $item)
                    <h3></h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">img</th>
                                <th scope="col">Description</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Series</th>
                                <th scope="col">Date</th>
                                <th scope="col">type</th>
                                <th scope="col">link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item->id}}</th>
                                <td><img src="{{$item->thumb}}" alt="" class="" style="width: 25%"></td>
                                <td>{{ $item->title}}</td>
                                <td>{{ $item->description}}</td>
                                <td>{{ $item->price}}€</td>
                                <td>{{ $item->series}}</td>
                                <td>{{ $item->sale_date}}</td>
                                <td>{{ $item->type}}</td>
                                <td><a href="{{route ('comics.show',['id'=> $item->id])}}">vai al fumetto</a></td>
                                <td><a href="{{route ('comics.edit',$item)}}">MODIFICA</a></td>
                                <td>
                                    <form action="{{route ('comics.destroy',$item)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>

@endsection

