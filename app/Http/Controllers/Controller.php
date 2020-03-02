<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request)
    {        
        
        //-----------------------------Listning 1----------------------------------
        
        $zad1 = Category::Listning1();
        
        //-----------------------------Listning 2----------------------------------
        $selected_product = isset($request->product) ? $request->product : 'Super-Player 1gb';

        $zad2 = Category::Listning2(Product::CategoriesOfProductQuery($selected_product)[0]);
        $produkty = Product::all();
        
        //-----------------------------Listning 3----------------------------------
        
        $zad3 = Category::Listning3();
        //----------------------------Sending View---------------------------------
        return view('index', compact('zad1', 'zad2', 'selected_product', 'produkty', 'zad3'));
    }
    
}
