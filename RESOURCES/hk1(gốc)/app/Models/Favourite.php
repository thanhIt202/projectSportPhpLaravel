<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 
        'product_id'
    ];
    public function pro()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function cus()
    {
        return $this->hasOne(Customer::class, 'id', 'customer_id');
    }
}