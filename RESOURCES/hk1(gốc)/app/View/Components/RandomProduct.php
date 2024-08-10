<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;

class RandomProduct extends Component
{
    public $products;
    public function __construct($products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('components.random-product');
    }
}