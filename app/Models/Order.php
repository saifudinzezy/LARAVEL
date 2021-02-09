<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function books(){
        //Mendefinisikan di model Order bahwa model ini bisa mempunyai banyak Book, kita memberi
        //nama relation tersebut sebagai books
        return $this->belongsToMany("App\Models\Book");
    }
}
