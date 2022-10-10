<footer>
    @php
        $dcComics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'];
        $shop = ['Shop DC', 'Shop DC Collectibles'];
        $dc = ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
        $sites = ['Dc', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
    @endphp
    <div class="container">
        <div class="main__footer">
            <div class="ul__footer">
                <ul>
                    <h2>Dc comics</h2>
                    @foreach ($dcComics as $el)
                        <li>
                            <a href="##">
                                {{ $el }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h2>Shop</h2>
                    @foreach ($shop as $el)
                        <li>
                            <a href="##">
                                {{ $el }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h2>Dc</h2>
                    @foreach ($dc as $el)
                        <li>
                            <a href="##">
                                {{ $el }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <h2>Sites</h2>
                    @foreach ($sites as $el)
                        <li>
                            <a href="##">
                                {{ $el }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <figure>
                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
            </figure>
        </div>
    </div>
    {{-- <SocialDc /> --}}
</footer>
