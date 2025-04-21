<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'rating', 'address', 'director_name', 'phone', 'email'
    ];

    // Связь один-ко-многим с таблицей sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    // Расчет скидки для партнера
    public function calculateDiscount()
    {
        $totalSales = $this->sales->sum('quantity');

        if ($totalSales < 10000) {
            return 0;
        } elseif ($totalSales < 50000) {
            return 5;
        } elseif ($totalSales < 300000) {
            return 10;
        } else {
            return 15;
        }
    }
}
