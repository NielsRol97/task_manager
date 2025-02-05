<header class="header_wrapper">
    <form action="{{ route('logout') }}" method="post" id="logOutForm">
        @csrf
    </form>
    <div class="header_left">
        <nav class="nav_container">
            <ul class="nav_block">
                @guest
                    <!-- Alleen zichtbaar voor gasten -->
                    <li class="nav_item">
                        <a href="{{ route('view.login') }}" class="nav_link">{{ __('Inloggen') }}</a>
                    </li>
                    <li class="nav_item">
                        <a href="{{ route('view.register') }}" class="nav_link">{{ __('Registreren') }}</a>
                    </li>
                @endguest
                @auth
                    <!-- Alleen zichtbaar voor ingelogde gebruikers -->
                    <li class="nav_item">
                        <span class="nav_user">{{ __('Welkom, ') . Auth::user()->name }}</span>
                    </li>
                    <li class="nav_item">
                        <a 
                            onclick="event.preventDefault(); document.getElementById('logOutForm').submit();" 
                            href="{{ route('logout') }}" 
                            class="nav_link"
                        >
                            {{ __('Uitloggen') }}
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <div class="header_right">
        <!-- Hier kun je eventueel extra inhoud plaatsen -->
    </div>
</header>
