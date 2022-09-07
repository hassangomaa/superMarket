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
{{--                                 <input class="form-control" type="text" placeholder="0" name="name" value="0" required >--}}
                                 <select class="form-control" id="orderform-category" name="orderid">
                                    <option value="0"  selected  align="right" dir="rtl" >  💰اختر نوع الخدمه</option>
                                    @foreach($orders as $order)
                                    <option value="{!! $order->id !!}">  💰{!! $order->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                 <label for="orderform-category" class="control-label"> الخدمات </label>
                                <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                    @foreach($services as $service)
                                        <option value="{{$service->id}}"  selected  align="right"   >  💰{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                         <label class="col-lg-3 control-label">  اللينك </label>
                         <div class="col-lg-8">
                             <input class="form-control" type="url" placeholder="" name="link" value="https://www.google.com/" required >


                         <label class="col-lg-3 control-label"> الكميه المطلوبه </label>
                         <div class="col-lg-8">
                             <input class="form-control" type="text" placeholder="0" name="quantity" value="0" required >
                         </div>
                         <h4>
                             <br><!-- Note: call from the DB depands on above options!!! -->

                             <label class="col-lg-3 control-label"> وصف الخدمة  </label>
                             <div class="col-lg-8">
                                 <textarea cols="30" rows="8"  readonly>

                                 </textarea>
                                 <input class="form-control" type="text" placeholder="" name="" value="{{$service->details}}" required readonly >
                             </div>
                          </h4>
                              <h4>
                                <value  align="right" dir="ltr"   id="serviceName"> الجودة :{{$order->details}}</value>

                                <br>
                                <value style="font-size: 15px;font-weight: 100;" id="serviceName"> مرتفعة
                                </value>
                                <br>
                                <span id="serviceId" style="font-weight: bold;"> التقييم :</span>
                              </h4>
                 <div class="form-group">

                     <label class="col-lg-3 control-label">  السعر </label>
                     <div class="col-lg-8">
                        <input class="form-control" type="email" placeholder="" name="" value="  {{$service->price}}" readonly>
                    </div>

                     <div class="text-danger">
                     <h4 >
                          <value id="serviceName"> ملحوظات تحذير  </value>
                     </h4>
                                  1-    لابد من قراءة وصف الخدمة جيداً.

                                <br>
                                 2-   لابد أن يكون الحساب عامًا وليس خاصًا.

                                <br>
                                 3-   لا تضع أكثر من طلب واحد للرابط في نفس الوقت.
                            </div>
                     </div>
{{--                            <button type="submit" class="btn btn-info delete-author ">شراء الخدمة</button>--}}
                         <input type="submit" class="btn btn-danger" required value="شراء الخدمة" >
                         <br>
                            <br>
                            <br>
                         @csrf
                 </div>
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

@endsection
