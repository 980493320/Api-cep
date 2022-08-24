<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class buscarCepController extends Controller
{
   
   public function index()
   {
    return view ('buscarcep.index');

   }

   public function buscar(Request $request)
   {
      $cep = $request->input('cep');
      dd($cep);
      $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();

      //return view ('adicionar')->with(
        //[
         // 'cep'=> $request->input('cep'),
         // 'logradouro' =>$response['rua'],
         // 'bairro' => $response['bairro'],
         // 'cidade'=> $response['cidade'],
         // 'estado'=> $response['uf'],
       // ]
    // );
     



    // $response = Http::post('http://example.com/users', [
      // 'name' => 'Steve',
      //'role' => 'Network Administrator',
  // ]);
      // dd($response);
      
       //$response = Http::get(URL:"https://viacep.com.br/ws/$cep/json/")->json();
       //dd($response);
   }
   
   
}
