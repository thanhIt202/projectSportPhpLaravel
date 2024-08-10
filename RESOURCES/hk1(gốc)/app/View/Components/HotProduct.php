<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;

class HotProduct extends Component
{
    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function render()
    {
        $randomProduct = Product::inRandomOrder()->limit(6)->get();
        return view('components.hot-product', compact('randomProduct'));
    }
}