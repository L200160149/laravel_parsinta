<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Dewaning'}}</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    @yield('style')

</head>
<body>
    @include('layouts.navigation')
    <div class="py-4">

        @include('alert')

        @yield('content')
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>