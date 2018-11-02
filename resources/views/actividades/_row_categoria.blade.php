<tr id="categoria_{{ $categoria->id }}" class="seleccion_tr_categoria">
    <td>
        {{ $categoria->nombre }}
    </td>
    
    <td class="ocultar seleccion_categoria" >{{ $categoria->id }}</td>
    <td><button type="button" class="btn btn-outline-warning">Ver Contenido</button></td>
    <td>
        <button type="button" class="btn btn-outline-danger eliminar_categoria">Eliminar</button>
    </td>
        
     
</tr>
