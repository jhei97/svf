 $('#TipoServicio').on('show.bs.modal', function (event) {         
        var button = $(event.relatedTarget)
        var nombre = button.data('mynombre')
        var id_tipoServicio = button.data('myidt')
        var modal = $(this)
        modal.find('.modal-body #nombreIdt').val(nombre) ;
        modal.find('.modal-body #id_tipo_servicio').val(id_tipoServicio)  ;     
      }); 




 function validarFormTipoServicio(){          
    
    var nombre = document.forms["tipoServicioForm"]["nombreIdt"];
      
      if(nombre.value==""){
              nombre.focus();
              return false;
            }
           else{
            swal({
              title: "Buen Trabajo!",
              text: "Registro Exitoso!",
              icon: "success",
              button: false,
              })
            return true;
          }
  }


  function validarFormTipoServicioEdit(){          
    
    var nombre1 = document.forms["tipoServicioFormEdit"]["nombreIdt"];
      
      if(nombre1.value==""){
          nombre1.focus();
          return false;
            }
           else{
           swal({
              title: "Buen Trabajo!",
              text: "Actualización Exitosa!",
              icon: "success",
              button: false,
              });
            return true;
          }
  }



    $(document).ready(function(){
        $(".deleteTipoServicio").submit(function(event) {            
            event.preventDefault();
             var form = this;
            swal({
                title: "Estas Seguro?",
                text: "¡No se podrá volver a recuperar este archivo!",
                icon: "warning",               
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
            
              if (willDelete) {
               form.submit();
                swal({
                  title: "Tu archivo ha sido eliminado exitosamente",
                  icon: "success",                       
                });             
              }             
              else {
              swal("¡Tu Archivo Está Seguro!");
              }
            });
        });
     }); 
