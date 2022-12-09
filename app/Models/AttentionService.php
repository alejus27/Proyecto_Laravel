<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attention_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'date_service',
        'id_attention',
        'id_service'
    ];
}
