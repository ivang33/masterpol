<?php
// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'coefficient'
    ];

    // Связь один-ко-многим с таблицей sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
