<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'phone', 'notes'];

    public function operations()
    {
        return $this->belongsToMany(Operation::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
