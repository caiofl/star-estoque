<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Cliente::all();  //--Listar--}}
        return view('clientes', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        
        $cliente->nome      = $request->input('nomeCliente');
        $cliente->email     = $request->input('email');
        $cliente->tel       = $request->input('telefone');
        $cliente->endereco  = $request->input('rua');
        $cliente->bairro    = $request->input('bairro');
        $cliente->cidade    = $request->input('cidade');
        $cliente->uf        = $request->input('estado');
        $cliente->cep       = $request->input('cep');
        $cliente->numero    = $request->input('n');

        $cliente->save();
        return redirect('/clientes');
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
        $clients = cliente::find($id);
        if(isset($clients)){
            return view('editarcliente', compact('clients'));
        }
        return redirect('/clientes');
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
        $clients = cliente::find($id);
        if(isset($clients)){
            $clients->nome      = $request->input('nomeCliente');
            $clients->email     = $request->input('email');
            $clients->tel       = $request->input('telefone');
            $clients->endereco  = $request->input('rua');
            $clients->bairro    = $request->input('bairro');
            $clients->cidade    = $request->input('cidade');
            $clients->uf        = $request->input('estado');
            $clients->cep       = $request->input('cep');
            $clients->numero    = $request->input('n');
            $clients->save();
        }
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $clients = Cliente::find($id);
       if (isset($clients)) {
           $clients->delete();
       }
       return redirect('/clientes');
    }
}
