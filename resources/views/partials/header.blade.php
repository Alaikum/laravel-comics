<header>
    <nav>
        <div class="container">
            <figure>
                <img src="{{asset('img/dc-logo.png')}}" alt="Logo" >
     
            </figure>

            <ul>
                <?php
                $links = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'Shop', 'News'];
                ?>
                @foreach ($links as $link)
                    
                <li  class="{{ $loop->first ? 'active' : '' }}">
                    
                    <a href="#">
                        {{ $link }}
                    </a>
                </li>
                @endforeach

            </ul>

        </div>
    </nav>
</header>
