<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Figure;

class FigureController extends Controller
{
    public function index(){
        $figures = Figure::all();
        return view('Figure', compact('figures'));
    }
    //
}
