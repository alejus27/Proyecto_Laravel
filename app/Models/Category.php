<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'medicine_id'
    ];

    //Indicar que le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'category_id');
    }

}
