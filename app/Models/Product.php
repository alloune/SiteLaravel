<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

//    protected $table = 'products';

    protected $fillable = ['name', 'category_id', 'price', 'description', 'image', 'weight', 'available', 'quantity'];

    public $timestamps = false;

    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }


}
