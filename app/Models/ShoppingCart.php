<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    //Relación n a n
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    //Relación 1 a n
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


}
