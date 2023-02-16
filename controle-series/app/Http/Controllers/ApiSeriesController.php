<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class ApiSeriesController extends Controller
{
    public function getAll()
    {
        return Series::all();
    }
}
