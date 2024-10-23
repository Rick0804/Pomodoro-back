<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pomos extends Model
{
    use HasFactory;
    protected $table = 'pomos';
    protected $fillable = ['Pomo', 'descricao', 'Qntd_pomos', 'Qntd_pomos_feitos'];
}
