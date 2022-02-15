<?php

namespace App\Http\Controllers;

use App\Models\Browser;
use Illuminate\Http\Request;

class BrowserController extends Controller
{
    public function index(){

        $navegadores = Browser::all();
        $puntos = [];
        foreach($navegadores as $navegador){
            $puntos[] = ['name'=>$navegador['nombre'], 'y'=> floatval($navegador['porcentaje'])];
        }
        return view("graficos", ["data" => json_encode($puntos)]);

    }
}
