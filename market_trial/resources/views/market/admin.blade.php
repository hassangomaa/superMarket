@extends('layouts.navigation')
@section('nav')

<html lang="ar" dir="rtl">

<head>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<body dir="rtl" style="direction: rtl" >
                    <div
{{--                style="font-size:80px  ; padding-right: 20%  ;border-left:#2d3748;  vertical-align: middle;  align-content:center ;  margin-top:30px ;color: #00a56f ; background-color: #2d3748 ;background-position: right top "--}}

                    >
                <h1> مرحبا صفحه المشرف  </h1>
                        <div class="table-responsive table-borderless">

                <table class="table">
                <thead>
                    <tr>
                        <th>  اقسام للقائمه </th>
                        <th>اقسام الخدمات </th>
                        <th>قائمه الطلبات  للمراجعه </th>

                    </tr>
                </thead>
                    <tbody class="table-body">
                          <tr scope="row" class="cell-1">
                          <td>
                              <form action="{{route('orders.show')}}" method="get"
                                    class="form-hidden"><!-- SEND DELETED status to the table-->

                                  <button class="btn btn-warning delete-author">تحديث  </button>
                                  @csrf
                              </form>
                             </td>
                                 <td>
                                     <form action="{{route('orders')}}" method="get"
                                           class="form-hidden"><!-- SEND DELETED status to the table-->

                                         <button class="btn btn-warning delete-author">تحديث  </button>
                                         @csrf
                                     </form>
                          </td>
                                 <td>
                              <form action="{{route('orders')}}" method="get"
                                    class="form-hidden"><!-- SEND DELETED status to the table-->

                                  <button class="btn btn-warning delete-author">تحديث  </button>
                                  @csrf
                              </form>
                          </td>

                          </tr>
                </tbody>
            </table>
                        </div>
{{--                <h2> admin dashboard  </h2>--}}
{{--                <hr> admin dashboard  </hr>--}}
{{--                <h3> show orders menu   </h3>--}}
            </div>

</body>
</html>
@endsection

{{--<head dir="rtl">--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/order/">orderlist:</a> </li>--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/order/create">ordernew</a> </li>--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/order/edit">ordermanage</a> </li>--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/service/">servicelist:</a> </li>--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/service/create">servicenew</a> </li>--}}
{{--                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/service/edit">servicemanage</a> </li>--}}

{{--                </li>--}}
{{--            </ul>--}}
{{--            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">--}}

{{--            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/user/order/">LOGS</a> </li>--}}
{{--            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/user/order/create">request</a> </li>--}}
{{--             </ul>--}}

{{--        </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</head>--}}


