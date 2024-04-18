<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['car_id','customer'];

    public function accessories()
     {
        return $this->belongsToMany(Accessory::class);
     }

     public function car()
     {
        return $this->BelongsTo(Car::class);
     }
}
