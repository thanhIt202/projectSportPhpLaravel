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

    public function addToCart($product, $color, $size, $quantity = 1)
    {
        $carts = $this->items;
        $key = $product->id.$color->id.$size->id;
        if (isset($carts[$key])) {
            $carts[$key]->quantity += $quantity;
        } else {
            $cart_item = (object)[
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'buy_price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
                'color' => $color,
                'size' => $size,
                'quantity' => $quantity,
            ];
            $carts[$key] = $cart_item;
        }
        session(['cart' => $carts]);
    }

    public function removeItem($id, $color, $size)
    {
        $key = $id.$color.$size;
        unset($this->items[$key]);
        session(['cart' => $this->items]);
    }

    public function updateItem($product, $color, $size, $quantity)
    {
        $key = $product->id.$color->id.$size->id;
        $quantity = $quantity > 0 ? (int) $quantity : 1;
        if (isset($this->items[$key])) {
            $this->items[$key]->quantity = $quantity;
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