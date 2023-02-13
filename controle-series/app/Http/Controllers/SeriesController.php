<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')
            ->with(compact('series'))
            ->with(compact('mensagemSucesso'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem.sucesso', "Série '{$serie->nome}' adicionanda com sucesso");

        return to_route('series.index');
    }

    public function destroy(Serie $serie, Request $request)
    {
        $serie->delete();
        $request->session()->flash('mensagem.sucesso', "Série '{$serie->nome}' removida com sucesso");

        return to_route('series.index');
    }
}
