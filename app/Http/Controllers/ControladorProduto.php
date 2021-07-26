<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Produto::all(); //Listar
        return view('produtos', compact('prods')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Produto();
        $prod->modelo       = $request->input('modelo');
        $prod->fabricante   = $request->input('fabricante');
        $prod->cor          = $request->input('cor');
        $prod->ml           = $request->input('ml');
        $prod->preco_compra = $request->input('valorCompra');
        $prod->preco_venda  = $request->input('valorVenda');
        $prod->quantidade   = $request->input('quantidade');
        $prod->save();

        return redirect('/produtos');
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
        $prods = produto::find($id);
        if(isset($prods)){
            return view('editarproduto', compact('prods'));
        }
        return redirect('/produtos');
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
        $prods = produto::find($id);
        if(isset($prods)) { 
            $prods->modelo       = $request->input('modelo');
            $prods->cor          = $request->input('cor');
            $prods->fabricante   = $request->input('fabricante');   
            $prods->ml           = $request->input('ml');
            $prods->preco_compra = $request->input('valorCompra');
            $prods->preco_venda  = $request->input('valorVenda');
            $prods->quantidade   = $request->input('quantidade');
            $prods->save();
        }
        return redirect('/produtos');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prods = Produto::find($id);
        if (isset($prods)) {
            $prods->delete();
        }
        return redirect('/produtos');
    }
}
