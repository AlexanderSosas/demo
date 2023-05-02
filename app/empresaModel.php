<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresaModel extends Model
{

    //use SoftDeletes;
    protected $table = 'tbl_empresa';
    protected $primarykey = 'empresa_id';

    protected $fillable =
    ['empresa_nombre',
     'empresa_descripcion',
     'empresa_logo',
     'empresa_beneficios'
    ];

    //protected $dates = ['deleted_at'];


}

