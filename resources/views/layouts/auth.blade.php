<html>
    <head>
        <title>Lorem Ipsum</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @section('style')
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
        @show
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>