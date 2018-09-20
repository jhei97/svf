@extends('layout')

@section('contenido')


<title>Tipo de Gasto - San Vicente Ferrer</title>


                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Tipo De Gasto</h2>
                         <a class="btn btn-primary btn-sm pull-right"  href="" data-toggle="modal" data-target=".agregarTipoGasto" type="button" name="button">Agregar Tipo</a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach($tipogasto as $tipo)
                            <tr>
                             
                                <td>{{ $tipo->idtipo_gasto }}</td>
                                <td>{{ $tipo->nombre }}</td>
                                <td>
                                
                                  <a class="btn btn-info btn-sm" data-myidt="{{ $tipo->idtipo_gasto }}"  
                                                                 data-mynombre="{{ $tipo->nombre }}" 
                                   data-toggle="modal"  data-target=".TipoGasto" type="button" name="button">Editar</a>
  
                                  <form style="display:inline" class="deleteGastoTipo" action="{{ route('tipogasto.destroy', $tipo->idtipo_gasto) }}" method="POST" >
                                
                                    <button class="btn btn-danger btn-sm" type="submit">
                                    Eliminar
                                    </button>
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
@include('tipoGasto.modals')
@stop