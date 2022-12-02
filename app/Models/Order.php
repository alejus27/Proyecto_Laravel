<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id'
    ];

    //Relación 1 a n
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
