<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class BallinaController extends Controller
{
    //
    public function index(){
        $arr  =   \App\Property::latest()->where('aprovimi','=','1')->paginate(10);
        //dd($arr);
        return view('ballina.index',compact('arr'));
    }

    public function  show($slug){

        $property = \App\Property::find($slug);

        $explode = explode(',',$property->foto);
        $arr = ($explode[0]);
        $user = User::find($property->user_id);

        return view('ballina.show', compact('property', 'user', 'explode', 'arr'));


    }
}
