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

<script>
    $(document).ready(function(){
        $('.ocultar').hide();
            $(".eliminar_categoria").click(function(){
                //Toma de valores
                var id = $(this).parents("tr").find('.seleccion_categoria').text();
                var tr = $(this).parents("tr").find('.seleccion_tr_categoria');
                //Creacion del json(objeto, array)
                console.log(id);
                var data = {
                    _method: 'delete',
                    id: id
                }
                
                //Configuaracion cabeceras ajax
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                //envío ajax
                $.ajax({
                    url: 'categorias/'+id+'',
                    data: data,
                    type:'POST',
                    success: function(data){
                        console.log(data)
                        $('#categoria_'+data['id']).remove();
                      
                    }
                })
            });


    })
    
</script>