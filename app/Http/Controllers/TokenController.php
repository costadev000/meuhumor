<?php
namespace App\Http\Controllers;

use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Log;

class TokenController extends Controller
{
    public function gerarToken(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();

        if(is_null($user) ){
            return response()->json('Usuário ou Senha Inválidos', 401);
        }else{
            try {
                $pass = Crypt::decrypt($user->password);
            } catch (DecryptException $e) {
                //
            }
            if($pass != $request->password){
                return response()->json('Senha Inválida', 401);
            }
        }

        $token = JWT::encode(
            [
                'user_id' => $user->id
            ],
            env('JWT_KEY'));

        return [
            'access_token' => $token
        ];
    }

    public function refreshToken($token){
        $dadosAutenticacao = JWT::decode($token, env('JWT_KEY'), ['HS256']);
        $user = User::where('id', $dadosAutenticacao->id)->first();
        if(is_null($user)){
            return response()->json('Token Invalido', 401);
        }

        $newToken = JWT::encode(
            ['id' => $user->id, 'exp' => 1800, 'orig_iat' => date()],
            env('JWT_KEY'));

        return [
            'access_token' => $token
        ];
    }

}
