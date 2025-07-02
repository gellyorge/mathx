<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home():View{
        return View('home');
    }
    public function generateExercises(Request $request){
        echo 'gerar exercicios';
    }
    public function printExercises(){
        echo 'imprimir exercicios';
    }
    public function exportExercises(){
        echo 'exportar exercicios';
    }

}
