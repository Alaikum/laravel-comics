@foreach($homepage as $el)
<div class="card">
    <figure>
        <img src={{$el['thumb']}} alt="">
    </figure>
    <p>{{ $el['series'] }}</p>
  
</div>
@endforeach


