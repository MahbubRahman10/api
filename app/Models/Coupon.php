<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    
    protected $fillable = ['code', 'discount', 'expiry_date', 'usage_limit'];

    public function orders()
    {
        // If a coupon can be applied to many orders
        return $this->hasMany(Order::class);
    }
}
