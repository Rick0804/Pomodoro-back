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
    }

    public function show(Request $request){
        $pomos = Pomos::all();
        return response()->json($pomos);
    }

    public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|max:255',
      'body' => 'required',
    ]);
    $post = Post::find($id);
    $post->update($request->all());
    return redirect()->route('posts.index')
      ->with('success', 'Post updated successfully.');
  }

}
