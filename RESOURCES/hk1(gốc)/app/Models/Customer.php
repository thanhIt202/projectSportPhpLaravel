<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class,'customer_id','id')->orderBy('created_at', 'DESC');
    }

    public function orders12356()
    {
        $data = DB::table('orders as o')
             ->select('o.id', 'o.created_at', 'o.status','o.address', DB::raw('SUM(d.quantity * d.buy_price) as TotalPrice'))
            ->join('order_details as d', 'd.order_id','=', 'o.id')
            ->where('o.customer_id', $this->id)
            ->groupBy('o.id', 'o.created_at', 'o.status','o.address')
            ->get();

        return $data;
    }
}
