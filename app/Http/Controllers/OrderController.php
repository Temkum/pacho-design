<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $orders = Order::all();

        return view('orders', ['orders' => $orders, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(
            function () use ($request) {

                //order model
                $orders = new Order();
                $orders->name = $request->name;
                $orders->address = $request->address;
                $orders->save();

                $order_id = $orders->id;

                // order details
                for ($product_id = 0; $product_id < count($request->product_id); $product_id++) {
                    # code...
                    $order_details = new OrderDetail();
                    $order_details->order_id = $order_id;
                    $order_details->product_id = $request->product_id[$product_id];
                    $order_details->quantity = $request->quantity[$product_id];
                    $order_details->unit_price = $request->price[$product_id];
                    $order_details->amount = $request->total_amt[$product_id];
                    $order_details->discount = $request->discount[$product_id];
                    $order_details->save();
                }

                // transaction
                $transaction = new Transaction();
                $transaction->order_id = $order_id;
                $transaction->user_id = auth()->user()->id;
                $transaction->paid_amount = $request->amt_paid;
                $transaction->balance = $request->balance;
                $transaction->payment_method = $request->payment_method;
                $transaction->transaction_amount = $order_details->amount;
                $transaction->transaction_date = date('Y-m-d');
                $transaction->save();

                // latest order
                $products = Product::all();
                $order_details = OrderDetail::where('order_id', $order_id)->get();
                $order_by = Order::where('id', $order_id)->get();

                return view('orders', ['products' => $products, 'order_details' => $order_details, 'order_by' => $order_by]);
            }
        );

        return back()->with('error', 'Ops! An error occurred. Please try again later.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}