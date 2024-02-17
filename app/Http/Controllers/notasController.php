<?php

namespace App\Http\Controllers;

use App\Models\notasModel;
use Illuminate\Http\Request;

class notasController extends Controller
{
    //
     /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            //
            $notas = notasModel::all();

            return view('mostrar',compact('notas'));
        }

        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            //
            return view('crear');
        }

        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store(Request $request)
        {
            //
            $notas = new notasModel();
            $notas -> titulo = $request->post('titulo');
            $notas -> subtitulo = $request->post('subtitulo');
            $notas -> descripcion = $request->post('descripcion');
            $notas->save();

            return redirect()->route('notas.index')->with("Success","Agregado con exito");

        }

        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            //
            $notas = notasModel::find($id);
            return view('eliminar',compact('notas'));
        }

        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            //
            $notas = notasModel::find($id);
            return view('editar',compact('notas'));
        }

        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update(Request $request ,$id)
        {
            //
            $notas = notasModel::find($id);
            $notas ->titulo = $request->post('titulo');
            $notas ->subtitulo = $request->post('subtitulo');
            $notas ->descripcion = $request->post('descripcion');
            $notas->save();

            return redirect()->route('notas.index');

        }

        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
            //
            $notas = notasModel::find($id);
            $notas->delete();
            return redirect()->route('notas.index');
        }

}
