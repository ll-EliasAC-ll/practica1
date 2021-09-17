<form method="post" action="/producto">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre Producto"><br>
    <input type="text" name="precio" placeholder="Precio"><br>
    <input type="text" name="categoria" placeholder="Categoria"><br>
    <input type="submit" name="submit" Value="Guardar">
</form>
