
<!-- Agregar Tipo Gasto -->
<div class="modal fade agregarTipoGasto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop ="static" data-keyboard="false">

  <div class="modal-dialog modal-dialog-centered">              
    <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Tipo De Gasto</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('tipogasto.store') }}" name="tipoGastoForm" onSubmit="return validarFormTipoGasto();">
        {!! csrf_field() !!} 
                   <!-- Nombre -->
            
            <div class="form-group row">
            <div class="col-md-12">
              <label class="control-label">Nombre</label>
              <input class="form-control " name="nombre" id="nombreIdt" type="text" placeholder="Nombre" >             
            </div>
          </div> 
          </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="submit" >
              <i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
              </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <button type="button" class="btn btn-secondary" data-dismiss="modal"> 
              <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
              </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </form> 
      </div>
    </div>
  </div> 
</div> 


<!-- Editar Tipo Gasto  -->

<div class="modal fade TipoGasto" tabindex="-1" id="TipoGasto"  role="dialog" aria-labelledby="myLargeModalLabel2" data-backdrop ="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">              
    <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo De Gasto</h5>
      </div>


      <div class="modal-body">
        <form  action="{{ route('tipogasto.update','test')}}" method="POST" name="tipoGastoFormEdit" onSubmit="return validarFormTipoGastoEdit(); ">
       {!! method_field('PATCH') !!}
          {!! csrf_field() !!} 
        

          @if(isset($tpg->idtipo_gasto))
          <input type="hidden" name="idtipo_gasto"  id="id_tipo_gasto" value="{{ $tpg->idtipo_gasto }}">
          @else
           <input type="hidden" name="idtipo_gasto"  id="id_tipo_gasto" value=""> 
          @endif

          <div class="form-group row">
            <div class="col-md-12">
              <label class="control-label">Nombre</label>
              <input class="form-control" name="nombre" id="nombreIdt" type="text" placeholder="Nombre" >             
            </div>
          </div>

            <div class="modal-footer">
              <button class="btn btn-primary" type="submit" >
               <i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar
              </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <button type="button" class="btn btn-secondary" data-dismiss="modal"> 
                <i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar
              </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </form> 
      </div>
    </div>
  </div>  
</div>






