<?php

namespace App\Http\Controllers;

use App\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livro = livros::latest()->paginate(4);
        return view ('Livros.index', compact('livro'))->with('i',(request()->input('page',1)-1)*4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = ['Horror', 'Romance', 'Distopia', 'Aventura'];

        return view ('Livros.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['titulo' =>'required',
        'autor'=>'required',
        'genero' => 'required']);

        $data = new livros;
        $data->titulo = $request->titulo;
        $data->autor = $request->autor;
        $data->genero = $request->genero;
        $data->ano_publicacao = $request->ano_publicacao;
        $data->save();
        return redirect()->route('livros.index')->with('Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(Livros $livros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livros $livros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livros)
    {
        //
    }
}
