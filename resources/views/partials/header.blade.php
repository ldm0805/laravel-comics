<header>
    <div class="visa-cont">
        <div class="visa">
            <p>Dc Power Visa</p>
            <p>Additional Dc Sites<i class="fa-regular fa-registered ps-1"></i></p>
        </div>
    </div>
    <section>
        <div>
            <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
        </div>
        <div>
            <nav class="nav_cont">
                <ul>
                    @foreach($productsmenu as $menuitem)
                    <li>
                        <a
                class="{{Route::currentRouteName() == 'homepage' ? 'active' : ''}}" 
                href="{{$menuitem['url']}}">{{$menuitem['label']}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
</div>
<div class="search">
    <nav class="input-cont">
        <input type="text" placeholder="Type something...">
    </nav>
</div>
</section>
</header>
