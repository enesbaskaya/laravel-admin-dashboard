<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    use HasFactory;
    function getCategory(){
        return $this->hasOne('App\Models\Category','id','categoryId');
    }
}
