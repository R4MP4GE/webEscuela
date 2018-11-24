<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class PruebaController extends Controller
{
    //
    
    public function prueba (){
        
        $usuarios = User::get();
        return view("ejemplo.index", compact("usuarios"));
        
        
        
        
        
    }
    
    
    
}
