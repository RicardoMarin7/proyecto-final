<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    public function index(){
        return view('index');
    }

    public function contacto(){
        return view('contacto');
    }

    public function postmsg(Request $request){

        $this->validate($request,[
            'nombre' => 'required',
            'email'  => 'email|required',
            'mensaje' => 'required|min:20'
        ]);

        return $request->all();

    }
}
