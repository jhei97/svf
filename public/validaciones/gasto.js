  $('#editGasto').on('show.bs.modal', function (event) {
          
          var button = $(event.relatedTarget)
          var monto = button.data('mymonto')
          var fecha_gasto = button.data('myfecha')
          var tipo = button.data('mytipo')
          var gastoid = button.data('mygastoid')
          var modal = $(this)
          modal.find('.modal-body #montov').val(monto)
          modal.find('.modal-body #fechaG').val(fecha_gasto)
          modal.find('.modal-body #tipo').val(tipo)
          modal.find('.modal-body #gasId').val(gastoid)
      });

   function validarFormGasto(){          
          var monto = document.forms["gastosForm"]["montov"]; 
          var fecha = document.forms["gastosForm"]["fechaG"]; 
          var tipo = document.forms["gastosForm"]["tipo"];

            if (monto.value=="") {             
             monto.focus();
            return false;

            }
            else if (fecha.value==""){
            fecha.focus();
            return false;
            } else if(tipo.value==""){
              tipo.focus();
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
  };





   function validarFormGastoEdit(){          
          var monto = document.forms["gastosFormEdit"]["montov"]; 
          var fecha = document.forms["gastosFormEdit"]["fechaG"]; 
          var tipo = document.forms["gastosFormEdit"]["tipo"];

            if (monto.value=="") {             
             monto.focus();
            return false;
            }  
            else if (fecha.value==""){
            fecha.focus();
            return false;
            } else if(tipo.value==""){
              tipo.focus();
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
  };



   function soloNumero(e){
          var key = e.keyCode || e.which;

          teclado= String.fromCharCode(key);

          numero = "01234567890";

          especiales="8-37-38-46";

          teclado_especial = false;

          for(var i in especiales) {
            if (key == especiales[i]) {
              teclado_especial=true;
            }
          }

          if (numero.indexOf(teclado)==-1 && !teclado_especial ) {
              return false;
          }


  };




  $(document).ready(function(){
        $(".deleteGasto").submit(function(event) {            
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
                  title: "Eliminado!",
                  text: "Tu archivo ha sido eliminado exitosamente",
                  icon: "success",                       
                });             
              }             
              else {
              swal("¡Tu Archivo Está Seguro!");
              }
            });
        });
     }); 




$(".montov").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{3})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
