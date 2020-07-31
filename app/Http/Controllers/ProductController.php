<?php

namespace App\Http\Controllers;

use App\Http\Requests\productrequst;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('products.products',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(productrequst $request)
    {
        $product = new Product();
        $product->fill($request->only($product->getFillable()))->save();
        return back()->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
//
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(productrequst $request, Product $product)
    {
        $product->fill($request->only($product->getFillable()))->update();
        //  Mail::to($seller)->send(new created($seller));
        return redirect()->back()->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::findOrFail($product->id)->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }

    public function changeStatus(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $data = $request->all();
        $product->status = $request->status;
        $product->save();
    }


}
