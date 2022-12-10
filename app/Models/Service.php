<?php

namespace App\Models;

use Attention;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function attentions()
    {
        return $this->belongsToMany(Attention::class);
    }
}
