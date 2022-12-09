<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_attention',
        'description',
        'attention_id',
        'id_veterinary',
        'id_pet'

    ];
}
