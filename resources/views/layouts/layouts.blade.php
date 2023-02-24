<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/open-sans-condensed-2" rel="stylesheet">
    <title>{{env('APP_NAME')}}</title> 

@vite('resources/js/app.js')
</head>
<body>
@include('header')
<main>
@yield('main-content')
</main>
@include('footer')
    
</body>
</html>