<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tarea;

class TareaCapturarController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $tipo_tarea = $request->input('tipo_tarea');
        $fechaFin = $request->input('fechaFin');
        $fechaInicio = $request->input('fechaInicio');
        $estado_tarea= $request->input('estado_tarea');
        $detalle = $request->input('detalle');
        
       $tareas = array();
        if($estado_tarea && $fechaFin && $fechaInicio) {
            if($estado_tarea == 'Pendiente' || $estado_tarea == 'pendiente'  )
            {
            $tareas = Tarea::where('id_user','=',$request->user()->id)->
                    where('tipo_tarea','=',
                    'Capturar ordenes')->
                    where('estado_tarea','=',
                    'Pendiente')->
                    where('fecha','>=',$fechaInicio)->
                    where('fecha','<=',$fechaFin)
                ->get();
            }
            else if ($estado_tarea == 'Realizada' || $estado_tarea == 'realizada')
            {
                $tareas = Tarea::where('id_user','=',$request->user()->id)->
                    where('tipo_tare','=',
                    'Capturar ordenes')->
                    where('fecha','>=',$fechaInicio)->
                    where('fecha','<=',$fechaFin)
                ->get();
            }
        
        $respuesta = array();
        $respuesta['tareas'] = $tareas;
        return $respuesta;

        }
        else if ($tipo_tarea != "Capturar ordenes") {
            if($tipo_tarea == "Todas") {
                $tareas = Tarea::where('id_user','=',$request->user()->id)->get();
                $respuesta['tareas'] = $tareas;
                return $respuesta;
            }
            else {
                $tareas = Tarea::where('id_user','=',$request->user()->id)->
                where('tipo_tarea','=',
                $tipo_tarea)->get();
                
                $respuesta = array();
                $respuesta['tareas'] = $tareas;  
                return $respuesta;  
            }
           
        }
        else 
        {
            $tareas = Tarea::where('id_user','=',$request->user()->id)->get();
            $respuesta['tareas'] = $tareas;
            return $respuesta;
        }
        if($detalle != null)
        {
            $tareas = Tarea::where('id_user','=',$request->user()->id)->
            where('tipo_tare','=', 'Capturar ordenes')->
            where('descripcion','LIKE','%'.$detalle.'%')->get();
            $respuesta = array();
            $respuesta['tareas'] = $tareas;
            return $respuesta;
        } 
        else{
           
            $respuesta = array();
            $respuesta['mensaje'] = "No se pudo encontrar ningun registro";
            return $respuesta;
       
        }
    
        
        return  $respuesta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->id_user = $request->user()->id;
        $tarea->tipo_tarea = 'Capturar ordenes';
        $tarea->descripcion = $request->input('descripcion');
        $tarea->estado_tarea = $request->input('estado_tarea');
        $tarea->ubicacion = $request->input('ubicacion');

        $respuesta = array();
      
        if($tarea->save()) {
            $respuesta['mensaje'] = "Se ha guardado el registro exitosamente.";
        }
        else { 
            $respuesta['mensaje'] = "No se pudo guardar el registro.";
        }
    
        return $respuesta;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
        if($tarea) {
            $respuesta = array();
            $respuesta['tareas'] = $tareas;  
        }
        else {
            $respuesta['mensaje'] = "No se pudo encontrar el registro.";
        }
        return $respuesta;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarea = Tarea::find($id);
        
        if($tarea) {
            $tarea = new Tarea();
        $tarea->id_user = $request->user()->id;
        $tarea->tipo_tarea = 'Capturar ordenes';
        $tarea->descripcion = $request->input('descripcion');
        $tarea->estado_tarea = $request->input('estado_tarea');
        $tarea->ubicacion = $request->input('ubicacion');

        $respuesta = array();
      
        if($tarea->save()) {
            $respuesta['mensaje'] = "Se ha guardado el registro exitosamente.";
        }
        else { 
            $respuesta['mensaje'] = "No se pudo guardar el registro.";
        }
        
        }
        else { 
            $respuesta['mensaje'] = "No se pudo guardar el registro.";
        }
        return $respuesta;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
