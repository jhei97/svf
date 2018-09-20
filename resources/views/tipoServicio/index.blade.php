@extends('layout')

@section('contenido')
                  
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Tipo De Servicio</h2>
                         <a class="btn btn-primary btn-sm pull-right"  href="" data-toggle="modal" data-target=".agregarTipoServicio" type="button" name="button">Agregar Tipo</a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Descripción</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                         
                          <tbody>
                             @foreach($tiposervicio as $tipo)
                            <tr>                             
                              <td> {{ $tipo->idtipo_servicio }} </td>
                              <td> {{ $tipo->nombre }} </td>
                              <td>
                            <a class="btn btn-info btn-sm" data-myidt="{{ $tipo->idtipo_servicio }}"                               data-mynombre="{{ $tipo->nombre }}" 
                                   data-toggle="modal" data-target=".TipoServicio" type="button" name="button">Editar</a>
  
                                  <form style="display:inline" class="deleteTipoServicio" action="{{ route('tiposervicio.destroy', $tipo->idtipo_servicio) }}"  method="POST" >
                                
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
@include('tipoServicio.modals')
@stop  