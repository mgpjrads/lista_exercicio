<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('exer1');
    }
    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1', ['soma' => $soma]);
    }



    public function abrirFormExer2(){
        return view('exer2');
    }
    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $diferenca = $valor1 - $valor2;
        return view('exer2', ['diferenca' => $diferenca]);
    }



    public function abrirFormExer3(){
        return view('exer3');
    }
    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $produto = $valor1 * $valor2;
        return view('exer3', ['produto' => $produto]);
    }


    

    public function abrirFormExer4(){
        return view('exer4');
    }
    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 != 0){
            $quociente = $valor1 / $valor2;
            return view('exer4', ['quociente' => $quociente]);
        } else {
            $erro = "Não é possível dividir por zero.";
            return view('exer4', ['erro' => $erro]);
        }
        
    }

}