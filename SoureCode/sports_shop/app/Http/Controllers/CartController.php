<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Helper\Carts;

class CartController extends Controller 
{
    public function view(Carts $cart)
    {
        $cat = Category::all();
        return view('customer.cart-view', compact('cat', 'cart'));
    }

    public function add(Product $product, Carts $cart)
    {   
        $quantity = request('quantity', 1);
        $cart->addToCart($product, $quantity);
        return redirect()->route('cart.view');
    }

    public function remove(Carts $cart, $id)
    {   
        $cart->removeItem($id);
        return redirect()->route('cart.view');
    }

    public function update(Carts $cart, $id)
    {
        $quantity = request('quantity', 1);
        $cart->updateItem($id, $quantity);
        return redirect()->route('cart.view');
    }

    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }
}
