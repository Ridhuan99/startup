<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    use HasFactory;

    protected $fillable = [
        'stall_name',
        'stall_phone_number',
        'stall_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
