<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price', 'weight', 'available', 'quantity'];
    use HasFactory;
    public $timestamps= false;


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
