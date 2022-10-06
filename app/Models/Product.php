<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'description',
        'brand',
        'price',
        'quantity',
        'stock_alert'
    ];

    public function order_detail()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function cart()
    {
        return $this->hasMany('App\Models\Cart');
    }
}