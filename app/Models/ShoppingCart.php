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
    public function medicines()
    {
        return $this->belongsToMany(Role::class);
    }

    //Relación 1 a n
    public function petOwer()
    {
        return $this->belongsTo(Role::class);
    }


}
