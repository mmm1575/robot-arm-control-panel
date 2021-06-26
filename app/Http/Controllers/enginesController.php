<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\engine;

class enginesController extends Controller
{
    public function start(){
        $engine= engine::all();
        return view('index', compact('engine'));
    }

    public function save(Request $request){
        engine::where('engineNumber', 1)
            ->update(['value'=> $request->engine1
        ]);
        engine::where('engineNumber', 2)
            ->update(['value'=> $request->engine2
        ]);
        engine::where('engineNumber', 3)
            ->update(['value'=> $request->engine3
        ]);
        engine::where('engineNumber', 4)
            ->update(['value'=> $request->engine4
        ]);
        engine::where('engineNumber', 5)
            ->update(['value'=> $request->engine5
        ]);
        engine::where('engineNumber', 6)
            ->update(['value'=> $request->engine6
        ]);
        return redirect()->route('/');
    }
    public function turn_on(){
        $engine= engine::first();
        if($engine->on ==1){
            DB::table('engines')->update(array('on' => 0));
            return redirect()->route('/');
        }
        else{
            DB::table('engines')->update(array('on' => 1));
            return redirect()->route('/');
        }
    }
}