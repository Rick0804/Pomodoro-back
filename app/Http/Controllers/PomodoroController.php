<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pomos;

class PomodoroController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        $request->validate([
            'Pomo' => 'required|string|max:255',
            'descricao' => 'string|max:255',
            'Qntd_pomos' => 'required|integer',
        ]);

        $pomoCreater = Pomos::create([
            'Pomo' => $request->Pomo,
            'descricao' => $request->descricao,
            'Qntd_pomos' => $request->Qntd_pomos,
        ]);
        return response()->json(['message' => 'Dados recebidos com sucesso!']);

    }

    public function show(Request $request){

    }


}
