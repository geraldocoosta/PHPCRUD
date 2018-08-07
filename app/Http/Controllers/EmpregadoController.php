<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\empregado;

class EmpregadoController extends Controller
{
    //
    public function index(){
    	$emp = empregado::all();
        //echo"<pre>";
       // print_r($emp);
        //echo"</pre>";
     return view('empregado.empregado',array('empregado' => $emp));
 }


    //metodo para listar
 public function criar(){  
   return view('empregado.criar');
   
}


    //metodo para cadastrar
public function create(Request $request){
    $empreg = new empregado();
    $empreg->CPF = $request->CPF;
    $empreg->NOME = $request->NOME;
    $empreg->PROFISSAO = $request->PROFISSAO;
    $empreg->CARGO = $request->CARGO;
    $empreg->DATANASC = $request->DATANASC;
      //  echo "<pre>";
        //var_dump($empreg);
        //echo "</pre>";
    $empreg->save();
    return redirect('empregado')->with('message','Sucesso na criação');
}


}
