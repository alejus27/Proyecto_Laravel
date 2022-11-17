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
        'address',
        'order_id',
        'cart_id'
    ];

    //Relación 1 a n
    public function carts()
    {
        return $this->hasMany(User::class);
    }

}
