<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use PDF;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['proyectos']=proyectos::paginate(5);
        return view('Proyecto.index',$datos);
    }
    public function pdf()
    {
    
        $proyecto=proyectos::paginate();

        $pdf = PDF::loadView('proyecto.pdf',['proyecto'=> $proyecto]);
        //return $pdf->download('__proyecto.pdf');
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        //return view('Proyecto.pdf',compact('proyecto'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Proyecto.create');
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
        $campos=[
            'NombreProyecto'=>'required|string|max:100',
            'fuenteFondos'=>'required|string|max:100)',
            'MontoPlanificado'=>'required',
            'MontoPatrocinado'=>'required',
            'MontoFondosPropios'=>'required',



        ];
$mensaje=[
    'required'=>'El :attribute es Requerido',

];

$this->validate($request,$campos,$mensaje);

        $datosProyecto = request()->except('_token');
        proyectos::insert($datosProyecto);
         //return response()->json($datosProyecto);

         return Redirect('Proyecto')->with('mensaje','Proyecto Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function show(proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proyecto=proyectos::findOrFail($id);
        return view('Proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'NombreProyecto'=>'required|string|max:100',
            'fuenteFondos'=>'required|string|max:100)',
            'MontoPlanificado'=>'required',
            'MontoPatrocinado'=>'required',
            'MontoFondosPropios'=>'required',



        ];
        $mensaje=[
            'required'=>'El :attribute es Requerido',

        ];

        $this->validate($request,$campos,$mensaje);

        $datosProyecto = request()->except(['_token','_method']);
        proyectos::Where('id','=',$id)->update($datosProyecto);

        $proyecto=proyectos::findOrFail($id);
        //return view('Proyecto.edit', compact('proyecto'));
        return Redirect('Proyecto')->with('mensaje','Proyecto Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        proyectos::destroy($id);
        return Redirect('Proyecto')->with('mensaje','Proyecto Borrado');

    }
}
