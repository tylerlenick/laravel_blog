<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>{{config('app.name', 'laravel_blog')}}</title>
</head>
<body>
    @include('inc.navbar')
</br>
</br>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>