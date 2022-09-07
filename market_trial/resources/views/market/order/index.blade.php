@extends('layouts.navigation')
@section('nav')
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>manage order </title>
</head>
<body>
<div class="container mt-5" lang="ar" dir="rtl">
    <div class="d-flex justify-content-center row">
        <h1> مرحبا صفحه ادارة طلبات المستخدم </h1>
        <div class="col-md-10">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>   #</th>
                            <th>اسم الخدمه  </th>
                            <th>اسم المستخدم</th>
                            <th>رصيد المستخدم</th>
                            <th>السعر</th>
                            <th>الكميه المطلوبه</th>
                            <th>تاريخ عمل الطلب</th>
                            <th>حاله الطلب</th>
                            <th>تغيير حاله الطلب </th>
                            <th>حذف الطلب </th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                        {{--                        @dd($userorder)--}}
                        @forelse($orders as $order)
                            <tr scope="row" class="cell-1">
                                <td>{{$order->id}}  </td>
                                <td>{{$order->name}}  </td>
                                {{--Calling the relationship tables, Note :the null value returns error! --}}
                                {{--        call the model ---> then the function in this model in which the relationship implemented ----> then its attrbutes (all in the model requsted)   --}}
{{--                                                @dd($order)--}}
{{--                                                           <td>{{$order->user ? $post->user:'N/A*'}}</td>--}}
                                                        <td>{{$order->user->name}}</td>
                                                        <td>{{$order->user->balance}}</td>

                                {{--                                <td>ERD!!!</td>--}}
{{--                                <td>ERD!!!</td>--}}
                                <td>${{$order->price}} </td>
                                <td>{{$order->quantity}}
                                <td>{{$order->created_at}}
{{--                                @dd($order->statusorder)--}}
{{--                                <td>{{$order->statusorder->id? $order->statusorder->name:'N/A'}}</td>--}}

                                </td>
                                    <td >
{{--                                        NOTE:::: plz add the --}}
                                    <form action="{{route('order.update',$order->id)}}" method="post"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->

                                        <select name="status_id" >
                                            <!-- loop on new table:order status -->
                                            <option value="0" selected >  اختر من القائمه   </option>
                                            @foreach($Status as $status)
                                            <option value="{{$status->id}}"> {{$status->name}}   </option>
{{--                                                @empty--}}
                                                @endforeach
                                        </select>
                                        @csrf
                                        <input name="mybtn" value="تحديث حالة الطلب" type="submit" class="btn btn-info ">
                                    </form>


                                </td>

                                <td>
                                    <form action="{{route('orders.req.delete',$order->id )}}" method="post"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->

                                        <input type="submit" class="btn-danger" value="حذف">
                                        @csrf
                                    </form>


                                </td>
                                {{--                            <td><i class="fa fa-ellipsis-h text-black-50"></i>--}}
                                {{--                                <button type="button" onclick={ handleToggle= } class="btn btn-success">  </button> </td>--}}
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>













@endsection
