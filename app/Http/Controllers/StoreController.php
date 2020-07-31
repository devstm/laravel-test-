<?php

namespace App\Http\Controllers;

use App\Curruncies;
use App\Http\Requests\custumRequst;
use Illuminate\Http\Request;
use App\Stores;
use Symfony\Component\VarDumper\Cloner\Data;

class StoreController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        $data = Stores::orderBy('id' , 'desc')->get();

        return view('store.storeViews.storeIndex' , compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('store.storeViews.create');
    }

    /**
     * @param custumRequst $request
     * @param Stores $stores
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(custumRequst $request, Stores $stores)
    {
        $model = new Stores();
        $model->fill($request->only($stores->getFillable()))->save();
        return redirect('/store_index')->with('success', 'Store created successfully.');

    }

    /**
     * @param Request $request
     * @param Stores $stores
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, Stores $stores)
    {
        $model = Stores::findOrFail($request->id);
        return view('store.storeViews.update', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Stores $stores
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Stores $stores)
    {
        //هنا فقط صارت عندي مشكلة انو لما استخدمت الstore متعرفش عليه في ال view
        $model = Stores::findOrFail($request->id);
        $model->fill($request->only($model->getFillable()))->update();
        return redirect()->back()->with('success', 'updated successfully');

    }

    /**
     * delete resource
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @author Saleh
     */
    public function destroy($id)
    {
        Stores::findOrFail($id)->delete();
        return redirect('/store_index')->with('success', 'deleted successfully.');

    }
}
