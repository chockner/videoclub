<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>