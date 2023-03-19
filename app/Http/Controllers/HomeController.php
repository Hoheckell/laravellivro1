<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class HomeController extends Controller
{
    public function index() {

        $contatos = []; //Criamos um array vazio
        $contato1 = new stdClass(); //Criamos um contato vazio

        $contato1->nome = "Jeferson"; //adiciona o nome do contato
        $contato1->telefone = "98989-9898";  //adiciona o telefone do contato

        array_push($contatos, $contato1);  //adiciona o contato criado ao array vazio

        //criamos outro contato vazio
        $contato2 = new stdClass();

        $contato2->nome = "Aline";
        $contato2->telefone = "21212-2121";

        array_push($contatos, $contato2);  //adiciona o outro contato ao array, agora temos dois

        //passamos o parâmetro 'contatos' e atribuimos o array criado como valor dele, enviamos para a view
        return view('home',['contatos' => $contatos ]);
    }
}
