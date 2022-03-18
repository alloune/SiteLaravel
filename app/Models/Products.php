<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price', 'available', 'quantity'];
    use HasFactory;
    public $timestamps= false;


    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function order(){
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }
}
