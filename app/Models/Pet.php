<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'age',
        'color',
        'weight',
        'breed',
        'id_pet_owner'
    ];
}
