<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Montserrat:400,700|Vollkorn:400i|Roboto+Slab" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>MyBlog - {{ $title }}</title>
</head>
<body>
@include('header')

@section ('main')
@show

@include('footer')
</body>
</html>