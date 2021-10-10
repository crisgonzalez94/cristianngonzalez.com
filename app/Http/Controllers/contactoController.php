<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller{
    //

    public function mail(Request $request){

        $nombre = $request->input('nombre');
        $contacto = $request->input('contacto');
        $mensaje = $request->input('mensaje');


    }

}
