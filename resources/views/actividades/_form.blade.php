    <div class="form-group">
        <label 
            for="nombre" 
            class="bmd-label-floating">
            Nombre
        </label>

      <select 
      type="text" 
      class="custom-select" 
      id="nombre"
      name= "nombre"
      
      >
    </select>
      
    </div>


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


    <button id="enviar_actividad" class="btn btn-success btn-raised">Crear</button>


      <script type="text/javascript">
	
        $(document).ready(function(){
           
            $('.ocultar').hide();
            
            $("#enviar_actividad").click(function(){

           
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
                    url: 'actividades',
                    data: data,
                    type:'POST',
                    success: function(data){

                        console.log(data)
                        //$('#add_actividad').append(data);
                        $("#nombre").val('');
            

                    }
                })

            });
            

            
            
            
        });
    </script>