<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_image',
        'product_description',
        'product_price',
    ];

    public function stall()
   {
       return $this->belongsTo(Stall::class);
   }

   public function order()
   {
       return $this->belongsToMany(Order::class);
   }

}
