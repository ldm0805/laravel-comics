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
    @include('partials.header')
    <div class="container-fluid bg_gray">
        <section>
            <div class="album">
                @foreach($products as $product)
                <div class="album-card">
                    <div class="album-image">
                        <img class="thumb" src="{{$product['thumb']}}" alt="">
                    </div>
                    <h5>{{$product['title']}}</h5>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <button class="button_load">Load more</button>
            </div>
        </section>
    </div>
    
    @include('partials.footer')
</body>
</html>