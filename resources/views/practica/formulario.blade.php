
<form action="/crear_juego" method="POST" >

    @csrf
    
    <label for="fname">Nombre:</label><br>
    <input type="text" name="name" ><br>
    
    <label for="lname">Genero:</label><br>
    <input type="text" name="genre" ><br>
    
    <label for="lname">Precio:</label><br>
    <input type="text" name="price" ><br><br>
    
    <input type="submit" value="Guardar">
</form> 