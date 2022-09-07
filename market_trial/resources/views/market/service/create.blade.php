@extends('layouts.navigation')
@section('nav')

    <!DOCTYPE html>
<html   >
<head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  >
<div dir="rtl" class="container bootstrap snippets bootdey">
    <h1 class="text-info"> خدمه جديده</h1>
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
                    <form class="yourform" action="{{route('service.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div class="col-lg-8">
                                <!-- retrive the old value from the model table  -->

                                <label class="col-lg-3 control-label">  اﻻسم:</label>
                                <div class="col-lg-8">

                                    <input class="form-control" type="text" placeholder="" name="name" value="" required >
                                    <br>
                                  <label class="col-lg-3 control-label"> السعر : </label>
                                </div>
                                <div class="col-lg-8">

                                    <input class="form-control" type="text" placeholder="" name="price" value="" required >
                                    <br>
                                    <label class="col-lg-3 control-label"> الحد اﻻدني : </label>
                                </div>
                                <div class="col-lg-8">

                                    <input class="form-control" type="text" placeholder="" name="mini" value="" required >
                                    <br>
                                    <label class="col-lg-3 control-label"> الحد اﻻقصي : </label>
                                </div>
                                    <div class="col-lg-8">

                                    <input class="form-control" type="text" placeholder="" name="max" value="" required >
                                    <br>
                                    <label class="col-lg-3 control-label"> متوسط الوقت : </label>
                                    </div>
                                        <div class="col-lg-8">
                                    <input class="form-control" type="text" placeholder="" name="timeaverage" value="" required >
                                    <br>
                                    <label class="col-lg-3 control-label"> تفاصيل الخدمه: </label>
                                        </div>
                                            <div class="col-lg-8">

                                    <input class="form-control" type="text" placeholder="" name="details" value="" required >
                                    <br>
                                <label class="col-lg-3 control-label"> تحديد نوع الخدمه: </label>
                                         </div>
                                <div class="col-lg-8">
                                    <select>
                                        <option value="0"  selected  align="right" dir="rtl" >  💰اختر نوع الخدمه</option>
                                    @foreach($orders as $order)
                                        <option value="{!! $order->id !!}">  💰{!! $order->name !!}</option>
                                    @endforeach
                                    </select>
                                     <br>
                                     <br>
                                     <br>
                                </div>
                                     <input type="submit" class="btn btn-info" required value="اضافه خدمه للقائمه" >
                                    @csrf
                                </div>
                            </div>


                    </form>

                </div> </dev> </div> </div> </body> </html>  </div> </dev>


@endsection
