<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Picqer;;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(13);

        return view('products.products', ['products' => $products]);
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
        // generate product code
        $prod_code = rand(231723897, 999999);

        // barcode
        $redColor = '255, 0, 0';
        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        $barcodes = $generator->getBarcode($prod_code, $generator::TYPE_STANDARD_2_5, 2, 60);

        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_code = $prod_code;
        $products->barcode = $barcodes;
        $products->description = $request->description;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->stock_alert = $request->stock_alert;
        $products->save();

        if ($products) {
            return redirect()->back()->with('success', 'Product created successfully!');
        }

        return redirect()->back()->with('error', 'Something went wrong. Please try again!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect(route('products.index'))->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product = Product::all();

        $product->delete();

        return redirect(route('products.index'))->with('success', 'Product updated successfully!');
    }

    public function productBarcodes()
    {
        $prod_barcodes = Product::select('barcode', 'product_code')->get();

        return view('products.barcodes', ['prod_barcodes' => $prod_barcodes]);
    }
}