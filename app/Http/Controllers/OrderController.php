<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
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
        $orders = Order::all();
        return view('orders.index', array('orders' => $orders));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());
        if ($order) {
            return redirect()->route('orders.index');
        }
        return redirect()->route('orders.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = \App\Models\Order::find($id);
        return view('orders.show', array('order' => $order));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = \App\Models\Order::find($id);
        return view('orders.edit', array('order' => $order));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = \App\Models\Order::find($id);
        $order->ngaylaphoadon = $request['ngaylaphoadon'];
        $order->diachigiaohang = $request['diachigiaohang'];
        $order->tien = $request['tien'];
        $order->ghichu = $request['ghichu'];
        $order->customer_id = $request['customer_id'];
        $order->save();
        if($order) {
            return redirect()->route('orders.index');
        }
        return redirect()->route('orders.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order=\App\Models\Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');       
    }
}
