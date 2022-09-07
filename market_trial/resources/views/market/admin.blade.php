@extends('layouts.navigation')
@section('nav')

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

<body dir="rtl" style="direction: rtl" >
                    <div
{{--                style="font-size:80px  ; padding-right: 20%  ;border-left:#2d3748;  vertical-align: middle;  align-content:center ;  margin-top:30px ;color: #00a56f ; background-color: #2d3748 ;background-position: right top "--}}

                    >
                <h1> مرحبا صفحه المشرف  </h1>
                        <div class="table-responsive table-borderless">

                <table class="table">
                <thead>
                    <tr>
                        <th>  اقسام  القائمه </th>
                        <th>اقسام الخدمات </th>
                        <th>قائمه الطلبات  للمراجعه </th>

                    </tr>
                </thead>
                    <tbody class="table-body">
                          <tr scope="row" class="cell-1">
                          <td>
                              <form action="{{route('orders.show')}}" method="get"
                                    class="form-hidden"><!-- SEND DELETED status to the table-->

                                  <button class="btn btn-warning delete-author">تحديث الحالي </button>
                                  @csrf
                              </form>
                             </td>
                                 <td>
                                     <form action="{{route('services.show')}}" method="get"
                                           class="form-hidden"><!-- SEND DELETED status to the table-->

                                         <button class="btn btn-warning delete-author">تحديث الحالي </button>
                                         @csrf
                                     </form>
                          </td>
                                 <td>
                              <form action="{{route('orders')}}" method="get"
                                    class="form-hidden"><!-- SEND DELETED status to the table-->

                                  <button class="btn btn-warning delete-author">تحديث الحالي </button>
                                  @csrf
                              </form>
                          </td>

                          </tr>
                    <tr>

                        <td >
                                <button class="btn btn-warning "> <a href="{{route('order')}}"> اضافه جديد</a>  </button>

                        </td>

                        <td >
                                <button class="btn btn-warning "> <a href="{{route('service')}}"> اضافه جديد</a>  </button>

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

