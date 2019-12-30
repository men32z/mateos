<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
      return view('web.index');
    }

    public function catalog(){
      $products = Product::paginate(10);
      return view('web.products.index', compact('products'));
    }
}
