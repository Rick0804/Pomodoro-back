<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notas;

class NotasController extends Controller
{
    public function index(){

    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:50',
            'descricao' => 'required|string|max:255'
        ])

        $createNote = Notas::create([
            'title' => $request->title,
            'descricao' => $request->descricao
        ])
    }

    public function show(Request $request){

    }
}
