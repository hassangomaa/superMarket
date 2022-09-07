@extends('layouts.navigation')
@section('nav')
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>manage order </title>
</head>
<body>
<tr>
    <h1> مرحبا لوحه تحكم الخدمات </h1>

</tr>
<div class="container mt-5" lang="ar" dir="rtl">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم للخدمه </th>
                            <th>سعر للخدمه </th>
                            <th>الحد اﻻدني للخدمه </th>
                            <th>الحد اﻻقصي للخدمه </th>
                            <th>متوسط الوقت للخدمه </th>
                            <th>تفاصيل للخدمه </th>
                            <th>تاريخ للخدمه  </th>
                            <th> اداره للخدمه  </th>
                            <th> اداره للخدمه  </th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                        {{--                        @dd($userorder)--}}
                        @forelse($menus as $menu)
                            <tr scope="row" class="cell-1">
                                <td>{{$menu->id}}</td>

                                <td>{{$menu->name}}</td>
                                <td>{{$menu->price}}</td>
                                <td>{{$menu->mini}}</td>
                                <td>{{$menu->max}}</td>
                                <td>{{$menu->timeaverage}}</td>
                                <td>{{$menu->details}}</td>
                                <td>{{$menu->created_at}}
                                </td>

                                <td >

                                    <form action="{{route('service.edit',$menu)}}" method="get"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->

                                        <button class="btn btn-primary ">تحديث  </button>
                                        @csrf
                                    </form>

                                </td>
                                <td class="delete">
                                    <form action="{{route('service.destroy',$menu->id)}}" method="post"
                                          class="form-hidden"><!-- SEND DELETED status to the table-->

                                        <button class="btn btn-danger delete-author">حذف  </button>
                                        @csrf
                                    </form>

                                </td>
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





