<tr id="actividad_{{ $actividad->id }}" class="seleccion_tr_actividad">
    <td>
        {{ $actividad->nombre }}
    </td>
    
    <td class="ocultar seleccion_categoria" >{{ $actividad->id }}</td>
    <td><button type="button" class="btn btn-outline-warning">Ver Contenido</button></td>
    <td>
        <button type="button" class="btn btn-outline-danger eliminar_actividad">Eliminar</button>
    </td>
        
     
</tr>
