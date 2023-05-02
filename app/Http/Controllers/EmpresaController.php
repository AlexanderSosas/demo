<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\empresaModel;

class EmpresaController extends Controller
{

    public function getEmpresas()
    {
        //die("*");
        $response = array();
        $data = empresaModel::select('empresa_nombre',
        'empresa_descripcion',
        'empresa_logo',
        'empresa_beneficios')->orderby('empresa_id', 'asc')->get();

        if(count($data) > 0){
            $response['status'] = 'OK';
            $response['tbl-empresas'] = $data;
            $response['n'] = count($data);
        }else{
            $response['status'] = 'ERROR';
        }

        return response()->json($response, 200);

    }

}