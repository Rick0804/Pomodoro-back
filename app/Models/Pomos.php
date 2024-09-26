<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pomos extends Model
{
    protected $table = 'pomodoroDB';
    protected $fillable = ['Pomo', 'Notas', 'Qntd_pomos'];
}
