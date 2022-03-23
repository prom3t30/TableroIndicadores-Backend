<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use \Crypt;
use App\Rol;
use Illuminate\Http\Request;
use App\User as Usuario;

class AuthController extends Controller
{
    private static $secret_key = 'Sdw1s9x8@';
    private static $encrypt = ['HS256'];
    private static $aud = null;
    public function auth(Request $request)
    {
        $Usuario = Usuario::where([['email','=',$request->email]])->first();
        //Corregir
        //$decripted = Crypt::decryptString($Usuario->password);

        $time = time();
        
        $token = array(
            'exp' => $time + (60*60),
            'aud' => self::Aud(),
            'data' => $Usuario
        );
        
        

        if($Usuario == null)
        {
            return response()->json("Correo no existente", 503);
        }
        else
        {
            //Pendiente por cambiar
            if($Usuario->password == md5(md5(md5($request->password))))
            {
                if($Usuario->remember_token == null){
                    $jwt = JWT::encode($token, self::$secret_key);
                    $response = new tokenResponse($Usuario , $jwt);
                    /* $Usuario->remember_token = $jwt;
                    $Usuario->save(); */
                }
                return response()->json($response , 200);
            }
            else
            {
                return response()->json("Contraseña no corresponde", 503);
            }
        }
    }
}
