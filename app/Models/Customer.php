<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'address', 'postal_code', 'city'];
    public $timestamps= false;


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
