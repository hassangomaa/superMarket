<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //
//        return view('/market/order_request');

        $id = Auth::id() ;
//        dd(Order::all());
//        dd(Order::find($id));
        return view('/market/order_request', [
            'orders' => Order::all() ,
            'services' => Service::all(),
            'serviceorder' => ServiceOrder::find($id) ,
            'userorder' => UserOrder::find($id),

        ]);
//        return "HOLLA!!";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logs()
    {
        //
//        return view("/market/orderlogs");

        $id = Auth::id() ;
//        dd(Order::all());
//        dd(Order::find($id));
        return view('/market/orderlogs', [
            'orders' => Order::all() ,
            'services' => Service::all(),
            'serviceorder' => ServiceOrder::find($id) ,
            'userorder' => UserOrder::find($id),

        ]);
    }    /**
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
