<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;

    protected $fillable=['name','model','price'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
