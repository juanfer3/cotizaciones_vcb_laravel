

    <div class="form-group">
        <label 
            for="nombre" 
            class="bmd-label-floating">
            Nombre
        </label>

      <input 
      type="text" 
      class="form-control" 
      id="nombre"
      name= "nombre"
      
      >
      
    </div>


    <button id="enviar_categoria" class="btn btn-success btn-raised">Crear</button>


      <script type="text/javascript">
	
        $(document).ready(function(){
            
            $('.ocultar').hide();
            
            $("#enviar_categoria").click(function(){

                
                //Toma de valores
                var nombre = $("#nombre").val();


        
                //Creacion del json(objeto, array)
                var data = {
                    nombre: nombre
                }
                
                //Configuaracion cabeceras ajax
               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                //envío ajax
                $.ajax({
                    url: 'categorias',
                    data: data,
                    type:'POST',
                    success: function(data){
                        $('#add_categoria').append(data);
                        $("#nombre").val('');
            

                    }
                })

            });
            

            
            
            
        });
    </script>