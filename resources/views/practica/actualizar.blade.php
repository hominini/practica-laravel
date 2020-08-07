
<form action="/actualizar_juego" method="POST" >

    @csrf

    <input type="hidden" name="id" value="{{$juego['id']}}"><br>
    
    <label for="fname">Nombre:</label><br>
    <input type="text" name="name" value="{{$juego['nombre']}}"><br>
    
    <label for="lname">Genero:</label><br>
    <input type="text" name="genre" value="{{$juego['genero']}}"><br>
    
    <label for="lname">Precio:</label><br>
    <input type="text" name="price" value="{{$juego['precio']}}"><br><br>
    
    <input type="submit" value="Actualizar">
</form> 