<nav class="container">
    <div class="brand">
      <!-- LOGO NAVBAR -->
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""/>
    </div>
    <!-- LINK NAVBAR -->


    <ul class="navbar-links">
        @foreach ($links as $link)
        <a class="nav-link" href="#"> {{$link['text']}}</a>

        @endforeach



        {{-- <li v-for="(link, i) in navLinks" :key="i">
            <a class="nav-link" :href="link.href">
            {{ link.text }}
            <div class="border-b"></div>
            </a>
        </li> --}}
    </ul>
  </nav>
