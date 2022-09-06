<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>manage order </title>
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
<body>

<div class="container mt-5" lang="ar" dir="rtl">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="rounded">
                <div class="table-responsive table-borderless">
                    <table class="table">
                        <thead>
                        <tr>
{{--                            <th class="text-center">--}}
{{--                                <div class="toggle-btn">--}}
{{--                                    <div class="inner-circle"></div>--}}
{{--                                </div>--}}
{{--                            </th>--}}
                            <th>اسم الخدمه #</th>
                            <th>اسم المستخدم</th>
                            <th>حاله الطلب</th>
                            <th>الكميه المطلوبه</th>
                            <th>تاريخ عمل الطلب</th>
                            <th>قبول </th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
{{--                        @dd($userorder)--}}
                        @forelse($orders as $order)

                        <tr scope="row" class="cell-1">
                            <td>{{$order->name}}</td>


                                {{--Calling the relationship tables, Note :the null value returns error! --}}
{{--        call the model ---> then the function in this model in which the relationship implemented ----> then its attrbutes (all in the model requsted)   --}}
{{--                           <td>{{$order->userorder->user}}</td>--}}
                            <td>{{$order->name}}</td>



                            <td>${{$order->price}} </td>

                            <td>{{$order->quantity}}
                            <td>{{$order->created_at}}
                            </td>
                            <td>
                                <form action="/order/update/{{$order->id}}" method="post"
                                class="form-hidden">
                                <button class="btn btn-info delete-author">قبول الطلب</button>
                                @csrf
                                </form>                            </td>
                            <td class="delete">
                                <form action="/order/destroy/{{$order->id}}" method="post"
                                      class="form-hidden">
                                    <button class="btn btn-danger delete-author">حذف الطلب</button>
                                    @csrf
                                </form>
                            </td>
{{--                            <td><i class="fa fa-ellipsis-h text-black-50"></i>--}}
{{--                                <button type="button" onclick={ handleToggle= } class="btn btn-success">  </button> </td>--}}
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



{{--<style>--}}


{{--    @import url('https://fonts.googleapis.com/css?family=Assistant');--}}
{{--    body {--}}
{{--        background: #eee;--}}
{{--        font-family: Assistant, sans-serif;--}}
{{--    }--}}

{{--    .cell-1 {--}}
{{--        border-collapse: separate;--}}
{{--        border-spacing: 0 4em;--}}
{{--        background: #fff;--}}
{{--        border-bottom: 5px solid transparent;--}}
{{--        /*background-color: gold;*/--}}
{{--        background-clip: padding-box;--}}
{{--    }--}}

{{--    thead {--}}
{{--        background: #dddcdc;--}}
{{--    }--}}

{{--    .toggle-btn {--}}
{{--        width: 40px;--}}
{{--        height: 21px;--}}
{{--        background: grey;--}}
{{--        border-radius: 50px;--}}
{{--        padding: 3px;--}}
{{--        cursor: pointer;--}}
{{--        -webkit-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        -moz-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        -o-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        transition: all 0.3s 0.1s ease-in-out;--}}
{{--    }--}}

{{--    .toggle-btn > .inner-circle {--}}
{{--        width: 15px;--}}
{{--        height: 15px;--}}
{{--        background: #fff;--}}
{{--        border-radius: 50%;--}}
{{--        -webkit-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        -moz-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        -o-transition: all 0.3s 0.1s ease-in-out;--}}
{{--        transition: all 0.3s 0.1s ease-in-out;--}}
{{--    }--}}

{{--    .toggle-btn.active {--}}
{{--        background: blue !important;--}}
{{--    }--}}

{{--    .toggle-btn.active > .inner-circle {--}}
{{--        margin-left: 19px;--}}
{{--    }--}}


{{--</style>--}}


{{--<script>--}}

{{--    $(document).ready(function(){--}}

{{--        $('.toggle-btn').click(function() {--}}
{{--            $(this).toggleClass('active').siblings().removeClass('active');--}}
{{--        });--}}
{{--        handleToggle = () => {--}}
{{--            {{$orders->status='confirmed'--}}
{{--            }}--}}
{{--        }--}}
{{--    }--}}

{{--    );--}}
{{--</script>--}}








