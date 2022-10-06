<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Order extends Component
{
    public $orders;
    public $products = [];
    public $product_code;
    public $product_qty;
    public $product_price;
    public $user_id;
    public $cart_product;

    public function mount()
    {
        $this->products = Product::all();
        $this->cart_product = Cart::all();
    }

    public function addToCart()
    {
        $prod_count = Product::where('id', $this->product_code)->first();
        if (!$prod_count) {
            return $this->message = 'Product not found!';
        }

        $cart_count = Cart::where('product_id', $this->product_code);
        if ($cart_count->count() > 0) {
            return $this->message = $prod_count->product_name . ' already in cart!';
        }

        $add_to_cart = new Cart();

        $add_to_cart->product_id = $prod_count->id;
        $add_to_cart->product_qty = $prod_count->quantity;
        $add_to_cart->product_price = $prod_count->price;
        $add_to_cart->user_id = auth()->user()->id;
        $add_to_cart->save();

        $this->cart_product->prepend($add_to_cart);

        $this->product_code = '';
        return $this->message = 'Product added successfully!';
    }

    public function removeProduct($cart_id)
    {
        $del_item = Cart::find($cart_id);
        $del_item->delete();

        $this->message = "Product removed successfully!";
        $this->cart_product = $this->cart_product->except($cart_id);
    }

    public function render()
    {
        return view('livewire.order');
    }
}