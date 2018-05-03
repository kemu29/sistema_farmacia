<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PrincipalController extends Controller
{
    public function principal(){

        return view ('TelaPrincipal');
    }


}
