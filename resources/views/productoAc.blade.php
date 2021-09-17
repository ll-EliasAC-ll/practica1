<form method="post" action="/producto/<?=$producto->id?>">
    @csrf
    <input type="text" name="nombre" value="<?=$producto->nombrePro?>">
    <input type="text" name="precio" value="<?=$producto->Precio?>">
    <input type="text" name="Categoria" value="<?=$producto->Categoria?>">
    <input type="submit" name="submit" value="Actualizar">
    @method("PUT")
</form>
