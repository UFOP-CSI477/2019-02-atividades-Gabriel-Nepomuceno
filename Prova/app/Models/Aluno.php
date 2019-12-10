<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // 1->n
    public function professor(){
        return $this->hasMany('App\Models\Projeto');
    }
}
