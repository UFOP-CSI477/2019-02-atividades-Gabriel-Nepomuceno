<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    // request-> subject n:1
    public function professor(){
        return $this->belongsTo('App\Models\Professor');
    }
    // request-> user n:1
    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
    }
}
