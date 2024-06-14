<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public function category(){
       return $this->belongsTo(Category::class,"Cat_Id");
    }
    public function foods(){
       return $this->hasMany(Food::class,'Rest_id');
    }
}
