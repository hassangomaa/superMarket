
{{--@extends('layouts.navigation')--}}

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/order/">LOGS</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/order/create">new</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/order/edit">manage</a> </li>
                </li>
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
                                <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                    <option value="52"  selected  align="right" dir="rtl" >  💰 ايرادات يوتيوب</option>
                                </select>
                            </div>
                            <div class="form-group">
                                 <label for="orderform-category" class="control-label"> الخدمات </label>
                                <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                    <option value="52"  selected  align="right" dir="rtl" >  💰 ايرادات يوتيوب</option>
                                </select>
                            </div>

                         <h4>
                             <value  align="left" dir="rtl"   id=""> وصف الخدمة :</value>
                             <br>
                             <textarea readonly>

                             </textarea >
                          </h4>
                              <h4>
                                <value  align="right" dir="ltr"   id="serviceName"> الجودة :
                                </value>

                                <br>
                                <value style="font-size: 15px;font-weight: 100;" id="serviceName"> مرتفعة
                                </value>
                                <br>
                                <span id="serviceId" style="font-weight: bold;"> التقييم :</span>
                            </h4>
                 <div class="form-group">
                    <label class="col-lg-3 control-label">  السعر </label>
                    <div class="col-lg-8">
                        <input class="form-control" type="email" placeholder="" name="" value="" readonly>
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

