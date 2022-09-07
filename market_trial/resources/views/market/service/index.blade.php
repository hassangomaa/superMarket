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

</head>

<body class="auth">
<ol class="breadcrumb">
    <li>
        <a href="#"><span style="font-size: 20px"> مرحباً, {{Auth::user()->name }}
  </span></a>
    </li>
</ol>
<div id="wrapper" class="toggled">
    <div id="page-wrapper">
        <div class="container mt-5" lang="ar" dir="rtl">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="rounded">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                <tr>
                                    <ul class="nav nav-pills  rtl-nav ">
                                        <td>   <li class="active"><a href="/orders"><i class="fas fa-list-ul"></i> الجميع</a></li></td>
                                        <td> <a href=""><i class=""></i> قيد الانتظار</a> </td>
                                        <td><a href=""><i class=""></i> جارى التنفيذ</a> </td>
                                        <td><a href=""><i class=""></i> مكتمل</a></td>
                                        <td><a href=""><i class=""></i> مكتمل جزئيا</a></td>
                                        <td><a href=""><i class=""></i> قيد التجهيز</a></td>
                                        <td><a href=""><i class=""></i> ملغي</a></td>
                                    </ul>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <br>
                            <div class="table-responsive">
                                <table class="table  rtl-table ">
                                    <thead>
                                    <tr>
                                        <th>رقم الطلب</th>
                                        <th>تاريخ</th>
                                        <th >الرابط</th>
                                        <th>السعر</th>
                                        <th> الكمية </th>
                                        <th>الخدمات</th>
                                        <th>الحالة</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order )
                                        <tr>
                                            <th> {{$order->id}} </th>
                                            <th>{{$order->created_at}}</th>
                                            <th > <a href="{{$order->link}}"> {{$order->link}} </a>  </th>
                                            <th>{{$order->price}}</th>
                                            <th>{{$order->quantity}} </th>
                                            <th>الخدمات </th> <!-- call many to many table -->
                                            <th>{{$order->status}}</th>
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
        </div>
    </div>
</div>



</body>
</html>
@endsection
