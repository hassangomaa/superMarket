@extends('layouts.navigation')
@section('nav')

    <!DOCTYPE html>
<html  lang="ar" dir="rtl">
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
    <h1 class="text-info"> شراء طلب جديد للمستخدم</h1>
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
            <form class="yourform" action="{{route('user.service.store')}}" method="post" autocomplete="off">
                @csrf
                <div class="form-group">
                     <div class="col-lg-8">
                         <!-- retrive the old value from the model table  -->
                             <div class="form-group">
                                 <label for="orderform-category" class="control-label">القائمة</label>
{{--                                 <input class="form-control" type="text" placeholder="0" name="name" value="0" required >--}}
                                 <select class="form-control" id="orderform-category" name="name">
                                    <option value="0"  selected  align="right" dir="rtl" >  💰اختر نوع الخدمه</option>
                                    @foreach($orders as $order)
                                    <option value="{!! $order->id !!}">  💰{!! $order->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                                  <label for="orderform-category" class="control-label"> الخدمات </label>
                                <select class="form-control" id="orderform-category" name="service_id">
                                    <option value="0"  selected  align="right" dir="rtl" >  💰اختر الخدمه</option>
                                @foreach($services as $service)
                                        <option value="{{$service->id}}"  selected  align="right"   >  💰{{$service->name}}</option>
                                    @endforeach
                                </select>
                          <label class="col-lg-3 control-label">  اللينك </label>
                              <input class="form-control" type="text" placeholder="" name="link" value="https://www.google.com/" required >
                             <input class="form-control" type="text" placeholder="" name="user_id" value="{{Auth::user()->id}}" hidden required >
                              <label class="col-lg-3 control-label"> الكميه المطلوبه </label>
                              <input class="form-control"  type="text" placeholder="1" name="quantity" value="1" required >
                             <br><!-- Note: call from the DB depands on above options!!! -->
                              <h4>
                             <label class="col-lg-3 control-label"> وصف الخدمة  </label>
                          </h4>
                         <textarea  name="details" cols="30" rows="8"  readonly>
                                {{$service->details}}
                                 </textarea>
                                <br>
                          <h4>التقييم   :    مرتفعة  ⭐⭐⭐⭐</h4>
                                <br>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">  السعر </label>
                         <input class="form-control" type="text" placeholder="" name="price" value="{{$service->price}}" readonly>

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
{{--                         @dd()--}}
                         <br>
                            <br>
                            <br>
                         @csrf
                    </div>
                    </div>
                    </form>
                    </div>

                    </dev>
                    </div>
                    </dev>
                    </div>
                    </div>
                    </body>
                    </html>


@endsection
