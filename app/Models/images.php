<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    //relacion polimorfica
    public function image(){
        return $this->morphOne(images::class, 'imageable');
    }
}
 