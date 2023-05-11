<header>
    <nav class="container">
        <div class="brand">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}"alt="">
        </div>
        <!-- LINK NAVBAR -->
        <ul class="navbar-links">

            @foreach ($links as $key => $link)
                <li>
                    <a class="nav-link" href="#"> {{ $link }}</a>
                </li>
            @endforeach

            {{--
                <li class="nav-link active">CHARACTERS</li>
                <li class="nav-link">COMICS</li>
                <li class="nav-link">MOVIES</li>
                <li class="nav-link">TV</li>
                <li class="nav-link">GAMES</li>
                <li class="nav-link">VIDEOS</li>
                <li class="nav-link">FANS</li>
                <li class="nav-link">NEWS</li>
                <li class="nav-link">COLLECTIBLES</li>
                <li class="nav-link">SHOP</li>
                --}}
        </ul>
    </nav>
</header>
