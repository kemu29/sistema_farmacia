<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ClienteController extends Controller
{
    public function cliente(){

        return view ('cliente');
}
}



