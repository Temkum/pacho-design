<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class Order extends Component
{
    public $orders;
    public $products = [], $balance = '';
    public $product_code;
    public $product_qty;
    public $product_price;
    public $user_id;
    public $cart_product;
    public $add_qty;
    public $amount_paid;

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

    public function increaseQty($cart_id)
    {
        $carts = Cart::find($cart_id);
        $carts->increment('product_qty', 1);
        $update_price = $carts->product_qty * $carts->product->price;

        $carts->update(['product_price' => $update_price]);
        $this->mount();
    }

    public function decreaseQty($cart_id)
    {
        $carts = Cart::find($cart_id);

        if ($carts->product_qty <= 1) {
            return session()->back()->with('info', $carts->product->product_name . "'s quantity can't be less than 1. Increase the quantity or remove items from cart!");
        }

        $carts->decrement('product_qty', 1);
        $update_price = $carts->product_qty * $carts->product->price;

        $carts->update(['product_price' => $update_price]);
        $this->mount();
    }

    public function removeProduct($cart_id)
    {
        $del_item = Cart::find($cart_id);
        $del_item->delete();

        $this->message = "Product removed successfully!";
        $this->cart_product = $this->cart_product->except($cart_id);
        $this->mount();
    }

    public function render()
    {
        if ($this->amount_paid != '') {
            $total_amt = $this->amount_paid - $this->cart_product->sum('product_price');
            $this->balance = $total_amt;
        }
        return view('livewire.order');
    }
}