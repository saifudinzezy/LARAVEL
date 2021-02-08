<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    use HasFactory;

    public function user(){
        //Dengan kode ini kita mengatakan kepada model ini (model Handphone) belongsTo atau
        //dimiliki oleh sebuah model User.
        return $this->belongsTo("App\Models\User");
    }
}
