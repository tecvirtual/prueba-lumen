<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

    }

    public function  login(Request $request) {
       // dd($request);

        if ($request->isJson()){
          /*  $response->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
            $response->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
            $response->header('Access-Control-Allow-Origin', '*');
            $response->header('Access-Control-Expose-Headers', 'Location');*/
            $email = $request->get('email');
            $user = User::where('email', $email)->first();
            return response()->json($user, 200);
           // dd($email);

        }else{
            return response()->json(['error' => 'Unauthorized'], 401, []);
        }
    }
}
