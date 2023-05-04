<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\empresaModel;

use function PHPSTORM_META\registerArgumentsSet;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empresas = empresaModel::all();
        return view('empresa.index')->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empresa.create');
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
        $empresas = new empresaModel();
        // $empresas->empresa_id = $request->get('empresa_id');
        // $empresas->empresa_id = $request['empresa_id'];

        $empresas->empresa_nombre = $request['empresa_nombre'];
        $empresas->empresa_descripcion = $request['empresa_descripcion'];
        $empresas->empresa_logo = $request['empresa_logo'];
        $empresas->empresa_beneficios = $request['empresa_beneficios'];
        $empresas->save();

        return redirect('/empresas');
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
        //
        // $empresa = empresaModel::find($id);

        $empresa = empresaModel::where('empresa_id', '=', $id)->first();
        // dd($empresa);
        return view('empresa.edit')->with('empresa', $empresa);

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
        //
        $empresa = empresaModel::where('empresa_id', '=', $id)->first();

        $empresa->empresa_nombre = $request['empresa_nombre'];
        $empresa->empresa_descripcion = $request['empresa_descripcion'];
        $empresa->empresa_logo = $request['empresa_logo'];
        $empresa->empresa_beneficios = $request['empresa_beneficios'];
        $empresa->save();

        return redirect('/empresas');
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
        $empresa = empresaModel::where('empresa_id', '=', $id)->first();
        $empresa->delete();

        return redirect('/empresas');

    }
}
