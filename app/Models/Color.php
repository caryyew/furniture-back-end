<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
   protected $guarded = ['id'];

   public $timestamps = false;

   public function products(): HasMany
   {
       return $this->hasMany(Product::class);
   }
}
