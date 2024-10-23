<header id="app-header">
    <div class="container">
        <div id="nav-header">
            {{-- logo --}}
            <a href="#" class="img-box"> <img class="img-fluid" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo"></a>

            {{-- list-links --}}
            <nav>
                <ul id="list-links">
                    @foreach ($listLinks as $link)
                    <li class="nav-item">
                        <a href="#">{{ strtoupper($link) }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    {{-- img bg jumbo --}}
    <div id="jumbo-header"></div>
</header>


