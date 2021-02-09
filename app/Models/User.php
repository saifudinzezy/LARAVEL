<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function handphones(){
        //Agar relationship antara model User dan Handphone menjadi one-to-many maka kita tambahkan kode ini
        //di masing-masing model
        return $this->hasMany("App\Models\Handphone");
    }
}
