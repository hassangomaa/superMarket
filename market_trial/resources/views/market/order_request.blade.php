
{{--@extends('layouts.navigation')--}}

<!DOCTYPE html>
<html lang="ar">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">





    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid"> <a class="navbar-brand" href="/">market</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/">ORDER</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="/logs">order LOGS</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="/maange" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"> MANGE orders </a>


                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <style>
        body {
            background: #eee
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <title>New order</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/ico" href="https://cdn.mypanel.link/s0wjnr/tyn10oze41azbpad.jpeg" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>.integration-fixed{position:fixed;z-index:10000000}.integration-fixed__top-left{top:0;left:0}.integration-fixed__top-right{top:0;right:0}.integration-fixed__bottom-left{bottom:0;left:0}.integration-fixed__bottom-right{bottom:0;right:0}
    </style>


    <script type="text/javascript" src="https://app.getbeamer.com/js/beamer-embed.js" defer="defer"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-225290177-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-225290177-1');
    </script>








    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>




    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/s0wjnr/ykaqqd6cl7fzi5h5.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>




    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/s0wjnr/mqf4uwjn30jbalb0.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>




    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/libs/bootstrap-datetimepicker/4.17.47/bootstrap-datetimepicker.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>




    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">

    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>




    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/global/c3gyq3shygmabbke.css">
</head>
<body class="auth">
<div id="wrapper" class="toggled">
    ////////////////////////////////////


    /////////////////////////////////
    <div id="page-wrapper">
        <div class="inner-page-wrapper">







            <!-- Main variables *content* -->
            <style>
                .card-top-blk {
                    position: relative;
                    padding-left: 60px;
                    padding-top: 10px;
                }
                .card-top-blk img {
                    max-width: 50px;
                    width: 50px;
                    position: absolute;
                    left: 0;
                    top: 15px;
                }
                .modal-title {
                    color: #fff;
                    font-weight: 600;
                }
                .points-btn {
                    position: absolute;
                    left: 120px;
                    top: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 20px;
                    height: 20px;
                    background-color: #ffb100;
                    color: #000;
                    border-radius: 50px;
                    text-align: center;
                    line-height: 20px;
                    text-decoration: none;
                    font-size: 12px;
                    box-shadow: 0 0 0 0 rgb(253 240 1);
                    animation: pulse 2s infinite;
                }
                .points-btn:hover {
                    background-color: #ffb100;
                    color: #000;
                }
                td, th {
                    padding: 10px;
                }
                .gizli{
                    display: none!important;
                    opacity: 0!important;
                    overflow: hidden!important;
                }
            </style>
            <style>
                td, th {
                    padding: 10px;
                }
                body {
                    font-family: 'cairo';

                }






            </style>



{{--            @dd(Auth:: )--}}

            <div class="container-fluid neworder">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-banner" style="background: url(https://res.cloudinary.com/smmegyfans-com/image/upload/v1658155708/smmegyfans/v1016-b-08_m0lupu_h5hfuo.png);background-size: cover;background-position: center;background-repeat: no-repeat;">

                            <!-- SECTION BANNER ICON -->
                            <center><img class="section-banner-icon" width="185"  align="right" dir="ltr" src="https://res.cloudinary.com/smmegyfans-com/image/upload/v1658844050/smmegyfans/n5ej4gwfxf68goby_j4nhi7.png" alt="section-icon"></center>
                            <!-- /SECTION BANNER ICON -->
                            <!-- SECTION BANNER TITLE -->
{{--                            <center><p style="font-weight:700;font-size:30px;color:#fff"class="section-banner-title"> {{Auth::user()->name }}--}}
                                     ,مرحباً</p></center>


                            <!-- /SECTION BANNER TITLE -->
                            <!-- SECTION BANNER TEXT -->
                            <center><p style="font-weight:400;font-size:16px;color:#fff" class="section-banner-text">نفخر بتقديم أفضل الخدمات التسويقية بأرخص الأسعار وبجودة عالية.</p></center>
                            <center><p style="padding-bottom: 20px;font-weight:400;font-size:16px;color:#fff" class="section-banner-text">كل عام وأنتم بخير، نتمنى لكم 2022 سعيدة خالية من الأوبئة.</p></center>
                            <!-- /SECTION BANNER TEXT -->
                        </div>
                    </div></div>
                <br>
            </div>



            <div class="container-fluid neworder">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row stat">


                            <div class="col-sm-6">
                                <div style="background: url(https://res.cloudinary.com/smmegyfans-com/image/upload/v1658155708/smmegyfans/v1016-b-08_m0lupu_h5hfuo.png);background-size: cover;background-position: center;background-repeat: no-repeat;" class="media account-level well">
                                    <div class="col-md-4">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_v6iZgy.json"background="transparent"speed="2"style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                                    </div>
                                    <br>
                                    <div class="media-body">
                                        <a href="#" class="points-btn" data-toggle="modal" data-target="#statusModal"><i class="fas fa-exclamation"></i></a>

                                        <center>
                                            <h4 class="media-heading" style="margin-left: 50px;">الحالة</h4>
                                        </center>
                                        <center>
                                            <p style="margin-left: 50px;"class="media-desc">
                                                <span class="counter">جديد </span>

                                            </p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="background: url(https://res.cloudinary.com/smmegyfans-com/image/upload/v1658155708/smmegyfans/v1016-b-08_m0lupu_h5hfuo.png);background-size: cover;background-position: center;background-repeat: no-repeat;" class="media total-balance well">
                                    <div class="col-md-4">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_enwlck3q.json"background="transparent"speed="2"style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                                    </div>
                                    <br>
                                    <div class="media-body">
                                        <center>
                                            <h4 class="media-heading" style="margin-left: 50px;">الطلبات</h4>
                                        </center>
                                        <center>
{{--                                            <p style="margin-left: 50px;" class="media-desc">{{Auth::user()->orderscount }}</p>--}}
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid neworder">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row stat">


                            <div class="col-sm-6">
                                <div style="background: url(https://res.cloudinary.com/smmegyfans-com/image/upload/v1658155708/smmegyfans/v1016-b-08_m0lupu_h5hfuo.png);background-size: cover;background-position: center;background-repeat: no-repeat;"  class="media total-spent well">
                                    <div class="col-md-4">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_dkamovet.json"background="transparent"speed="2"style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                                    </div>
                                    <br>
                                    <div class="media-body">
                                        <center>
                                            <h4 class="media-heading" style="margin-left: 50px;">رصيدك</h4>
                                        </center>
                                        <center>
                                            <p style="margin-left: 50px;" class="media-desc">${{Auth::user()->balance }}.00 </p>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div style="background: url(https://res.cloudinary.com/smmegyfans-com/image/upload/v1658155708/smmegyfans/v1016-b-08_m0lupu_h5hfuo.png);background-size: cover;background-position: center;background-repeat: no-repeat;" class="media total-balance well">
                                    <div class="col-md-4">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_y2xnpiw9.json"background="transparent"speed="2"style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
                                    </div>
                                    <br>
                                    <div class="media-body">
                                        <center>
                                            <h4 class="media-heading" style="margin-left: 50px;">المنفق</h4>
                                        </center>
                                        <center>
                                            <p style="margin-left: 50px;" class="media-desc">${{Auth::user()->totalpaid }}</p>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>






            <br>
            <br>





















            <div class="container-fluid neworder">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="well">
                            <ul id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="tabs">
                                <li class="active"><a style="font-size:20px;justify-content: left;" href="#abc" data-toggle="tab" aria-expanded="true"><i class="fa fa-check-square"></i>طلب جديد</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active in" id="neworder" role="tabpanel" aria-labelledby="home-tab">
                                    <form id="order-form"  class="rtl-form" action="/" method="post" id="order-form">
                                        <div class="form-group">
                                            /////////////////////////////////////////////////////////////////////////////////////////////
                                            <label for="orderform-category" class="control-label">القائمة</label>

{{--                                            @dd($orders);--}}

                                            <select class="form-control" id="orderform-category" name="OrderForm[category]">
                                                @forelse($orders as $order)
                                                <option value=""  selected  align="right" dir="rtl" >{{$order->name}} 💰   </option>
                                                @empty
                                                @endforelse
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            ///////////////////////////////////////////////////////////////
                                            <label for="orderform-service" class="control-label">الخدمات</label>
                                            <select id="orderform-service" class="form-control" name="OrderForm[service]">

                                            @forelse($services as $service)

                                                <option value=""  selected  align="right" dir="rtl" >{{$service->name}} 💰💰   </option>

                                            @empty
                                            @endforelse
                                            </select>
                                        </div>


                                        <div class="card-top-blk">
                                            <img src="https://res.cloudinary.com/smmegyfans-com/image/upload/v1651788879/smmegyfans/WhatsApp-Image-2022-03-23-at-10.07_gc6e21.png" alt="">

                                            <h4>
                                                <value  align="right" dir="ltr"   id="serviceName"> الجودة :
                                                </value>
                                                <value style="font-size: 15px;font-weight: 100;" id="serviceName"> مرتفعة
                                                </value>
                                                <span id="serviceId" style="font-weight: bold;"> التقييم :
 <i style="color:rgb(252, 215, 3)" class="fas fa-star" aria-hidden="true"></i><i style="color:rgb(252, 215, 3)" class="fas fa-star" aria-hidden="true"></i><i style="color:rgb(252, 215, 3)" class="fas fa-star" aria-hidden="true"></i><i style="color:rgb(252, 215, 3)" class="fas fa-star" aria-hidden="true"></i><i style="color:rgb(252, 215, 3)" class="fas fa-star" aria-hidden="true"></i>
</span>
                                            </h4>
                                        </div>



                                        <div class="form-group hidden fields" id="service_description">
                                            <label for="service_description" class="control-label"></label>
                                            <div class="panel-body border-solid border-rounded">

                                            </div>
                                        </div>
                                        <div id="fields"></div>
                                        <div class="form-group">
                                            <label for="charge" class="control-label">السعر</label>
                                            <input type="text" class="form-control" id="charge" value="{{$service->price}}" readonly>
                                        </div>
                                        <div class="card-top-blk">
                                            <h4><span id="serviceId" style="font-weight: bold;"><value>
                                                    </value></span>
                                                <value>
                                                </value></value> <value style="font-size: 15px;font-weight: 100;" id="serviceName"></value>
                                            </h4>
                                        </div>

                                        <div class="card-top-blk">
                                            <img align="right" dir="rtl" src="https://cdn.mypanel.link/s0wjnr/a1qw9x1q0sijipff.png" alt="">
                                            <h4>
                                                <span id="serviceId" style="font-weight: bold;"><value id="serviceName"> ملحوظات  </value></span>
                                                <value id="serviceName">
                                                    <value id="serviceName"> تحذير  </value></value> <value style="font-size: 15px;font-weight: 100;" id="serviceName"></value>
                                            </h4>
                                        </div>




                                        <div class="" style="padding: 15px; margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;color: #000;background-color: #fff;">
                                            <span style="font-size:18px;color:##FF0000;">1-</span><span>  لابد من قراءة وصف الخدمة جيداً.
</span>
                                            <br>
                                            <span style="font-size:18px;color:##FF0000;">2-</span><span>  لابد أن يكون الحساب عامًا وليس خاصًا.
</span>
                                            <br>
                                            <span style="font-size:18px;color:##FF0000;">3-</span><span>  لا تضع أكثر من طلب واحد للرابط في نفس الوقت.
 </span>
                                        </div>

                                        <input type="hidden" name="_csrf" value="ZkHt7l9WabWnMnrDXLozxzaKYE8FRdGAXYX6sAE12XcSMbuJOz0T0MYALfYNiWn2c8EGfVMGsuEz65PFcQWBFg==">
                                        <button type="submit" class="submitButton dash-btn">شراء الخدمة</button>
                                        <br>
                                        <br>
                                        <br>
                                        @csrf

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>











                    <div class="col-sm-5">
                        <div class="well">
                            <ul style="justify-content: center;" id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="tabs">
                                <li class="active"><a style="font-size:30px;justify-content: center;" href="#abc" data-toggle="tab" aria-expanded="true"><i class="fa fa-heart"></i> ما يميزنا</a></li></ul>


                            <center>
                                <marquee width="75%" behavior="alternate" >
                                    <img src="https://res.cloudinary.com/smmxboost/image/upload/v1629550283/7xf2xs3w86a5xlom_agrwgx_murwip.png" width="150" height="">
                                </marquee>
                            </center>



                            <ul style="justify-content" id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="2000">
                                <li class="active"><a style="font-size:20px;justify-content" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-percentage"></i>  ارخص وافضل الخدمات</a>


                                <li class="active"><a style="font-size:20px;justify-content: right;" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-fighter-jet"></i> توصيل سريع للطلبات</a></li></ul>


                            <ul style="justify-content" id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="2000">
                                <li class="active"><a style="font-size:20px;justify-content: right;" href="#abc" data-toggle="2000" aria-expanded="true"><i class="fas fa-headset"></i> دعم فني متواصل 24/7</a>


                                <li class="active"><a style="font-size:20px;justify-content: right;" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-money-bill-wave"></i> طرق دفع متنوعة </a></li></ul>


                            <ul style="justify-content" id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="2000">
                                <li class="active"><a style="font-size:20px;justify-content" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-phone-laptop"></i> لوحة تحكم سهلة </a>

                                <li class="active"><a style="font-size:20px;justify-content: right;" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-user-chart"></i> نظام تسويق بالعمولة</a></li></ul>

                            <ul style="justify-content" id="myTabs" class="video-tabs nav nav-tabs dash-tabs" role="tablist" data-tabs="2000">
                                <li class="active"><a style="font-size:20px;justify-content" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-baby"></i> خصم خاص للتجار </a>

                                <li class="active"><a style="font-size:20px;justify-content: right;" href="#abc" data-toggle="2000" aria-expanded="true"><i class="far fa-chart-line"></i> تحديث مستمر للخدمات</a></li></ul>


                        </div>
                    </div>





                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>







                </div></div>












        </div>
        <footer class="auth-mode">
            <div class="container-fluid">
                <div class="row footer-header">





                </div>

            </div>
        </footer>
    </div>
</div>
##################################################




<style>
    .whatsapp-container{padding:24px}.whatsapp-button{width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF!important;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;display:flex;align-items:center;justify-content:center;text-decoration:none!important;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;transform:scale(0.9)}.whatsapp-button:hover{transform:scale(1);background-color:#1fcc5f}
</style>
<div class="integration-fixed integration-fixed__bottom-left">
    <div class="whatsapp-container">
        <a href="https://api.whatsapp.com/send?phone=#" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</div>




<ul class="nav navbar-nav navbar-right navbar-right-block"></ul>


    <li>









</body>
</html>



