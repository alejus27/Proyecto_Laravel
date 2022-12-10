<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clinicalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason_consultation',
        'vaccination',
        'sterilized',
        'weight',
        'pulse',
        'deworming',
        'id_pet',
        'antecedents'
    ];

    public function pet()
    {   
        return $this->belongsTo(pet::class, 'id_pet');
    }

}
