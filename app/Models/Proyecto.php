<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    use HasFactory;
    public function Persona(){
        return $this->hasMany(Persona::class); //un persona pertenece a
    }
}

