@extends('layouts.admin')

@section('titulo','Administración | Crear usuario')
@section('breadcrumbs')
<div class="breadcomb-area">
		<div class="container">
			<div class="row">
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-plus-symbol"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Nuevo usuario</h2>
										<p>Crear nuevo usuario. <span class="bread-ntd"></span></p>
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
                    <form method="POST" enctype="multipart/form-data"
                        action="{{route('usuarios.store')}}">
                        @csrf
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nombre completo</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="name" type="text" class="form-control">
                                      
                                        <label class="nk-label">Nombre completo</label>
                                        
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
                                        <label class="hrzn-fm">Email</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="email" type="email" class="form-control">
                                        <label class="nk-label">Email</label>
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
                                        <label class="hrzn-fm">Contraseña</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="password" type="password" class="form-control">
                                        <label class="nk-label">Contraseña</label>
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
                                        <label class="hrzn-fm">Confirmar Contraseña</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="form-group ic-cmp-int float-lb floating-lb">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input name="password" type="password" class="form-control">
                                        <label class="nk-label">Confirmar contraseña</label>
                                        <span class="text-danger" id="alertPassword">Las contraseñas no coinciden</span>

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
                                        <label class="hrzn-fm">Tipo de Usuario</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                            <div class="nk-int-mk sl-dp-mn">
                                        
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select name="tipo_usuario" class="selectpicker">
                                                <option value="1">Repartidor en planta</option>
                                                <option value="2">Repartidor a domicilio</option>
                                                <option value="0">Administrador</option>
                                               
                                            </select>
                                    </div>
                                    
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                <br>
                                    <button class="btn btn-info notika-btn-success">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>

                </div>
           </div>
        </div>
        
    </div>




   
   
	<!-- Breadcomb area End-->
    <!-- Form Element area Start-->
   
    
@endsection

@section('scripts')
<script>
    function doChangePassword(e) {
        $("#alertPassword").hide();
    }
    function doClickGuardar(e) {
        e.preventDefault();
        if($("#txtPassword").val() != null && $("#txtPassword").val() != '' &&
            $("#txtPassword").val() == $("#txtConfirmar").val()) {
            $("#formGuardar").submit();
        } else {
            $("#alertPassword").show();
        }
    }
    $(function() {
        $("#btnGuardar").click(doClickGuardar);
        $("#txtPassword").change(doChangePassword);
        $("#txtConfirmar").change(doChangePassword);
        $("#alertPassword").hide();
    });
</script>
@endsection

@section('estilos')
@endsection