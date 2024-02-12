<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'ServiceID';

    protected $fillable = [
        'ServiceName',
        'Description',
        'img',
    ];

    // Relationship with the Operation model
    public function operation()
    {
        return $this->hasOne(Operation::class, 'ServiceID', 'ServiceID');
    }
}
