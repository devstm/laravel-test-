<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;

class proController extends Controller
{
    function index(){
        $data['data']= products::all();
        return view('products.products',$data);
    }
    public function add (Request $request ,products $products )
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'price_per_unit' => 'required',
            'seller_id' => 'required'
        ]);
        products::create($input);
        $products->fill($request->only($products->getFillable()));
        return redirect('/products')->with('success', 'product created successfully.');
    }
    public function create()
    {
        return view('products.create');
    }
    public function ed(Request $req)
    {
        $model = products::findOrFail($req->id);
        $model->get();
        return view('products.update', compact('model'));
    }
    public function edit(Request $req)
    {
        $product = new products();
        $model = products::findOrFail($req->id);
        $model->fill($req->only($product->getFillable()))->update();
        return redirect('/products')->with('success', 'Updated successfully.');
    }

    public function delete($id){
        products::findOrFail($id)->delete();
        return redirect('/products')->with('success', 'deleted successfully.');
    }

}
