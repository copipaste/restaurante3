<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function index()
    {
        $Products = Producto::all();
        return view('LandingPage.menus.index', compact('Products'));
    }


    function update(Request $request ,string $id){
        
        
         dd($request ,$id);   
     
    }

}
