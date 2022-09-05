<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


    </head>


    @include('layouts.navigation')

    {{--    //Form errors message--}}
    <dev class="error">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </dev>



    </dev>

    <body >
    @yield('content')


    </body>
</html>
