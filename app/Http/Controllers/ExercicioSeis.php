<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeis extends Controller
{
    public function idade(Request $request){
        $i = $request -> idade;
   
        if($i > 12 && $i <= 18){
           return json_encode([
               'idade' => 'é um adolescente'
           ]);
   
       
        } else if($i < 12){
           return json_encode([
               'idade' => 'é uma criança'
           ]);
   
        }else if($i > 18){
           return json_encode([
              'idade' => 'é um adulto'
           ]);
         }
       }
}
