<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    //relacion de uno a muchos
    public function posts(){
        return $this->belongsToMany(posts::class);
    }
}
 