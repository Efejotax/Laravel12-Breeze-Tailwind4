<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){
        return view('app.front.index');
    }
    // Home1 -> Path /wiews/layout/template
    public function home0(){
        return view('layout.template');
    }
    // Home1 -> Path /wiews/home
    public function home1(){
        return view('home');
    }
    // Home2 -> Path app/front/home
    public function home2(){
        return view('app.front.home');
    }

    public function homex(){
        return view('app.front.homex');
    }
    public function saludoGenerico(){
        return "Hola Mundo desde IndexPage";
    }
    public function saludoUser($nombre){
        return "Hola {$nombre} desde IndexPage";
    }

}
