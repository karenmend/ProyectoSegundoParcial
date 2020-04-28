<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Tarea;
use App\User;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Intento de Filtrado real
        /*$fechaInicio = $request->input('fechaInicio');
        $fechaFin = $request->input('fechaFin');
        $nombreUsuario = $request->input('nombre_usuario');
        $estado_tarea = $request->input('estado_tarea');
        $tipo_tarea = $request->input('tipo_tarea');
        if($request) {
           
            $tareas = Tarea::select('tareas.*')->where(function ($query) {
                $query->where('estado_tarea','=',$estado_tarea)->
                orwhere('tipo_tarea','=',$tipo_tarea)->
                orwhere('fecha','>=',$fechaInicio)->
                orwhere('fecha','<=',$fechaFin)->
                orwhere('name','LIKE','%'.$nombreUsuario.'%')->
                leftJoin(
                    'users', //la tabla a unir
                    'users.id', //primer columna a evaluar (id de la table que voy a juntar)
                    '=',                   //como lo va a evaluar
                    'tareas.id_user' // segunda columna a evaluar (fk con el que se relaciona la tabla)
                );
            })->
                get();
                
            */

        $criterio = $request->input('criterio');
        $tareas = array();
      
        if($criterio){
            if($criterio)
            {
                $tareas = Tarea::select('tareas.*')->where('estado_tarea','LIKE','%'.$criterio.'%')->
                    orwhere('tipo_tarea','LIKE','%'.$criterio.'%')->
                    orwhere('ubicacion','LIKE','%'.$criterio.'%')->
                    orwhere('fecha','LIKE','%'.$criterio.'%')->
                    orwhere('name','LIKE','%'.$criterio.'%')->
                    leftJoin(
                        'users', //la tabla a unir
                        'users.id', //primer columna a evaluar (id de la table que voy a juntar)
                        '=',                   //como lo va a evaluar
                        'tareas.id_user' // segunda columna a evaluar (fk con el que se relaciona la tabla)
                    )->
                    get();
                    //dd($tareas);
            }
           
            $argumentos = array();
            $argumentos['tareas'] = $tareas;

            $usuarios = User::all();
            $argumentosUsuario = array();
            $argumentosUsuario['usuarios'] = $usuarios;
            return view('admin.tareas.index', $argumentos, $argumentosUsuario);
            
        }
        else
        {
            $tareas = Tarea::all();
            $argumentos = array();
            $argumentos['tareas'] = $tareas;

            $usuarios = User::all();
            $argumentosUsuario = array();
            $argumentosUsuario['usuarios'] = $usuarios;
            return view('admin.tareas.index', $argumentos, $argumentosUsuario);
            
        }
            //dd($noticias);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $tarea= Tarea::find($id);
        if ($tarea) {
            $argumentos = array();
            $argumentos['tarea'] = $tarea;

    
            $usuario = User::find($tarea->id_user);
            $argumentosUsuario = array();
            $argumentosUsuario['usuario'] = $usuario;
            //dd($usuario);
            return view('admin.tareas.edit')->with(compact('tarea', 'usuario'));
        }
        return redirect()->
                route('tareas.index')->
                with('error','No se encontró el usuario.');
    
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
            //$tarea->id_tipos_usuario $request
            $tarea->tipo_tarea = $request->input('tipo_tarea');
            $tarea->descripcion = $request->input('descripcion');
            $tarea->ubicacion = $request->input('ubicacion');
            $tarea->estado_tarea = $request->input('estadoTarea');
            if ($tarea->save()) {
                return redirect()->
                    route('tareas.edit',$id)->
                    with('exito',
                    'La tarea se actualizó exitosamente.');
            }
            return redirect()->
                route('tareas.edit',$id)->
                with('error',
                    'No se pudo actualizar la tarea.');
        }
        return redirect()->
            route('tareas.index')->
            with('error',
                'No se encontró la tarea.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id);
        if ($tarea) {
            if($tarea->delete()) {
                return redirect()->
                        route('tareas.index')->
                        with('exito','Tarea eliminado exitosamente.');
            }
            return redirect()->
                    route('tarea.index')->
                    with('error','No se pudo eliminar tarea.');
        }
        return redirect()->
                route('tarea.index')->
                with('error','No se encotró el tarea.');
    
    }
}
