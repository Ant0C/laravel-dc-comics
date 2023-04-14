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

}
