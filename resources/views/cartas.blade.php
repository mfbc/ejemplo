

@foreach ($cartas as $carta)
<li>
    <a href="/adjuntos/{{$carta->adjunto->id}}" >
        {{ $carta->sender }} -> {{ $carta->adjunto->name }}
    </a>
</li>
@endforeach
