<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{url('css/hamburgers.min.css')}}" />
        <link rel="stylesheet" href="{{url('css/custom.css')}}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="container-fluid">
            <div class="row">
                <div class="col col-12 col-md-9">
                    @yield('content')
                </div>
                <div class="col col-12 col-md-2 offset-md-1">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script>
        $('.hamburger').click(function() {
            $('.hamburger').toggleClass('is-active');
        });
    </script>
    <script>
        $('a[name="search"]').click(function(e) {
            e.preventDefault(); 
            $('.searchbar').focus();
            return false;
        });
</script>
</html>