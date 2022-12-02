<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

     //Relación 1 a 1
     public function medicineDetails()
     {
         return $this->hasOne(MedicineDetails::class);
     }
 

    //Relación n a n
    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class);
    }

}
