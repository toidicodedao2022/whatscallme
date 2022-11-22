{{--https://getbootstrap.com/docs/5.0/examples/blog/--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','DEV TOOL XYZ')</title>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js" type="text/javascript"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="master">
    <div class="container">
        @include('inc/header')
        @include('inc/nav-scroll')
    </div>
    <main class="container">
        @yield('content')

    </main>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>
    @stack('scripts')
</body>

</html>
