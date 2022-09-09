<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\StatusOrder;
use App\Models\UserOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/market/order/index', [
            'orders' => Order::all() ,
            'services' => Service::all(),
            'Status' => StatusOrder::all(),
/////////////////////////////
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        return "holaa";
        return view('/market/order_request', [
            'orders' => Order::all() ,
            'services' => Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        create user requset

//        print_r($request);
//        dd($request);
//        $data=$request->all();
//
////        dd();
////        {{Auth::user()->id}}
////            dd($data);
//        $order = Order::create($data);
//        $order->save();
//        Order::create($request->validate([
//            'name' => 'required',
//            'user_id' => Auth::user()->id,
////            'status' => 'required',
//            'link' => 'required',
//            'price' => 'required',
////            'quantity' => 'required',
//        ]));

//        dd($request->toArray());
        Order::create($request->toArray() );
//        [

//            'user_id' => Auth::user()->id,
//            'status' => 'required',
//            'link' => 'required',
//            'price' => 'required',
//            'quantity' => 'required',
//        ]);






        return redirect('admin/user/order/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrder $userOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrder $userOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOrder $userOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//        dd($id);
        Order::where('id', $id)->delete();
//        dd( Order::where('id', $id)->delete()->toSql() );

        return redirect('admin/order/requset');
//        return view('/market/order/index', [
//            'orders' => Order::all() ,
//            'services' => Service::all(),
//        ]);
    }
}
