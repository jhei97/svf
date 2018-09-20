<!-- Agregar Tipo Servicio -->
<div class="modal fade agregarTipoServicio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop ="static" data-keyboard="false">

  <div class="modal-dialog modal-dialog-centered">              
    <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Tipo De Servicio</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('tiposervicio.store') }}" name="tipoServicioForm" onSubmit="return validarFormTipoServicio();">
        {!! csrf_field() !!} 
                   <!-- Nombre -->
              <div class="form-group row">
            <div class="col-md-12">
              <label class="control-label">Nombre</label>
              <input class="form-control " name="nombre" id="nombreIdt" type="text" placeholder="Nombre" >             
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


<!-- Editar Tipo Servicio  -->

<div class="modal fade TipoServicio" tabindex="-1" id="TipoServicio"  role="dialog" aria-labelledby="myLargeModalLabel2" data-backdrop ="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">              
    <div class="modal-content">                 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Tipo De Servicio</h5>
      </div>


      <div class="modal-body">
        <form  action="{{ route('tiposervicio.update','test') }}" method="POST" name="tipoServicioFormEdit" onSubmit="return validarFormTipoServicioEdit(); ">
        {!! method_field('PATCH') !!}
        {!! csrf_field() !!} 
        

          @if(isset($tipoServicio->idtipo_servicio))
          <input type="hidden" name="idtipo_servico"  id="id_tipo_servicio" value="{{ $tipoServicio->idtipo_servicio }}">
          @else
           <input type="hidden" name="idtipo_servicio"  id="id_tipo_servicio" value=""> 
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
