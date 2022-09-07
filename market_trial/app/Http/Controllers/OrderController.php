<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderAdmin;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\ServiceType;
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

        return view('/market/order/index', [
            'orders' => Order::all() ,
            'services' => Service::all(),
        ]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function logs()
//    {
//        //
////        return view("/market/orderlogs");
//
//        $id = Auth::id() ;
////        dd(Order::all());
////        dd(Order::find($id));
//        return view('/market/orderlogs', [
//            'orders' => Order::all() ,
//            'services' => Service::all(),
//            'serviceorder' => ServiceOrder::find($id) ,
//            'userorder' => UserOrder::find($id),
//
//        ]);
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/market/order/create', [
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
        //
//        @dd($request);
//        $data = $request->all();
//        $order= ServiceType::create($data);
        ServiceType::create($request->validate([
                'name'=> 'required',
            ]));
//        $order->save();


        return redirect('/admin');
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
//        $id = Auth::id() ;
//        dd(Order::all());
//        dd(Order::find($id));
        return view('/market/order/show', [
            'menus' => ServiceType::all() ,
//            'orders' => Order::all() ,
//            'services' => Service::all(),
//            'serviceorder' => ServiceOrder::find($id) ,
//            'userorder' => UserOrder::all() ,

        ]);
//        return "HOLLA!!";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceType $order)
    {

        return view('/market/order/edit', [
            'orders' => ServiceType::all() ,

        ]);
//        return "HOLLA!!";

    }
public function type(ServiceType $id)
    {

        return view('/market/order/edit_type', [
            'orders' => $id ,
        ]);
//        return "HOLLA!!";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        dd(@$request);
//        $order = Order::find($id);
//        $order->status = "مكتمل جزئيا ";
////        $order->status = $request->choice ;
//        $order->save();
        $type=ServiceType::find($id);
        $type->name =$request->name;
        $type->save();
        return redirect('/admin/order/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
//        dd($id);
//        $order = Order::find($id);
//        $order->status = "ملغي ";
//        $order->save();


        ServiceType::where('id', $id)->delete();
        return redirect('admin/order/show');

    }
}
