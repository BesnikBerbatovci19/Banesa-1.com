<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class AprovimiController extends Controller
{
    //
    public function index(){
        $property = \App\Property::latest()->paginate(15);


        return view('aprovimi.index', compact('property'));
    }
    public function update(Request $request)
    {

        $request->validate([
            'app' => 'required',
            'id' => 'required'
        ]);

        $property = \App\Property::find($request->id);

        $property->update([
            'aprovimi' => $request->app
        ]);
        return redirect('/aprovim')->with('status', 'U aprovua me sukses!');
    }

        public function destroy($id)
        {

            $porperty =\App\Property::find($id);
            $porperty->delete();

            return redirect('/aprovim');
        }



}
