<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics= Comic::all();

        $data = [
            'comics' => $comics
        ];
        return view('comics.index',$data);
    }

    public function show($id){
        $comic= Comic::find($id);
        return view('comics.show',compact('comic'));
    }

    public function create(){
        return view('comics.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $comic = new Comic();

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();
        
        return redirect()->route('comics.show', $comic);

    }

    public function edit(Comic $id){
        return view ('comics.edit',compact('id'));
    }

    public function update(Request $request, Comic $id){
        $data = $request->all();

        $edit_comic->title = $data['title'];
        $edit_comic->description = $data['description'];
        $edit_comic->thumb = $data['thumb'];
        $edit_comic->price = $data['price'];
        $edit_comic->series = $data['series'];
        $edit_comic->sale_date = $data['sale_date'];
        $edit_comic->type = $data['type'];

        $edit_comic->save();

        return redirect()->route('comics.show', $edit_comic);

    }

    public function destroy(Comic $id){
        $id->delete();
        return to_route('comics.index');

    }
}
