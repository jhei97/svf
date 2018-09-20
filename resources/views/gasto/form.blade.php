

<div class="form-group row">
  <div class="col-md-12">
    <label class="control-label">Monto</label>
    <input class="form-control montov" name="monto" datamiss="alert" type="text"  placeholder="Monto" id="montov"  onkeypress="return soloNumero(event);"
     
    required="true">
  </div>
</div>


      
<div class="form-group row">
  <div class="col-md-12">
    <label class="control-label">Fecha De Monto</label>
    <input class="form-control " name="fecha_gasto" type="date" placeholder="Fecha de Monto" id="fechaG" 
    required="">               
  </div>
</div>  
     

<label for="exampleSelect1">Tipo De Gasto</label> 
  <div class="form-group row">
    <div class="col-md-12">
      <select class="form-control" name="idtipo_gasto" id="tipo" required="" >   
        <option value="">Tipo De Gasto</option>
        @foreach($tipogasto as $tg)                                 
          <option value="{{ $tg->idtipo_gasto }}"> {{ $tg->nombre }} </option>
        @endforeach                        
      </select>
    </div>
  </div>    



