<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    //
    protected $table = 'product';

    protected function CategoriesOfProductQuery($name)
    {
        return DB::table(DB::raw('product, category'))
        ->select('category.lft', 'category.rgt')
        ->whereRaw('product.category_id = category.id')
        ->whereRaw('product.name = \''.$name.'\'')
        ->get();
        
    }
    
    protected function ProductList()
    {
        // dd( Product::all());
        return Product::all();
            
    }
    
  
}
