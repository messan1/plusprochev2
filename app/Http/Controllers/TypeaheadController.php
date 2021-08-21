<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class TypeaheadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
 
    public function autocompleteSearch(Request $request)
    {
    	$movies = [];

        if($request->has('q')){
            $search = $request->q;
            $movies =User::select("id", "name")
            		->where('name', 'LIKE', "%$search%")
            		->get();
        }
        return response()->json($movies);

    } 
}