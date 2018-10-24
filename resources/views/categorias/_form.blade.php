{{ csrf_field() }}

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


    <button id="enviar_categoria" class="btn btn-primary btn-raised">Submit</button>


      <script type="text/javascript">
	
        $(document).ready(function(){
        
            $("#enviar_categoria").click(function(){
                //Toma de valores

                alert('clik')
                var title = $("#nombre").val();
                //Creacion del json(objeto, array)
                var data = {
                    nombre: nombre
                }
                console.log(data)
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
                        console.log(data)
                    }
                })
            });
            
            
        });
    </script>