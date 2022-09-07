<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\ServiceType;
use App\Models\UserOrder;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('market.service.index',[
            'menus' => Service::all() ,
           'orders' => Order::all() ,
//            'services' => Service::all(),
//            'serviceorder' => ServiceOrder::find($id) ,
//            'userorder' => UserOrder::all() ,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('market.service.create',[
            'menus' => Service::all() ,
           'orders' => Order::all() ,
//            'services' => Service::all(),
//            'serviceorder' => ServiceOrder::find($id) ,
//            'userorder' => UserOrder::all() ,
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

//        dd($request );

//        $data=$request->all();
//        $order = Service::create($data);
//        $order->save();
//        dd($request);
        Service::create($request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'mini'=> 'required',
            'max'=> 'required',
            'timeaverage' => 'required',
            'details' => 'required',
        ]));
//        return view("market/service/show");
        return redirect('/admin/service/show');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return view('market.service.show',[
            'menus' => Service::all() ,
            'orders' => Order::all() ,
         ]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $id)
    {
        return view('/market/service/edit', [
            'orders' => $id ,
            'menus' => Service::all() ,
            'orders1' => Order::all() ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type=Service::find($id);
        $type->name =$request->name;
        $type->price =$request->price;
        $type->max =$request->mini;
        $type->timeaverage =$request->timeaverage;
        $type->details =$request->details;
        $type->save();
        return redirect('/admin/service/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//        dd($service);
        Service::where('id', $id)->delete();
        return redirect('/admin/service/show');

    }
}
