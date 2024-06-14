<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table='foods';
    use HasFactory;
    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'Rest_id');
    }
    public function orders(){
        return $this->hasMany(Order::class,'FoodId');
    }
}
