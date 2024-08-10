<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favourite;

class ProductList extends Component
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
        return view('components.product-list');
    }
}