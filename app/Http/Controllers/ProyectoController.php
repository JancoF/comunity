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
   

    public function hacemos (){
        return view("hacemos");
    }
    public function conocenos (){
        return view("servicios");
    }

    public function somos (){
        return view("programas");
    }

    public function inicio (){
        return view("inicio");
    }

    public function contactos (){
        return view("contactos");
    }

}
