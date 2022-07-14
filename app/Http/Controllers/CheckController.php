<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class CheckController extends Controller
{
    public function index(Request $request)
    {
       

        $order = Order::where('code',$request->code)->orderBy('id', 'DESC')->first();
        return view('welcome',compact('order'));
    }

}
