
    <!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @extends('layouts.navigation')

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
<!--
{{--<head>--}}
{{--    <link rel="shortcut icon" type="image/ico" href="https://cdn.mypanel.link/s0wjnr/tyn10oze41azbpad.jpeg" />--}}

{{--    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--    <![endif]-->--}}
{{--    <style>.integration-fixed{position:fixed;z-index:10000000}.integration-fixed__top-left{top:0;left:0}.integration-fixed__top-right{top:0;right:0}.integration-fixed__bottom-left{bottom:0;left:0}.integration-fixed__bottom-right{bottom:0;right:0}--}}
{{--    </style>--}}


{{--    <script type="text/javascript" src="https://app.getbeamer.com/js/beamer-embed.js" defer="defer"></script>--}}

{{--    <!-- Global site tag (gtag.js) - Google Analytics -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-225290177-1"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}
{{--        function gtag(){dataLayer.push(arguments);}--}}
{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'UA-225290177-1');--}}
{{--    </script>--}}

{{--    --}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>--}}




{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/s0wjnr/ykaqqd6cl7fzi5h5.css">--}}



{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>--}}




{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/s0wjnr/mqf4uwjn30jbalb0.css">--}}



{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>--}}




{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/libs/bootstrap-datetimepicker/4.17.47/bootstrap-datetimepicker.min.css">--}}



{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>--}}




{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}



{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Material+Icons&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Modareb/files/master/fonts/neo.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/css/font-awesome/css/all.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://templates.hibootstrap.com/bonsa/default/assets/css/owl.carousel.min.css">--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Cairo|Changa|El+Messiri|Harmattan|Jomhuria|Katibeh|Lalezar|Lateef|Lemonada|Mada|Mirza|Rakkas|Reem+Kufi|Scheherazade" rel="stylesheet"/>--}}




{{--    <link rel="stylesheet" type="text/css" href="https://cdn.mypanel.link/global/c3gyq3shygmabbke.css">--}}
{{--</head>--}}

-->
<body class="auth">
<ol class="breadcrumb">
    <li>
        <a href="#"><span style="font-size: 20px"> مرحباً, {{Auth::user()->name }}
  </span></a>
    </li>
</ol>
<div id="wrapper" class="toggled">
    <div id="page-wrapper">

        {{--        <div class="inner-page-wrapper">--}}
        {{--            <div class="container-fluid service-page order-page">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-lg-12">--}}
        {{--                        <div class="table-responsive table-borderless">--}}
        {{--                            <table class="table  rtl-table ">--}}

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








<!-- Main variables *content* -->
{{--            <style>--}}

{{--                body {--}}
{{--                    font-family: 'cairo';--}}

{{--                }--}}
{{--                .btn-xs, .btn-group-xs > .btn {--}}
{{--                    padding: 1px 5px;--}}
{{--                    line-height: 1.5;--}}
{{--                    background: linear-gradient(90deg, rgb(60 68 100) 0%, rgb(60 68 100) 100%);--}}
{{--                    color: #fff;--}}
{{--                    border: none;--}}
{{--                    font-size: 16px;--}}
{{--                    min-width: 100%;--}}
{{--                    margin-bottom: 10px;--}}
{{--                    border-radius: 35px;--}}
{{--                    font-weight: 400;--}}
{{--                    margin-top: 20px;--}}
{{--                }--}}
{{--                .order-page .table > thead > tr > th:nth-child(2) {--}}
{{--                    width: 10%;--}}
{{--                }--}}
{{--                .order-page .table > thead > tr > th:nth-child(3) {--}}
{{--                    width: 26%;--}}
{{--                }--}}
{{--                .order-page .link > a{--}}
{{--                    color:  #2a04fc;--}}
{{--                }--}}
{{--                .badge {--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                    background-color:  #00a56f ;--}}

{{--                }--}}







{{--                .badge.pending {--}}
{{--                    background-color: rgb(35 210 226);--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}

{{--                .badge.partial {--}}
{{--                    background-color: #ed0631;--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}

{{--                .badge.inprogress {--}}
{{--                    background-color: #615dfa;--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}

{{--                .badge.complete,--}}
{{--                .badge.answered {--}}
{{--                    background-color: #089200;--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}

{{--                .badge.processing {--}}
{{--                    background-color: #2bc3db;--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}

{{--                .badge.canceled{--}}
{{--                    background-color: #ed0631;--}}
{{--                    padding: 10px 14px;--}}
{{--                    border-radius: 5px;--}}
{{--                    color: #fff;--}}
{{--                }--}}





{{--            </style>--}}

{{--            <div class="container-fluid neworder">--}}
{{--                 <div class="row">--}}
{{--                    <div class="col-lg-12">--}}

{{--                            <!-- SECTION BANNER ICON -->--}}
{{--                             <!-- /SECTION BANNER ICON -->--}}
{{--                            <!-- SECTION BANNER TITLE -->--}}
{{--                            <center><p style="font-weight:700;font-size:30px;color:#fff"class="section-banner-title">سجل الطلبات</p></center>--}}
{{--                            <!-- /SECTION BANNER TITLE -->--}}
{{--                            <!-- SECTION BANNER TEXT -->--}}
{{--                            <center><p style="font-weight:400;font-size:16px;color:#fff" class="section-banner-text">نقوم بتحديث خدماتنا باستمرار للتأكد من أننا نقدم لك فقط الخدمات الأسرع والأكثر موثوقية في السوق.</p></center>--}}
{{--                            <!-- /SECTION BANNER TEXT -->--}}
{{--                        </div>--}}
{{--                    </div></div>--}}
{{--                <br>--}}
{{--            </div>--}}

{{--<style>--}}
{{--    .whatsapp-container{padding:24px}.whatsapp-button{width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF!important;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;display:flex;align-items:center;justify-content:center;text-decoration:none!important;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;transform:scale(0.9)}.whatsapp-button:hover{transform:scale(1);background-color:#1fcc5f}--}}
{{--</style>--}}
{{--<div class="integration-fixed integration-fixed__bottom-left">--}}
{{--    <div class="whatsapp-container">--}}
{{--        <a href="https://api.whatsapp.com/send?phone=#" target="_blank" class="whatsapp-button">--}}
{{--            <i class="fab fa-whatsapp"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}


{{--<ul class="nav navbar-nav navbar-right navbar-right-block">--}}


{{--</ul>--}}
{{--    <li>--}}


{{--</li>--}}



</body>
</html>
