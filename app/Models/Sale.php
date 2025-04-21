<?php
// app/Models/Sale.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id', 'product_id', 'quantity', 'sale_date'
    ];

    // Связь многие-к-одному с таблицей partners
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    // Связь многие-к-одному с таблицей products
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
