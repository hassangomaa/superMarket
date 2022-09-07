
{{--@extends('layouts.navigation')--}}

    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @extends('layouts.navigation')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/order/">orderlist:</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/order/create">ordernew</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/order/edit">ordermanage</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/service/">servicelist:</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/service/create">servicenew</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="admin/service/edit">servicemanage</a> </li>

                </li>
            </ul>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="user/order/">LOGS</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="user/order/create">request</a> </li>
            </ul>

        </div>
        </div>
    </nav>
</head>
<body dir="rtl" >
<div class="container bootstrap snippets bootdey">
    <h1 class="text-info">طلب جديد</h1>
    <hr>
    <div class="row">
        <!-- edit form column -->
        {{--    //Form errors message--}}
        <dev class="error">
            @if ($errors->any())
                <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <ul>
                                    <a class="panel-close close" data-dismiss="alert">×</a>
                                    <i class="fa fa-coffee">{{ $error }}</i>
                                    This is an
                                    <strong>.alert</strong>.
                                </ul>
                                @endforeach
                            </div>
                    </div>
                    @endif
                    {{--                            //////////////FORM--}}
                    <form class="yourform" action="store" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div class="col-lg-8">
                                <!-- retrive the old value from the model table  -->
                                <div class="form-group">
                                    <label for="orderform-category" class="control-label">القائمة</label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" placeholder="جديد" name="name" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="orderform-category" class="control-label"> الخدمات </label>
                                    <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                        @foreach($services as $service)
                                            <option value=""  selected  align="right" dir="rtl" >  💰   {{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <h4>
                                    <value  align="left" dir="rtl"   id=""> وصف الخدمة :</value>
                                    <br>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" placeholder="جديد" name="name" value="">
                                    </div>
                                </h4>
                                <h4>
                                    <value  align="right" dir="ltr"   id="serviceName"> الجودة :</value>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="text" placeholder="جديد" name="name" value="">
                                    </div>

                                    <br>
                                    <span id="serviceId" style="font-weight: bold;"> التقييم :</span>
                                </h4>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" placeholder="جديد" name="name" value="">
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">  السعر </label>
                                    <div class="col-lg-8">
                                        <input class="form-control" type="email" placeholder="" name="" value="">
                                    </div>


                                </div>
                                <button type="submit" class="submitButton dash-btn">شراء الخدمة</button>
                                <br>
                                <br>
                                <br>
                                @csrf
                            </div>

                    </form>

                </div> </dev> </div> </div> </body> </html>  </div> </dev>

<style>
    body{margin-top:20px;}
    .avatar{
        width:200px;
        height:200px;
    }
</style>

