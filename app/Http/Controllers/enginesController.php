<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\engine;
class enginesController extends Controller
{
    function start(){
        $engine= engine::all();
        return view('index', compact('engine'));
        //return view('index');
    }
}