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
            'descricao' => '',
            'Qntd_pomos' => 'integer',
        ]);

        $pomoCreater = Pomos::create([
            'Pomo' => $request->Pomo,
            'descricao' => $request->descricao,
            'Qntd_pomos' => $request->Qntd_pomos,
        ]);
    }

    public function show(Request $request){
        $pomos = Pomos::all();
        return response()->json($pomos);
    }

    public function update(Request $request, $id){
        $request->validate([
            'Pomo' => 'string|max:255',
            'descricao' => '',
            'Qntd_pomos' => 'integer',
            'Qntd_pomos_feitos' => 'integer'

        ]);

        $pomodoro = Pomos::findOrFail($id);

        $pomodoro->update($request->all());
    }

    public function delete($id){
        $pomodoro = Pomos::findOrFail($id);
        $pomodoro->delete();
    }
}
