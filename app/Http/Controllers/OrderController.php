<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('pages.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanan = Layanan::all();
        return view('pages.orders.create', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $order = Order::create($request->all());
        $order->update(["code"=>"NS-".$order->id]);

        return redirect()->route('orders.index')->with('success', 'Data success to create!');
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
        $layanan = Layanan::all();
        return view('pages.orders.edit', compact('order','layanan'));
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

        $order->update([
            'layanan_id' => $request->layanan_id,
            'user_name' => $request->user_name,
            'total_weight' => $request->total_weight,
            'date_in' => $request->date_in,
            'date_out' => $request->date_out,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        
        return redirect()->route('orders.index')->with('success', 'Data success to Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Data success to delete!');
    }

}
