<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name',
        'status',
        'price',
        'sale_price',
        'image',
        'short_content',
        'long_content',
        'category_id'
    ];
    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    
    public function scopeSearch($query)
    {
        $keyword = request('keyword');
        $query = $query->orderBy('name')->where('name','LIKE','%'.$keyword.'%');
        return $query;
    }

    public function scopeNew($query, $limit = 12)
    {
        $query = $query->orderBy('created_at','DESC')->limit($limit);

        return $query;
    }
    public function scopeSale($query, $limit = 12)
    {
        $query = $query->orderBy('sale_price','ASC')->where('sale_price', '>', 0)->limit($limit);

        return $query;
    }
    public function scopeHot($query, $limit = 12)
    {
        $query = $query->orderBy('sale_price','ASC')->limit($limit);

        return $query;
    }

    public function checkFav($acc_id)
    {
        $check = Favourite::where(['product_id' => $this->id,'customer_id' => $acc_id])->first();

        return $check;;
    }
}
