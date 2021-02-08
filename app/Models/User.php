<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function handphone(){
        //Dengan kode ini kita mengatakan kepada model bahwa model ini (model User) hasOne 
        //atau boleh memiliki satu Handphone.
        return $this->hasOne("App\Models\Handphone");
    }
}
