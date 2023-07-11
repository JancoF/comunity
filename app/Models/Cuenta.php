<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    public function Contribuidor (){
        return $this->belongsTo(Contribuidor::class); 
    }
}
