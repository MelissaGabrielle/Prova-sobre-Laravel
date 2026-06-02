<?php

namespace App\Http\Controllers;

use App\Models\Ferramenta;
use App\Models\Categoria;
use Illuminate\Http\Request;

class FerramentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferramentas = Ferramenta::All();
        $categorias = Categoria::All();
        return view('ferramentas.index' , compact('ferramentas' , 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::All();

        return view('ferramentas.create' , compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ferramenta::create([
            'categorias_id' => $request->input('categorias_id'),
            'nome' => $request->input('nome'),

            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),

            'quanti_estoque' => $request->input('quanti_estoque'),
            'estoque_min' => $request->input('estoque_min')
            
        ]);

        return redirect()->route('ferramentas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ferramenta $ferramenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ferramenta $ferramenta)
    {
        $categorias = Categoria::All();

        return view('ferramentas.edit' , compact('ferramenta' , 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ferramenta $ferramenta)
    {
        $ferramenta->update([

            'categorias_id' => $request->input('categorias_id'),
            'nome' => $request->input('nome'),

            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),

            'material_cabo' => $request->input('material_cabo'),
            'tamanho_chave' => $request->input('tamanho_chave'),
            'tensao_eletrica' => $request->input('tensao_eletrica'),
            'peso' => $request->input('peso'),

            'quanti_estoque' => $request->input('quanti_estoque'),
            'estoque_min' => $request->input('estoque_min')

        ]);

        return redirect()->route('ferramentas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ferramenta $ferramenta)
    {
        $ferramenta->delete();

        return redirect()->route('ferramentas.index');
    }
}
