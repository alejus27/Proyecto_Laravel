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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
