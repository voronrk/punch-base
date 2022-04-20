<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Material;
use App\Models\Machine;


class FilterController extends Controller
{
    public function getFilter() {
        $products = Product::all();
        $materials = Material::all();
        $machines = Machine::all();
        return view('index', [
            'products' => $products,
            'materials' => $materials,
            'machines' => $machines,
        ]);
    }
}
