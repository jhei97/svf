@extends('layout')

@section('contenido')
<title>Cliente - San Vicente Ferrer</title>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Gasto</h2>
                        <a class="btn btn-primary btn-sm pull-right"  href="" data-toggle="modal" data-target=".agregar-gasto-modal" type="button" name="button">Agregar Gastos</a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                  <tr>
                  <th>ID</th>
                  <th>Monto</th>
                  <th >Fecha </th>
                  <th>Tipo </th>
                  <th >Acciones</th>
                  </tr>
                </thead>
               <tbody>
                @foreach($gasto as $g)
                    <tr >
                        <td>{{$g->idgasto}}</td>
                        <td >$ {{$g->monto}}</td>
                        <td>{{$g->fecha_gasto}}</td>     
                        <td>{{$g->nombre}}</td>                                     
                        <td>

      <a class="btn btn-info btn-sm"  data-mymonto="{{ $g->monto }}"  
                                      data-myfecha="{{ $g->fecha_gasto }}" 
                                      data-mytipo="{{ $g->idtipo_gasto }}" 
                                      data-mygastoid="{{ $g->idgasto }}" 
        data-toggle="modal" data-target=".edit-gasto-modal" type="button" name="button">Editar</a>
           &nbsp;             
      <form style="display:inline" class="deleteGasto" action="{{ route('gasto.destroy', $g->idgasto) }}" method="POST">

          <button class="btn btn-danger btn-sm"  type="submit" >Eliminar</button>
          {!! csrf_field() !!}
          {!! method_field('DELETE')!!}
      </form>

                        </td> 
                    </tr>                    
                  @endforeach               
              </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
@include('gasto.modals')
@stop


    
    
 