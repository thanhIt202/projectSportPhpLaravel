<?php 
namespace App\Helper;

class Carts {
    public $items = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->totalQuantity = $this->getTotalQuantity();
        $this->totalPrice = $this->getTotalPrice();
    }

    public function addToCart($product, $quantity = 1)
    {
        $carts = $this->items;
        if (isset($carts[$product->id])) {
            $carts[$product->id]->quantity += $quantity;
        } else {
            $cart_item = (object)[
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'buy_price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
                'quantity' => $quantity,
            ];
            $carts[$product->id] = $cart_item;
        }
        session(['cart' => $carts]);
    }

    public function removeItem($id)
    {
        unset($this->items[$id]);
        session(['cart' => $this->items]);
    }

    public function updateItem($id, $quantity)
    {
        $quantity = $quantity > 0 ? (int) $quantity : 1;

        if (isset($this->items[$id])) {

            $this->items[$id]->quantity = $quantity;

        }
        session(['cart' => $this->items]);
    }


    private function getTotalQuantity()
    {
        $total = 0;
        foreach($this->items as $item) {
            $total += $item->quantity;
        }
        return $total;
    }

    private function getTotalPrice()
    {
        $total = 0;
        foreach($this->items as $item) {
            $total += $item->quantity * $item->buy_price;
        }
        return $total;
    }
}