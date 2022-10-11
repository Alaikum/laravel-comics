@foreach ($comics as $el)
    <div class="card">
        <a href="{{route('comic',['id'=>$loop->index])}}">

            <figure>
                <img src={{ $el['thumb'] }} alt="">
            </figure>
            <p>{{ $el['series'] }}</p>
        </a>

    </div>
@endforeach
