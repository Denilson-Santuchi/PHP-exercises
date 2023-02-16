<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;

class ApiSeriesController extends Controller
{
    public function index()
    {
        return Series::all();
    }

    public function store(SeriesFormRequest $request)
    {
        return response()
            ->json(
                Series::create($request->all()),
                201
            );
    }
}
