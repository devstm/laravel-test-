<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Curruncies;
class CurruncyController extends Controller
{
    function index(){
        $data= Curruncies::orderBy('id','asc')->get();
        return view('store.index',compact('data'));
    }
}
