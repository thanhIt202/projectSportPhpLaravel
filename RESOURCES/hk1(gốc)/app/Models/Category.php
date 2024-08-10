<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function scopeSearch($query)
    {
        $keyword = request('keyword');
        $query = $query->orderBy('name')->where('name','LIKE','%'.$keyword.'%');
        return $query;
    }
}
