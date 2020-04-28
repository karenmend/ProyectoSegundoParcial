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
										<h2>Editar tarea</h2>
										<p>Edicion de tarea.<span class="bread-ntd"></span></p>
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

@section('contenido')
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap mg-t-30">
                         <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Nuevo usuario</h2>
                        </div>
                        <form method="POST" id="formGuardar" action="{{route('tareas.update',$tarea->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Id</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" value="{{$tarea->id}}" class="form-control" disabled>
                                      
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nombre completo</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" value="{{$usuario->name}}" class="form-control" disabled>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Fecha</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="name" type="text" value="{{$tarea->fecha}}" class="form-control" disabled>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Tipo de tarea</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
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
                        
                         <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Descripción</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="descripcion" type="text" value="{{$tarea->descripcion}}" class="form-control">
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Ubicacion</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                     <div class="bootstrap-select fm-cmp-mg">
                                        <select name="ubicacion" class="selectpicker">
                                                <option value="Planta">Planta</option>
                                                <option value="Fuera">Fuera: Entregas domicilio</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Estado tarea</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                     <div class="bootstrap-select fm-cmp-mg">
                                        <select name="estadoTarea" class="selectpicker">
                                                <option value="Nueva">Nueva</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="En progreso">En progreso</option>
                                                <option value="Terminada">Terminada</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                        
                            <div class="row">
                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button class="btn">Editar</button>
								</div>
							</div>
                            </div>
                        </div>
                            
                            
                        </form>
                    </div>

                </div>
           </div>
        </div>
        
    </div>
@endsection

@section('scripts')
@endsection

@section('estilos')
 <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
@endsection