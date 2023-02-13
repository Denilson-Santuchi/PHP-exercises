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
        Serie::create($request->all());
        $request->session()->flash('mensagem.sucesso', 'Série adicionanda com sucesso');

        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->serie);
        $request->session()->flash('mensagem.sucesso', 'Série removida com sucesso');

        return to_route('series.index');
    }
}
