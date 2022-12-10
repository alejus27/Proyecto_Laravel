<?php

namespace App\Models;

use App\Models\Attention as ModelsAttention;
use Attention;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description'
    ];

     public function attention()
    {
        return $this->hasOne(ModelsAttention::class);
    }
    
}
