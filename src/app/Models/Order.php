<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // ⬅ TAMBAHKAN INI
use App\Models\OrderItem; // ⬅ biar relasi dikenali

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_price'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
