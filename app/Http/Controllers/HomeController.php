<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   /*  public function home(){
        return view('/home');
    }*/
    public function home1(){
        return view('app/front/home1');
    }
    public function home2(){
        return view('app.front.home2');
    }
    public function home3(){
        return view('app.front.home3');
    }
    public function homeTemplate(){
        return view('layout.template');
    }
    public function saludoGeneral(){
        return "Hola Mundo desde IndexPage";
    }
    public function saludoUser($nombre){
        return "Hola {$nombre} desde IndexPage";
    }

}
