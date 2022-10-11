<header>
    <nav>
        <div class="container">
            <figure>
                <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">

            </figure>

            <ul>
                <?php
                $links = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'shop', 'news'];
                ?>
                @foreach ($links as $link)
                    <a href="{{ route($link) }}">
                        <li class="{{ Request::route()->getName() === $link ? 'active' : '' }}">

                            {{ $link }}
                        </li>
                    </a>
                @endforeach

            </ul>

        </div>
    </nav>
</header>
