<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderDetailRequest;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderdetails = OrderDetail::all();
        return view('orderdetails.index', array('orderdetails' => $orderdetails));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderDetailRequest $request)
    {
        $orderdetail = OrderDetail::create($request->all());
        if ($orderdetail) {
            return redirect()->route('orderdetails.index');
        }
        return redirect()->route('orderdetails.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderdetail = \App\Models\OrderDetail::find($id);
        return view('orderdetails.show', array('orderdetail' => $orderdetail));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderdetail = \App\Models\OrderDetail::find($id);
        return view('orderdetails.edit', array('orderdetail' => $orderdetail));
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
        $orderdetail = \App\Models\OrderDetail::find($id);
        $orderdetail->soluong = $request['soluong'];
        $orderdetail->dongia = $request['dongia'];
        $orderdetail->order_id = $request['order_id'];
        $orderdetail->product_id = $request['product_id'];
        $orderdetail->save();
        if($orderdetail) {
            return redirect()->route('orderdetails.index');
        }
        return redirect()->route('orderdetails.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderdetail=\App\Models\orderdetail::find($id);
        $orderdetail->delete();
        return redirect()->route('orderdetails.index');
        
       
    }
}