

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" dir="rtl" >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('orders')}}">orderlist:</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('order')}} ">ordernew</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('order.edit')}}">ordermanage</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('services')}}">servicelist:</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('service')}}">servicenew</a> </li>

                </li>
            </ul>
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('order.logs')}}">LOGS</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('order.request')}}">request</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{route('admin')}}">ADMIN</a> </li>
            </ul>
   <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/login">log-in</a> </li>
                <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                <input class="btn-danger" type="submit" value="log-out">
                        </form>
                         </li>

            </ul>

        </div>
        </div>
    </nav>

@yield('nav')
