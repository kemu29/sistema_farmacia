<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Login(){

        return view ('Login');
    }

    public function entrar(Request $request) {

        if ($request->usuario == 'admin' && $request->senha == 'admin') {
            session(['usuario' => 'admin']);
            return redirect()->route('TelaPrincipal');
        }
        return redirect()->route('login')->with('Erro', 'Senha ou Login inválidos');
    }

    /** Desloga o usuário */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login'); 
    }

}
