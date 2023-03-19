<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();

        return response()->json($contatos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->endereco = $request->endereco;
        $contato->observacoes = $request->observacoes;

        $contato->save();
        return response()->json($contato);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = Contato::Find($id);
        $contato->nome = $request->nome ?? $contato->nome;
        $contato->email = $request->email ?? $contato->email;
        $contato->telefone = $request->telefone ?? $contato->telefone;
        $contato->endereco = $request->endereco ?? $contato->endereco;
        $contato->observacoes = $request->observacoes ?? $contato->observacoes;
        $contato->save();

        return response()->json($contato);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contato::Find($id);
        $contato->delete();

        return response("", 204);
    }
}
