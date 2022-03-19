<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps=false;
    use HasFactory;
    public function products(){
        return $this->hasMany('App\Models\Products');
    }
}