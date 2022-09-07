@foreach ($solicitudes as $solicitud)
<li>
    <a href="/adjuntos/{{$solicitud->adjunto->id}}"> 
        {{ $solicitud->solicitante }} -> {{ $solicitud->adjunto->name }}
    </a>
</li>
@endforeach
