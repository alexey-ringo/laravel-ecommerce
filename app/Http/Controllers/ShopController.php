<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //если пришел get-запрос ?category=....
        if(request()->category) {
            //то вкл фильтр, выводящий все продукты, принадлежащие переданной категории
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                //сматчивание пришедшего get-дозапроса со slug категории
                $query->where('slug', request()->category);
            })->get();
            
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
            
        }
        
        else {
        $products = Product::inRandomOrder()->take(7)->get();
        $categories = Category::all();
        $categoryName = 'Featured';
        }
        
        if (request()->sort == 'low_high') {
            $products = $products->sortBy('price');
        } elseif (request()->sort == 'high_low') {
            $products = $products->sortByDesc('price');
        }
        
        return view('shop')->with([
            'products'=> $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            ]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
        
        return view('product')->with([
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            ]);
    }

    
}
