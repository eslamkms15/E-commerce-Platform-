<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderOperation extends Model
{

    use HasFactory;

    protected $fillable = ['order_id', 'operation_id', 'quantity'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function operation()
    {
        return $this->belongsTo(Operation::class);
    }
}
