<?php

namespace App\Models;

use App\Models\Diagnosis as ModelsDiagnosis;
use Diagnosis;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Service;

class Attention extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_attention',
        'description',
        'id_diagnosis',
        'id_veterinary',
        'id_pet'

    ];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }


    public function diagnosis()
    {
        return $this->belongsTo(ModelsDiagnosis::class, 'id_diagnosis');
    }
}
