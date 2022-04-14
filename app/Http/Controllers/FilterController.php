<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
    public function getFilter() {
        $products = Product::all();
        return view('index', [
            'f1' => $products
        ]);
    }
}
