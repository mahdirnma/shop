<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return $products;
    }

    public function create()
    {
        return Product::create([
            'name'=>'lorem ipsum',
            'description'=>'lorem ipsum',
        ]);
    }

    public function category()
    {
        $products = Product::find(1);
        return $products->category;
    }

    public function createCategory()
    {
        $products = Product::find(1);
        $status=$products->category()->create([
            'name'=>'category 1',
            'description'=>'lorem ipsum',
        ]);
        if($status){
            return 'category created';
        }
    }
}
