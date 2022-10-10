<div class="social__footer">
    <div class="container">
        <span class="input__footer">Sign-up Now!</span>
        <div class="follow__us">
            <h2>Follow US</h2>
            @php
                $socials = [
                    [
                        'img' => "footer-facebook.png",
                        'text' => 'Facebook',
                    ],
                    [
                        'img' => "footer-twitter.png",
                        'text' => 'Twitter',
                    ],
                    [
                        'img' => "footer-youtube.png",
                        'text' => 'Youtube',
                    ],
                    [
                        'img' => "footer-periscope.png",
                        'text' => 'Periscope',
                    ],
                    [
                        'img' => "footer-pinterest.png",
                        'text' => 'Pinterest',
                    ],
                ];
                
            @endphp

@foreach ($socials as $social)
    {{-- <img src="{{asset({{$social['img']}})}}" alt={{$social['text']}}> --}}
    <img src={{$social['img']}} alt={{$social['text']}}>
@endforeach
        </div>
    </div>


</div>
