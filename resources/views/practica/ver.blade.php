<ul>
    @foreach ($juegos as $juego )

        <li>
        {{ $juego['nombre'] }}, {{ $juego['genero'] }}, {{ $juego['precio'] }} 
        <a href="/actualizar_juego/{{$juego['id']}}">Actualizar</a>
        <a href="/borrar_juego/{{$juego['id']}}">Borrar</a>
        </li>

    @endforeach
</ul>