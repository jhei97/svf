<!-- Editar Gasto Modal-->
<div class="modal fade edit-gasto-modal" tabindex="-1" id="editGasto" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop ="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">              
     <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Gasto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" name="gastosFormEdit" action="{{ route('gasto.update','test') }}"  onSubmit="return validarFormGastoEdit();">
          {!! method_field('PATCH') !!}
          {!! csrf_field() !!} 
          

          @if(isset($g->idgasto))
          <input type="hidden" name="gasto_id"  id="gasId" value="{{ $g->idgasto }}"> 
          @else
           <input type="hidden" name="gasto_id"  id="gasId" value=""> 
          @endif
          @include('gasto.form')
           
      </div>

      <div class="modal-footer">               
        <button class="btn btn-primary" type="submit" onClick="" >
          <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
        </button>&nbsp;&nbsp;

        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fa fa-fw fa-lg      fa-times-circle"></i>Cancelar
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      </form> 
    </div>
  </div>  
</div>



<!-- Agregar Gasto Modal-->

<div class="modal fade agregar-gasto-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop ="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">              
    <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Gasto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="POST" name="gastosForm" action="{{ route('gasto.store') }}" onSubmit="return validarFormGasto();">
          {!! csrf_field() !!} 
          @include('gasto.form')
          
      </div>
      <div class="modal-footer">               
        <button class="btn btn-primary" type="submit" >
          <i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
        </button>&nbsp;&nbsp;

        <button type="button" class="btn btn-secondary"  data-dismiss="modal"> <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
      </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      </div>
       </form> 
    </div>
  </div>  
</div>
  
  
