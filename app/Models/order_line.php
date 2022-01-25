<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_line extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'amount', 'price', 'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    } 
}
