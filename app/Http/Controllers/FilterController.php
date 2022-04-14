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
            'products_title' => 'Виды продукции',
            'products' => $products,
            'materials_title' => 'Виды материалов',
            'materials' => $materials,
            'machines_title' => 'Оборудование',
            'machines' => $machines,
        ]);
    }
}
