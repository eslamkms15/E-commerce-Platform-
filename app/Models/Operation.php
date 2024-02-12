<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operation';
    protected $primaryKey = 'operation_id';

    protected $fillable = [
        'operation_name',
        'price',
        'Availability',
        'ServiceID',
    ];

    // Relationship with the Service model
    public function service()
    {
        return $this->belongsTo(Service::class, 'ServiceID', 'ServiceID');
    }
}
