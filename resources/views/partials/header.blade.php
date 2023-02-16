<header>
    <div>
        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">

    </div>
    <div>
    <nav class="nav_cont">
        <ul>
            @foreach($productsmenu as $product)
            <li>
                <a
                class="{{Route::currentRouteName() == 'homepgage' ? 'active' : ''}}" 
                 href="{{$product['url']}}">{{$product['label']}}</a>
            </li>
            @endforeach
        </ul>
    
    </nav>
    </div>
    <div>
        <nav>
            <input type="text" placeholder="Type something...">
          </nav>
    </div>
</header>
