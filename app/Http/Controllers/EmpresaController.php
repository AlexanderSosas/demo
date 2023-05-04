<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\empresaModel;

use Validator;

class EmpresaController extends Controller
{

    public function index(){

        return view('empresa.index');
    }

    public function getEmpresas()
    {
        //die("*");
        $response = array();
        $data = empresaModel::select('empresa_id',
        'empresa_nombre',
        'empresa_descripcion',
        'empresa_logo',
        'empresa_beneficios')->orderby('empresa_id', 'asc')->get();

        //var_dump($data);
        //die();

        if(count($data) > 0){
            $response['status'] = 'OK';
            $response['tbl_empresas'] = $data;
            $response['n'] = count($data);
        }else{
            $response['status'] = 'ERROR';
        }

        return response()->json($response, 200);

    }

    public function getEmpresasById($id){

            $response = array();
            $data = empresaModel::select('empresa_id',
                    'empresa_nombre',
                    'empresa_descripcion',
                    'empresa_logo')
                    ->where([
                        ['empresa_id', '=', $id]
                        ])->get();

            if(count($data) > 0) {

                $response['status'] = 'OK';
                $response['EmpresasPorId'] = $data;
                $response['n'] = count($data);
            }else{

                $response['status'] = 'Ha ocurrido un error';
            }

            return response()->json($response, 200);

    }

    public function newEmpresa(Request $request){

        // var_dump($request['empresa_id']);

        $countEmpresas = array();
        // $countEmpresas = empresaModel::where('empresa_id', '=', $request['empresa_id'])->first();
        $countEmpresas = $request->empresa;
        // var_dump($request['empresa_id']);


        if(!$countEmpresas > 0){

            $response = array();

            $empresaAdd = new empresaModel();
            $empresaAdd->empresa_id = $request['empresa_id'];
            $empresaAdd->empresa_nombre = $request['empresa_nombre'];
            $empresaAdd->empresa_descripcion = $request['empresa_descripcion'];
            $empresaAdd->empresa_logo = $request['empresa_logo'];
            $empresaAdd->empresa_beneficios = $request['empresa_beneficios'];
            $empresaAdd->save();

            $response['status'] = 'OK';
            $response['data'] = $empresaAdd;
        }

        else{

            $response['status'] = 'Ha ocurrido un error o existe la empresa';
        }

        return response()->json($response, 200);

    }

    public function updateEmpresa(Request $request){

        // var_dump($request['empresa_id']);
        // dd('RequestUpdate', $request->all());
        // $data = array();
        $response = array();
        // $dataInput = array();
        $dataInput = $request->all();

        if($dataInput){

            $empresaAdd = empresaModel::findOrFail($request->id);
            $empresaAdd->empresa_nombre =      $dataInput['empresa_nombre'];
            $empresaAdd->empresa_descripcion = $dataInput['empresa_descripcion'];
            $empresaAdd->empresa_logo =        $dataInput['empresa_logo'];
            $empresaAdd->empresa_beneficios =  $dataInput['empresa_beneficios'];
            $empresaAdd->save();

            $response['status'] = 'OK';
            $response['data'] = $empresaAdd;


            return response()->json($response, 201);

        }else{

            $response['status'] = 'ERROR, access denied';
            return response()->json($response, 401);

        }

    }

    public function deleteEmpresa(Request $request){

        $empresaDel = empresaModel::destroy($request->id);
        return $empresaDel;

    }



}
