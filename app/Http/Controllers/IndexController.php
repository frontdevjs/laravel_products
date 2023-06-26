<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
//use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $category = Category::all();
       return view('./pages/home', ['']);
    }

    public function categories(){
        $category = Category::all();
        return view('./pages/categories', ['data'=>$category]);
    }

    public function category($id){
        $category = new Category;
        return view('./pages/category', ['category'=>$category->find($id)]);
    }

    public function products(){
        $products = Product::all();
        $categories = Category::all();
        return view('./pages/products', [
            'products'=>$products,
            'categories'=>$categories,
        ]);
    }

    public function showProduct($id){
        $product = new Product;
        return view('./pages/oneProduct', ['product'=>$product->find($id)]);
    }

    public function about(){
        return view('pages.about');
    }

    public function faq(){
        return view('pages.faqs');
    }
}
