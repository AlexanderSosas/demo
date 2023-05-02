<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $response = array();
        $response['status'] = 'OK';
        return $response()->json($response, 200);
    }
}
