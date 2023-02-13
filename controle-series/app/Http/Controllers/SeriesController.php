<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'The last of us'
        ];

        return view('listar-series')->with(compact('series'));
    }
}