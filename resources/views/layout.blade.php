<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset("css/normolize.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">


    <title>{{$seo->meta_title}}</title>

    <meta name="description" content="{{$seo->meta_description}}">
    <meta name="keywords" content="{{$seo->meta_keywords}}">
</head>
<body>
    
    @include('components/header')
    @yield('content')
    @include('components/footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>