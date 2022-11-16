<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'expiration_date'
    ];

     //Relación 1 a 1
     public function profile()
     {
         return $this->hasOne(Profile::class);
     }
 

    //Relación n a n
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
