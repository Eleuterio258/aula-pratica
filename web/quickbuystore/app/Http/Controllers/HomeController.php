<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productshot = Product::where('is_hot', '1')->get();
        $products = Product::where("rating", 5)->get();
        $categories = Category::all();
        return view('custumer.home', compact(['categories', 'products', 'productshot']));
    }


    public function category($name)
    {

        if (Category::where("name", $name)->exists()) {
            $category = Category::where("name", $name)->first();
            $products = Product::where("category_id", $category->id)->get();
            return view('custumer.category', compact('products', 'category'));
        } else {
            return redirect('/');
        }
    }

    public function productinfo($namecat, $nameproduc)
    {

        if (Category::where("name", $namecat)->exists()) {

            if (Product::where("name", $nameproduc)->exists()) {
                $products  = Product::where("name", $nameproduc)->first();

                return view('custumer.view', compact('products'));
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
}
