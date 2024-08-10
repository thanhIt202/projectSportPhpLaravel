<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'customer_id',
        'status'
    ];


    public function details($id)
    {
        $data = DB::table('order_details as d')
        ->select('d.quantity', 'd.buy_price','p.name','p.image', DB::raw('SUM(d.quantity * d.buy_price) as TotalPrice'))
       ->join('products as p', 'd.product_id','=', 'p.id')
       ->where('d.order_id', $id)
       ->groupBy('d.quantity', 'd.buy_price','p.name','p.image')
       ->get();

        return $data;
    }

    public function scopeSearch($query)
    {
        $keyword = request('keyword');
        $query = $query->orderBy('name')->where('name','LIKE','%'.$keyword.'%');
        return $query;
    }
}