<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favourite;

class ListProduct extends Component
{
    public $products;
    public $title;
    public $status;
    
    public function __construct($products, $title, $status)
    {
        $this->products = $products;
        $this->title = $title;
        $this->status = $status;
    }

    public function render()
    {   
        $fa = Favourite::get();
        $cat = Category::orderBy('name','ASC')->get();
        return view('components.list-product', compact('cat','fa'));
    }
}