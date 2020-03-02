<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    protected $table = 'category';
    
//-----------------------------Listning 1----------------------------------
    protected function Listning1()
    {
        return DB::table(DB::raw('category AS child, category AS parent'))
        ->select(array('child.name',DB::raw('COUNT(parent.id)-1 AS depth')))
        ->whereRaw('child.lft BETWEEN parent.lft AND parent.rgt')
        ->groupBy('child.id')
        ->orderBy('child.lft')
        ->get();
    }

//-----------------------------Listning 2----------------------------------
    protected function Listning2($productLftRgt)
    {
        return DB::table(DB::raw('category AS child, category AS parent'))
        ->select(array('child.name',DB::raw('COUNT(parent.id)-1 AS depth')))
        ->whereRaw('child.lft BETWEEN parent.lft AND parent.rgt')
        ->whereRaw("(child.lft <= $productLftRgt->lft AND child.rgt >= $productLftRgt->rgt)")
        ->groupBy('child.id')
        ->orderBy('child.lft')
        ->get();
    }
    
//-----------------------------Listning 3----------------------------------
    protected function Listning3()
    {
        return DB::table(DB::raw('category AS child, category AS parent, product'))
        ->select(DB::raw('parent.name AS category, COUNT(product.name) AS product_count'))
        ->whereRaw('child.lft BETWEEN parent.lft AND parent.rgt AND child.id = product.category_id')
        ->groupBy('parent.name')
        ->orderBy('parent.id')
        ->get();
    }
}
