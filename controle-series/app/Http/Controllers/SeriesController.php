<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Mail\SeriesCreated;
use App\Models\Series;
use App\Models\User;
use App\Repositories\SeriesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
    }

    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')
            ->with(compact('series'))
            ->with(compact('mensagemSucesso'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repository->add($request);

        $userList = User::all();
        foreach ($userList as $user) {
            $email = new SeriesCreated(
                $serie->nome,
                $serie->id,
                $request->seasonsQty,
                $request->episodesPerSeason
            );
            Mail::to($user)->send($email);
        }

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionanda com sucesso");
    }

    public function destroy(Series $serie)
    {
        $serie->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' removida com sucesso");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
