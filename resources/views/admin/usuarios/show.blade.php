@extends('layouts.admin')

@section('titulo','Administración | Usuarios')


@section('breadcrumbs')
@endsection

@section('contenido')
<div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-win">
                            <div class="contact-img">
                                <img src="img/post/1.jpg" alt="" />
                            </div>
                            <div class="conct-sc-ic">
                                <a class="btn" href="#"><i class="notika-icon notika-facebook"></i></a>
                                <a class="btn" href="#"><i class="notika-icon notika-twitter"></i></a>
                                <a class="btn" href="#"><i class="notika-icon notika-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
								<h2>{{$usuario->name}}</h2>
								<p class="ctn-ads">USA, LA, aus</p>
							</div>
                            <p></p>
                        </div>
                        <div class="social-st-list">
                            <div class="social-sn">
                                <h2>Total de tareas:</h2>
                                <p>956</p>
                            </div>
                            <div class="social-sn">
                                <h2>Total de terminadas:</h2>
                                <p>434</p>
                            </div>
                            <div class="social-sn">
                                <h2>Views:</h2>
                                <p>676</p>
                            </div>
                        </div>
                    </div>
                </div>
           
           
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-edit"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Tareas asignadas</h2>
										<p><span class="bread-ntd"></span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								
							</div>
						</div>
                        <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2></h2>
                            <p></p>
                        </div>
                        <div class="bsc-tbl-cls">
                            <table class="table table-cl" onload="estadoTabla()">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Tipo de tarea</th>
                                        <th>Descripción</th>
                                        <th>Ubicacion</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tareas as $tarea)
                                    <tr class="" id="cambiarColor" onload="estadoTabla()">
                                        <td>{{$tarea->fecha}}</td>
                                        <td>{{$tarea->tipo_tarea}}</td>
                                        <td>{{$tarea->descripcion}}</td>
                                        <td>{{$tarea->ubicacion}}</td>
                                        <td id="estadoTarea">{{$tarea->estado_tarea}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
					</div>
                    
                </div>
                
             </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function estadoTabla() {
        var tdElem = document.getElementById('estadoTarea').innerText;
        
        if(tdElem == 'Nueva')
        {
              $("#cambiarColor").attr('class','warning');
              var color = 'warning';
        }
        else if( tdElem == "En progreso"){
                 $("#cambiarColor").attr('class','info');
                 var color = 'info';
        }
        else if(tdElem == "Terminada"){
                 $("#cambiarColor").attr('class','active');
                 var color = 'active';
        }
        return color;
    }
  $(document).ready(function(e) {      

         $("#cambiarColor  tr").each(function(){

            $(this).attr('class', estadoTabla());

         });

       });
   
</script>
@endsection

@section('estilos')
@endsection