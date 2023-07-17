<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comic</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
</head>

<body>
    @include('components.header')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('components.footer')
</body>

</html>
