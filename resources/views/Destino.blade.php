<form method="post" action="{{route('Guardar Destino')}}">
    @csrf
    <input type="text" name="provincia" placeholder="Ingrese Provincia"><br>
    <input type="text" name="departamento" placeholder="Ingrese departamento"><br>
    <input type="text" name="distrito" placeholder="Ingrese distrito"><br>
    <input type="text" name="direccion" placeholder="Ingrese direccion"><br>
    <input type="text" name="id_cliente" placeholder="{{$id_cliente}}"><br>
    <input type="submit" value="Guardar"><br>
</form>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
