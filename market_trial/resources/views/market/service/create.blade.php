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
        <div class="col-md-10">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                        <tr>
                            {{--                            <th class="text-center">--}}
                            {{--                                <div class="toggle-btn">--}}
                            {{--                                    <div class="inner-circle"></div>--}}
                            {{--                                </div>--}}
                            {{--                            </th>--}}
                            <th>   #</th>
                            <th>اسم الخدمه  </th>
                            <th>اسم المستخدم</th>
                            <th>حاله الطلب</th>
                            <th>السعر</th>
                            <th>الكميه المطلوبه</th>
                            <th>تاريخ عمل الطلب</th>
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
                                {{--                           <td>{{$order->userorder->user}}</td>--}}
                                <td>EDR!!!</td>
                                <td>{{$order->status}}</td>



                                <td>${{$order->price}} </td>

                                <td>{{$order->quantity}}
                                <td>{{$order->created_at}}
                                </td>
                                {{--                            <td>--}}
                                {{--                                <form action="/order/update/{{$order->id}}" method="post"--}}
                                {{--                                class="form-hidden"><!-- SEND APPROVED status to the table-->--}}
                                {{--                                <button class="btn btn-info delete-author">قبول الطلب</button>--}}
                                {{--                                @csrf--}}
                                {{--                                </form>                            </td>--}}


                                <td >
                                    {{--                                <input class="form-control" type="text" placeholder="Admin Name" name="name" value="">--}}
                                    <form action="admin/order/update/{{$order->id}}" method="post"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->
                                        <select name="choice" >
                                            <option value="" selected >  {{$order->status}}   </option>
                                            <option name="ordarwait"> قيد الانتظار   </option>
                                            <option name="ordarwait2" > جارى التنفيذ   </option>
                                            <option name="ordarwait3"> مكتمل   </option>
                                            <option name="ordarwait3"> مكتمل جزئيا   </option>
                                            <option name="ordarwait">ملغي   </option>
                                        </select>
                                        @csrf
                                    </form>
                                    <form action="/order/update/{{$order->id}}" method="post"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->

                                        <button class="btn btn-warning delete-author">تحديث حالة الطلب</button>
                                        @csrf
                                    </form>

                                </td>
                                <td>
                                    <button class="btn btn-danger delete-author">حذف الطلب</button>

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
