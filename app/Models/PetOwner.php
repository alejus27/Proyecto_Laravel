<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address'
    ];

    //Relación 1 a n
    public function shoppingCarts()
    {
        return $this->hasMany(ShoppingCart::class);
    }

    //Relación 1 a n
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
