@extends('layouts.admin')

@section('titulo','Administración | Usuarios')

@section('breadcrumbs')
<div class="breadcomb-area">
		<div class="container">
        <div class="alert-list">
                          @if(Session::has('exito'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> 
                                {{Session::get('exito')}}
                            
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                                 
                            {{Session::get('error')}}
                            </div>
                            @endif
                        </div>
			<!--<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Filtrado</h2>
										<p> <span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>-->
          <!--  <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						         <div class="row">
                                 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-3">
								<div class="breadcomb-report">
								
								</div>

							</div>
								
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                 <label>Fecha inicio</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" id="fechaInicio">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                 <label>Fecha Final</label>
                                    <div class="input-group date nk-int-st">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" id="fechaInicio">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                 <label>Estado</label>
                                   <div class="bootstrap-select fm-cmp-mg">
                                        <select name="estado_tarea" class="selectpicker">
                                                <option value="Nueva">Nueva</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="En progreso">En progreso</option>
                                                <option value="Terminada">Terminada</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                 <label>Tipo de tarea</label>
                                  <div class="bootstrap-select fm-cmp-mg">
                                        <select name="tipo_tarea" class="selectpicker">
                                                <option value="Mantenimieto">Mantenimieto</option>
                                                <option value="Capturar ordenes">Capturar ordenes</option>
                                                <option value="Entrega de paquetes">Entrega de paquetes</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
							</div>
                              
                               </form>-->
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    


@endsection

@section('contenido')
<div class="data-table-area">
        <div class="container">
        <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Tarea</h2>
										<p>Consulta, edicion y eliminacion de tareas <span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <form>
                              
								<div class="breadcomb-report">
                               
                                <div class="search-input">
                                
                                       <button class="btn" type="submit"><span><i class="notika-icon notika-search"></i></span></button>
                                      
                                        <div class="form-group">
                                    <div class="nk-int-st">
                                        <input  type="text" id="txtCriterio" name="criterio" class="form-control input-sm" placeholder="Buscar...">
                                    </div>
                                    </div>
                                    </div>
									<br>
								</div>
                                <form>
                            </div>
						</div>
					</div>
				</div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                    <div class="data-table-list">
                
                            <div class="bsc-tbl-hvr">
                            <table class="table table-hover">
                                <thead>
                                    <tr>    
                                        <th>#</th>            
                                        <th>Usuario</th>
                                        <th>Fecha</th>
                                        <th>Tipo de tarea</th>
                                        <th>Descripción</th>
                                        <th>Ubicacion</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($tareas as $tarea)
                                  
                                <tr>
                                    <th>{{$tarea->id}}</th>    
                                     @foreach ($usuarios as $usuario) 
                                    @if($tarea->id_user == $usuario->id)
                                        <td>{{$usuario->name}}</td>
                                    @endif
                                    @endforeach
                                    <td>{{$tarea->fecha}}</td>
                                    <td>{{$tarea->tipo_tarea}}</td>
                                    <td>{{$tarea->descripcion}}</td>
                                    <td>{{$tarea->ubicacion}}</td>
                                    <td>{{$tarea->estado_tarea}}</td>
                                    <td>
                                        <form method="POST" 
                                            action="{{route('tareas.destroy',$tarea->id)}}">
                                            @csrf
                                            @method('DELETE')
                    
                                            <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success success-icon-notika" href="{{route('tareas.edit',$tarea->id)}}"class="" ><i class="notika-icon notika-edit" title="Editar"></i></a>
                                           
                                            <button data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit"  class="btnEliminar btn btn-warning warning-icon-notika"><i class="notika-icon notika-right-arrow"></i></button>
                                            </button>
                                           
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>#</th>
                                        <th>Usuario</th>
                                        <th>Fecha</th>
                                        <th>Tipo de tarea</th>
                                        <th>Descripción</th>
                                        <th>Ubicacion</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                 </tfoot>
                            </table>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="modals-list mg-t-30">
                        <div class="modals-single">
                            <div class="modal animated shake" id="modalConfirmarEliminar" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Eliminar usuario</h2>
                                                <p>Seguro que desea eliminar a <strong><span id="spnUsuario"></span></strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                            <form action="#" method="POST" id="formEliminar">
                                                 @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-default" data-dismiss="modal">Eliminar</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                            </div>
                                </div>
                           </div>
                        </div>            
                     </div>
                </div>   
            </div>
            
        </div>
    
    </div>
@endsection

@section('scripts')
 <!-- Data Table JS
		============================================ -->
    <script src="/dist/js/data-table/jquery.dataTables.min.js"></script>
    <script src="/dist/js/data-table/data-table-act.js"></script>
    <script src="/dist/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/dist/js/datapicker/datepicker-active.js"></script>
@endsection

@section('estilos')
 <link rel="stylesheet" href="/dist/css/datapicker/datepicker3.css">
<link rel="stylesheet" href="/dist/css/jquery.dataTables.min.css">
    <!-- main CSS-->
@endsection