<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AutoCompleteController extends Controller
{
    //
    public function index(){
        return view('autocomplete-search');
    }
    public function autocomplete(Request $request){
        $res=Product::select("name")->where("name","LIKE","%{$request->term}%")->get();
        return response()->json($res);
    }
}
