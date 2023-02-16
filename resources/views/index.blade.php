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
    <section>
        <div class="album">
            @foreach($products as $product)
            <div class="album-card">
                <div class="album-image">
                    <img class="thumb" src="{{$product['thumb']}}" alt="">
           
                        <h4>{{$product['title']}}</h4>
               
                </div>

            </div>
                @endforeach
        </div>
    </section>
    
    @include('partials.footer')
</body>
</html>