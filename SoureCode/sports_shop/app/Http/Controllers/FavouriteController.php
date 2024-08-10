<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helper\Carts;
use Auth;

class FavouriteController extends Controller
{
    public function index(Carts $cart)
    {
        $hotProduct = Product::hot(6)->get();
        $saleProduct = Product::sale(6)->get();
        $newProduct = Product::sale(6)->get();
        $pro = Product::all();
        $fa = Favourite::all();
        $cat = Category::all();
        dd($pro);
        return view('customer.favourite', compact('pro','fa', 'cat', 'cart','hotProduct', 'saleProduct', 'newProduct'));
    }

    public function add(Request $req,$id)
    {
        $favourite = new favourite();
        $cus_id=auth('cus')->user()->id;
            $favourite->product_id = $id;
            $favourite->customer_id = $cus_id;
            $favourite->save();
            return redirect()->back();
    }

    public function destroy(Favourite $favourite,$id)
    {
        $customer_id=auth('cus')->user()->id;
        Favourite::where(['product_id'=>$id,'customer_id'=> $customer_id ])->delete();
           return redirect()->back();
    }
}