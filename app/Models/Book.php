<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function orders(){
        //Mendefinisikan model Book bahwa model ini bisa dimiliki oleh banyak Order, kita definisikan
        //relation ke model Order sebagai orders
        return $this->belongsToMany("App\Models\Order");
    }
}
