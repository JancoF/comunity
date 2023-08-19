<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{

    //metodo pra mostrar pagina principal
    public function index() {
        return view("index");
    }

    //metodo para crear proyectos

  
    
    public function servicios (){
        return view("servicios");
    }

    public function programas (){
        return view("programas");
    }

    public function inicio (){
        return view("inicio");
    }

    public function contacto (){
        return view("contacto");
    }

}
