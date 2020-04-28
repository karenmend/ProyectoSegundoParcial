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
										<i class="notika-icon notika-support"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Usuarios</h2>
										<p>Consulta, edicion y eliminacion de usuarios. <span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
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
<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Usuarios</h2>
                           
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Acciones</th>
                                        
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($usuarios as $usuario)
                                <tr>
                                    <td class="nombre_usuario">{{$usuario->name}}</td>
                                    <td>
                                        <form method="POST" 
                                            action="{{route('usuarios.destroy',$usuario->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <a data-toggle="tooltip" data-placement="top" title="Ver" class="btn btn-primary primary-icon-notika" href="{{route('usuarios.show',$usuario->id)}}"class=""><i class="notika-icon notika-eye"></i></a>
                                            <a data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success success-icon-notika" href="{{route('usuarios.edit',$usuario->id)}}"class="" ><i class="notika-icon notika-edit" title="Editar"></i></a>
                                           
                                            <button data-toggle="tooltip" data-placement="top" title="Eliminar" type="submit" class="btnEliminar btn btn-warning warning-icon-notika"><i class="notika-icon notika-right-arrow"></i></button>
                                            </button>
                                           
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Acciones</th>
                                        
                                        <th></th>
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

    <script>
    function doClickEliminar(e) {
        console.log("Eliminar");
        var usuario = $(this).parent().parent().parent().find(".nombre_usuario").text();
        var idUsuario = $(this).attr('id_usuario');
        
        $("#spnUsuario").text(usuario);
        $("#formEliminar").attr('action','/admin/usuarios/' + idUsuario);
        $("#modalConfirmarEliminar").modal('show');
    }
    $(function() {
        console.log("Inicio");
        $(".btnEliminar").click(doClickEliminar);


    });
    function modadlVerificarUser() { 
         $("#modalUser").modal('show');
    }
   
</script>
@endsection

@section('estilos')
<link rel="stylesheet" href="/dist/css/jquery.dataTables.min.css">
    <!-- main CSS-->
@endsection