<table border="1" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
<?php
    foreach($productos as $producto){
    echo "<tr>".
        "<td>".$producto->id."</td>".
        "<td>".$producto->nombrePro."</td>".
        "<td>".$producto->Precio."</td>".
        "<td>".$producto->Categoria."</td>".
        "<td><a href='producto/".$producto->id."/edit'>Actualizar</a></td>".
        "<td>".
        "<form method='post' action='producto/".$producto->id."'>
                <input type='submit' value='Eliminar'>";
?>
    @csrf
    @method("DELETE")
    <?php
    echo "</form>".
        "</td>".
        "</tr>";
    }
    ?>
</table>
