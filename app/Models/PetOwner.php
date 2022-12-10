<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HassApiTokens;

class PetOwner extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'password'
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
