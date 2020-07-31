<?php

namespace App\Http\Controllers;

use App\Http\Requests\custumRequst;
use App\Mail\created;
use App\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Seller::orderBy('updated_at', 'desc')->get();
        return view('seller.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(custumRequst $request)
    {

        $seller = new Seller;
        $seller->fill($request->only($seller->getFillable()))->save();
        //Mail::to($seller)->send(new created($seller));
        return back()->with('success', 'User created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Seller $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Seller $seller)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Seller $model
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Seller $seller)
    {

        return view('seller.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Seller $seller
     * @return \Illuminate\Http\Response
     */
    public function update(custumRequst $request, Seller $seller)
    {

        $seller->fill($request->only($seller->getFillable()))->update();
        //  Mail::to($seller)->send(new created($seller));
        return redirect()->back()->with('message', 'updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Seller $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        Seller::findOrFail($seller->id)->delete();

        $toEmail = $seller->email;
        Mail::to($toEmail)->send(new created());
        return redirect()->back()->with('message', 'deleted successfully');

    }
}
