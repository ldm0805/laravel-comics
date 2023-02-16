<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    @foreach($products as $product)
    <img src="{{$product['thumb']}}" alt="">
    <h1 class="text-center">{{$product['title']}}</h1>
    @endforeach
</body>
</html>