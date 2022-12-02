<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'user_id'
    ];

    //Relación n a n
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class);
    }

    //Relación 1 a n
    public function petOwner()
    {
        return $this->belongsTo(ShoppingCart::class);
    }


}
