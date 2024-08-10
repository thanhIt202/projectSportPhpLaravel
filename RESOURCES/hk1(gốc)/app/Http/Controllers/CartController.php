<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Helper\Carts;

class CartController extends Controller
{
    public function view(Carts $cart, Color $color, Size $size)
    {   
        $color = Color::all();
        $size = Size::all();
        $cat = Category::all();
        return view('customer.cart-view', compact('cat', 'cart', 'color', 'size'));
    }

    public function add(Product $product, Carts $cart)
    {   
        $cl_id = request('color');
        $color = Color::find($cl_id);
        $sz_id = request('size');
        $size = Size::find($sz_id);
        $quantity = request('quantity', 1);
        $cart->addToCart($product, $color, $size, $quantity);
        return redirect()->route('cart.view');
    }

    public function remove(Carts $cart, $id, $color, $size)
    {   
        $cart->removeItem($id, $color, $size);
        return redirect()->route('cart.view');
    }

    public function update(Carts $cart, Product $product)
    {
        $cl_id = request('color');
        $color = Color::find($cl_id);
        $sz_id = request('size');
        $size = Size::find($sz_id);
        $quantity = request('quantity', 1);
        $cart->updateItem($product, $color, $size, $quantity);
        return redirect()->route('cart.view');
    }

    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }
}
