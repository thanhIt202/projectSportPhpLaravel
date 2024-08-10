<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductHot extends Component
{
    public $products;
    public $title;
    
    public function __construct($products, $title)
    {
        $this->products = $products;
        $this->title = $title;
    }

    public function render()
    {
        $randomProduct = Product::inRandomOrder()->limit(6)->get();
        return view('components.product-hot', compact('randomProduct'));
    }
}